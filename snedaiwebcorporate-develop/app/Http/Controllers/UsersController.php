<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Session;
use TokenAuthenticationHelper;
use App\Models\Forgottenpwd;
use DateTime;
use Illuminate\Http\Exceptions\ThrottleRequestsException;
use Illuminate\Support\Facades\RateLimiter;

class UsersController extends Controller
{
    //Connexion 
    public function login_user(request $request){
    	$emailtel = trim($request->emailtel);
      $connect_mode = trim($request->connect_mode);
      $tel = trim($request->tel);
      $emailtelfin='';
      
    	$password = trim($request->password);
      $indicatif = trim($request->indicatif);


      if($connect_mode =='email') {$emailtelfin = $emailtel; $indicatif='null';};
      if($connect_mode =='phone') $emailtelfin = $tel;

      // dd($emailtelfin);
        // seon connecter avec numero telephone  8 chiffre
        //if(strlen($emailtel) == 10) $emailtel = '225'.$emailtel;

          try {

        	      $client = new client;
                  $response = $client->request('POST', config('AppConfig.api_passerelle').'api/snedai_hub/connection', [
                    'headers' => [
                          'Authorization' => 'Bearer YOUR_TOKEN_HERE',
                    ],
                      'json' => [
                        'request'=>[
        		                  'login'=>$emailtelfin,
                                  'login_code'=>$indicatif,
        		                  'password'=>$password,    
        		              ]
                      ],
                  ]);
                  $response_api = json_decode($response->getBody(), true);
                  $api_code = $response_api['api_code'];
                  $api_message = $response_api['api_code'];

                 // dd($response_api);

                  if ($api_code == 200) {
                  	# code...

                    RateLimiter::clear('login.'.$request->ip());

                     $page='/demande_passeport'; 
                  	 $checkciv='m';
                  	 Session::put('email', $response_api['data']['email']);
                     Session::put('msisdn', $response_api['data']['msisdn']);
                     Session::put('firstname', $response_api['data']['firstname']);
                     Session::put('lastname', $response_api['data']['lastname']);
                     Session::put('fullname', $response_api['data']['fullname']);
                     Session::put('account_status', $response_api['data']['account_status']);
                     Session::put('auth_token', $response_api['data']['auth_token']);
                     Session::put('msisdnsaved', $response_api['data']['msisdn']);
                     Session::put('telephone_code', $response_api['data']['telephone_code']);


                      switch ($response_api['data']['civility'] ) {
        		            case 'mister':
        		              $checkciv='m';
        		              break;
        		            case 'miss':
        		              $checkciv='mlle';
        		              break;
        		            case 'madam':
        		              $checkciv='mme';
        		              break;
        		             default:
        		              $checkciv='m';
        		              break;
        		          }

                  if (Session::has('awaitingPage')) {
                      $page = Session::get('awaitingPage');
                  }

        		       Session::put('civility', $checkciv);
        		       return 'logged*'.$page;
                  }

                  //invalid password
                  if ($api_code == 401) {
                  	  $api_info = $response_api['data'];
                  	  if ($api_info == 'Invalid password!') { 
                         $api_codefin ='failed*Invalid password!';
                        // return $api_codefin;

                          $key= $request->ip();
                          // dd($key);
                         return view('errorattempts',
                            [
                                'key'=>$key,
                                'retries'=>RateLimiter::retriesleft($key,3),
                                'seconds'=>RateLimiter::availableIn($key),
                            ]
            );
                      }
                  }
                   if ($api_code == 400) {
                  	  $api_info = $response_api['data'];
                  	  if ($api_info == 'Invalid login!') { 
                        $api_codefin ='failed*Invalid login!';
                        // return $api_codefin;


                         $key= $request->ip();
                          // dd('qq '.$key);
                         //dd(RateLimiter::retriesleft($key,5));
                         return view('errorattempts',
                            [
                                'key'=>$key,
                                'retries'=>RateLimiter::retriesLeft($key,3),
                                'seconds'=>RateLimiter::availableIn($key)
                            ]
                        );

                    }
                  }

                  if ($api_code == 403) {
                      $api_info = $response_api['data'];
                      if ($api_info == 'Account not actived!') { 
                        $api_codefin ='failed*Account not actived!';
                        // return $api_codefin;

                         $key= $request->ip();
                         return view('errorattempts',
                            [
                                'key'=>$key,
                                'retries'=>RateLimiter::retriesleft($key,3),
                                'seconds'=>RateLimiter::availableIn($key)
                            ]
                        );


                    }
                  }

      
              
          }catch (RequestException $e) {

            $response_error_status =  $e->getResponse()->getStatusCode();
            $message = json_decode((string) $e->getResponse()->getBody(),true);
            // dd($response_error_status);

        //     if ($response_error_status == 409) {
        //   # code...
        //   return 'cantdelete';
        // }

          }
           catch (Exception $e) {

             $response_error_status =  $e->getResponse()->getStatusCode();
            $message = json_decode((string) $e->getResponse()->getBody(),true);
            // dd($response_error_status);
            // dd('fb' .$e);
              
          }

          catch (ThrottleRequestsException $e) {
           
            $response_error_status =  $e->getResponse()->getStatusCode();
            $message = json_decode((string) $e->getResponse()->getBody(),true);
            // dd($response_error_status);
              
          }


    }


    public function create_user (request $request){

    	$civility =   trim($request->civility);
    	$lastname = trim($request->lastname);
    	$firstname = trim($request->firstname);
    	$userTel = trim($request->usertel);
    	$userEmail = trim($request->userEmail);
    	$password = trim($request->password);
      $indicatif = trim($request->indicatif);




    	  $client = new client;
          $response = $client->request('POST', config('AppConfig.api_passerelle').'api/snedai_hub/create', [
            'headers' => [
                  'Authorization' => 'Bearer YOUR_TOKEN_HERE',
            ],
              'json' => [
                'request'=>[
                              "email"=> $userEmail,
                              "firstname"=> $firstname,
                              "lastname"=> $lastname,
                              "civility"=> $civility,
                              "msisdn"=>$userTel,
                              "telephone_code"=>$indicatif,
                              "password"=> $password,
                              "account_type"=> "customer",
                          ]
              ],
          ]);
          $response_api = json_decode($response->getBody(), true);
          $api_code = $response_api['api_code'];
          $api_message = $response_api['api_message'];
          // "api_message" => "Success!"
          // dd($response_api);
          if ( $api_code == 200) {
            # code...
          //   array:3 [
          //   "api_code" => 200
          //   "api_message" => "Success!"
          //   "data" => array:9 [
          //     "email" => "testmoise564654@gmail.com"
          //     "msisdn" => "2250700000002"
          //     "firstname" => "temoise"
          //     "lastname" => "testmoise"
          //     "fullname" => "temoise testmoise"
          //     "auth_token" => "d1dc3dec-73fe-461e-aea5-243b92186bc9"
          //     "civility" => "mister"
          //     "account_status" => "pending"
          //     "created_at" => "2021-03-03T08:33:00.294Z"
          //   ]
          // ]

            return "success";
          }
          if ($api_code == 400) {
            # code...
            $data= $response_api['data'];
            return $data;
          }
          if ($api_code == 401) {
            # code...
            $data= $response_api['data'];
            return $data;
          }
    }


    public function forgotten_pwd(request $request){

      $emailpwd=trim($request->email);

     // dd($emailpwd);
    /** SEND MAIL **/
    
        /** SEND CODE BY SMS **/
        $client = new client;
        $response = $client->request('POST', config('AppConfig.api_passerelle').'api/snedai_hub/password_resetting/init', [
           'headers' => [
                'Authorization' => 'Bearer YOUR_TOKEN_HERE',
            ],
            'json' => [
                'request'=>[
                    'login'=>$emailpwd,
                    //'channel'=>"sms",    
                ]
            ],
        ]);
        $response_api = json_decode($response->getBody(), true);
       // dd($response_api);
        $api_code = $response_api['api_code'];
        $currentDate = date('Y-m-d h:i:s');

        Forgottenpwd::create([
                        'token'=>$response_api['data'],
                        'email'=>$emailpwd,
                        'created_at'=>$currentDate,
                    ]);
           
        if($api_code==403){
            //     Alert::error("
            //         Désolé, votre compte n’est pas encore activé. 
            //         Pour profiter de vos services, veuillez consulter votre boite mail et cliquer sur le lien d’activation. 

            //         ")->persistent('Fermer');
            // return redirect()->back();
        }

      if($api_code==200){


             
        return 'success';
      //           //insertion du token dans la table des mot de passe oublié
      //     $data[]=[
      //         'email'=>$emailpwd,
      //         'token'=>$response_api['data'] 
      //     ];
      //     Forgottenpwd::insert($data);
          
      //     /** SEND CODE BY SMS **/
              
      //         //Inserer le token et l'email en base

      //     Alert::success("Un mail a été envoyé à l'adresse  ".($emailpwd)." veuillez le consulter s'il vous plait")->persistent('Fermer');
      // }else{

      //       Alert::error("L'email utilisée est incorrecte ou n'existe pas")->persistent('Fermer'); 
      //          return redirect('/');
      }

      if ($api_code==400) {
        # code...
         $data= $response_api['data'];
         return $data;
      }


    }


    public function update_user_data(request $request){



         $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();

         // dd('225'.$request->telephone);
         $finalphone =$request->telephone;
         $indicatif =$request->indicatif;

         $client0 = new client;
        $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/update/account', [
       'headers' => [
                'Authorization' => 'Bearer '.$returnedToken,
            ],
        'json' => [
        'request'=>[
            'login'=>Session::get('msisdn'),
            'login_code'=>Session::get('telephone_code') , 
                      'firstname'=>$request->firstname,
                      'lastname'=>$request->lastname,
                      'email'=>$request->email,
                      'civility'=>$request->civility,
                      'msisdn'=>$finalphone,
                      'telephone_code'=>$indicatif,
                    ] 
        ],
    ]);
    $response_api0 = json_decode($response0->getBody(), true);
        $api_code = $response_api0['api_code'];
         
         // dd($response_api0 );
        if($api_code==200){
            
            Session::put('email',$response_api0['data']['email']);
            Session::put('msisdn',$response_api0['data']['msisdn']);
            Session::put('firstname',$response_api0['data']['firstname']);
            Session::put('lastname',$response_api0['data']['lastname']);
            Session::put('fullname',$response_api0['data']['fullname']);
            Session::put('telephone_code',$response_api0['data']['telephone_code']);

             switch ($response_api0['data']['civility'] ) {
                case 'mister':
                  $checkciv='m';
                  break;
                case 'miss':
                  $checkciv='mlle';
                  break;
                case 'madam':
                  $checkciv='mme';
                  break;
                 default:
                  $checkciv='m';
                  break;
              }


            Session::put('civility',$checkciv);
            return 'success';
           
        }else{
          return 'error';
        }

    }


     public function update_user_pwd(Request $request){

         
         $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();
         
     
          $client1 = new client;
         $response1 = $client1->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/update/password', [
           'headers' => [
                'Authorization' => 'Bearer '.$returnedToken,
            ],
            'json' => [
                'request'=>[
                        'login'=>Session::get('email'),
                        'current_password'=>$request->password,
                        'new_password'=>$request->newpass,
                    ] 
            ],    
        ]);
        $response_api = json_decode($response1->getBody(), true);
        $api_code2 = $response_api['api_code'];

         // dd($response_api);
              if( $api_code2==200){
                  
                    return 'success';
                }
                if( $api_code2==401){
                  
                   $data= $response_api['data'];
                  return $data;
                }
    }

    public function historiqueCodeRdv () {

         $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();
         $next=1;

         $client0 = new client;
         // $response0 = $client0->request('POST',$ipadress_api.'api/snedai_hub/customer/applications_log', [
         $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'rdv_application',
                              'login'=>Session::get('email'),
                              'login_code'=>'null',
                              'page'=>$next,
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
          $transactionlist = $response_api0['data'];
         // dd($response_api0);
          return view('historique_transaction_list',compact('transactionlist'));

    }

    public function historiqueDemandes () {

         $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();
         $next=1;

         $client0 = new client;
         // $response0 = $client0->request('POST',$ipadress_api.'api/snedai_hub/customer/applications_log', [
         $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'passport_request',
                              'login'=>Session::get('email'),
                              'login_code'=>'null',
                              'page'=>$next,
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
          $transactionlist = $response_api0['data'];
          //dd($response_api0);
          return view('historique_transaction_list_dmd',compact('transactionlist'));

    }





    public function historiqueRecuPaiement(request $request){

       $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();
         $next=1;

         $client0 = new client;
         // $response0 = $client0->request('POST',$ipadress_api.'api/snedai_hub/customer/applications_log', [
         $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'passport_request',
                               'login'=>Session::get('email'),
                                'login_code'=>'null',
                              'page'=>$next,
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
          $transactionlist = $response_api0['data'];
         // dd($transactionlist);
          return view('historique_transaction_list_rc_pmt',compact('transactionlist'));
    }


    public function historiqueRecuPaiementFilter (request $request){

       $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();
         

         $historitype =  $request->hitorytype;
          $date_deb =   date('d/m/Y', strtotime($request->date_deb));
          $date_fin =   date('d/m/Y', strtotime($request->date_fin));  
          $next =1;

         $client0 = new client;
         // $response0 = $client0->request('POST',$ipadress_api.'api/snedai_hub/customer/applications_log', [
         $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'passport_request',
                              'login'=>Session::get('email'),
                              'page'=>$next,
                              'search_begin'=>$date_deb,
                              'search_end'=>$date_fin
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
          $transactionlist = $response_api0['data'];
         ///dd($transactionlist);
          return view('historique_transaction_list_rc_pmt',compact('transactionlist'));
    }

    public function historiqueCodeRdv_details(request $request){

     $datas =  $request->details ;
     return view('history_details_cdrdv',compact('datas'));
    }

    public function historiqueDmd_details(request $request){

     $datas =  $request->details ;

     return view('history_details_dmd',compact('datas'));
    }

    public function historiquerecupaie_details(request $request){

     $datas =  $request->details ;
     return view('history_details_recupaie',compact('datas'));
    }

    public function historique_transaction () {

           if (!Session::has('msisdn')) {
                Session::put("awaitingPage",'/historique_transaction');
                return redirect('/connexion');
              }
         return view('historique_transaction');
    }

    public function statut_demande () {

           if (!Session::has('msisdn')) {
                Session::put("awaitingPage",'/statut_demande');
                return redirect('/connexion');
              }

        $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

        // $client0 = new client;
        // $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/formulas', [
        //           'headers' => [
        //                'Authorization' => 'Bearer '.$returnedToken,
        //            ],
        //            'json' => [
        //                 'request'=>[
        //                         'meeting_type'=>"passport_ci"
        //                  ] 
        //            ],
        //        ]);
        // $response_api0 = json_decode($response0->getBody(), true);
        // // dd( $response_api0 );


            $client0 = new client;
              $response0 = $client0->request('GET', config('AppConfig.api_passerelle').'api/snedai_hub/passport/agencies', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                  ],
              ]);
              $response_api0_status =  $response0->getStatusCode();
              $response_api0_body = json_decode($response0->getBody(),true);
                $listeagence = $response_api0_body['data'];

                // dd($listeagence == "");

        if ($listeagence == "") {
            // code...
             return view('statutdemande_error');
        }else
         return view('statutdemande',compact('listeagence'));
    }


     public function espace_personnel () {

           if (!Session::has('msisdn')) {
                Session::put("awaitingPage",'/espace_personnel');
                return redirect('/connexion');
              }
         return view('espacepersonnel');
    }

    public function filter_achat_request (request $request){

      $token = new TokenAuthenticationHelper();
      $returnedToken  = $token->GetAuthenticationToken();

      $historitype =  $request->hitorytype;
      $date_deb =   date('d/m/Y', strtotime($request->date_deb));
      $date_fin =   date('d/m/Y', strtotime($request->date_fin));  
      $next =1;
      //dd(Session::get('msisdn'));

       $client0 = new \GuzzleHttp\Client();
          $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'rdv_application',
                              'login'=>Session::get('email'),
                              'page'=>$next,
                              'search_begin'=>$date_deb,
                              'search_end'=>$date_fin
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
         
          $transactionlist = $response_api0['data'];
        
         return view('historique_transaction_list_by_date',compact('transactionlist'));
    }


    public function filter_dmd_request (request $request){

      $token = new TokenAuthenticationHelper();
      $returnedToken  = $token->GetAuthenticationToken();

      $historitype =  $request->hitorytype;
      $date_deb =   date('d/m/Y', strtotime($request->date_debdmd));
      $date_fin =   date('d/m/Y', strtotime($request->date_findmd));  
      $next =1;
      //dd(Session::get('msisdn'));

       $client0 = new \GuzzleHttp\Client();
          $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/customer/applications_log', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'service_code'=>'passport_request',
                              'login'=>Session::get('email'),
                              'page'=>$next,
                              'search_begin'=>$date_deb,
                              'search_end'=>$date_fin
                         ] 
                   ],
               ]);
       
          $response_api0 = json_decode($response0->getBody(), true);
         
          $transactionlist = $response_api0['data'];
         return view('historique_transaction_list_dmd_by_date',compact('transactionlist'));
    }

 
    
    public function find_request_status (request $request){

      //  dd('bonjour ');
      $token = new TokenAuthenticationHelper();
      $returnedToken  = $token->GetAuthenticationToken();

      $lastname =  $request->lastname;
      $firstname =  $request->firstname;
      //$date_enroll =  $request->date_enroll;
      // $date_naiss =  $request->date_naiss;
     $site_enroll =   $request->site_enroll;


        $dateEnrollreceived = DateTime::createFromFormat('d/m/Y', $request->date_enroll);
        $date_enroll = $dateEnrollreceived->format('Y-m-d');


        $dateNaissreceived = DateTime::createFromFormat('d/m/Y', $request->date_naiss);
        $date_naiss = $dateNaissreceived->format('Y-m-d');


          $client0 = new Client();

          $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/passport/application_status', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                              'agency'=>$site_enroll,
                              'lastname'=>$lastname,
                              'firstname'=>$firstname,
                              'application_date'=>$date_enroll,
                              'birth_date'=>$date_naiss
                         ] 
                   ],
               ]);

          $response_api0 = json_decode($response0->getBody(), true);
         

          // dd($response_api0);

          if ($response_api0['api_message'] =='Success!') {
              // code...
             $transactionlist = $response_api0['data'];

             return view('status_dmd_OK',compact('transactionlist'));
          }else
          return view('status_dmd_NOK');

    }



    public function logout_user (){
       Session::flush(); 
       return redirect('/');
    }
}
