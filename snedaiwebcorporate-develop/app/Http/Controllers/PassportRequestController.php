<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Session;
use TokenAuthenticationHelper;
use App\Models\Pays;
use App\Models\Pp_req_step_data;
use App\Models\Region;
use App\Models\Departement;
use App\Models\Ville;
use App\Models\Savedtransactionid;
use App\Models\Savedsessionid;
use Illuminate\Support\Facades\Log;
use DB;




class PassportRequestController extends Controller
{
    //demandes 
    public function demandes (request $request){

     if (!Session::has('msisdn')) {
        Session::put("awaitingPage",'/demande_passeport');
        return redirect('/connexion');
      }
      
    	$countries = Pays::orderBy('libelle', 'asc')->get();
      $regions = Region::orderBy('libelle', 'asc')->get();

      //recup des données sauvegardées
      //type_resident 1 pour resident ivoirien




        $dataSavedStepsOrdered = Pp_req_step_data::where([
                            // ['parent_step', 'like', 'pre%'],
                            ['status', '=',0],
                            ['type_resident', '=',1],
                            ['user_login', '=', Session::get('email')],
                            ])->orderBy('id','desc');
       


        $dataSavedSteps = DB::table( DB::raw("({$dataSavedStepsOrdered->toSql()}) as dataSavedStepsOrdered") )
        ->mergeBindings($dataSavedStepsOrdered->getQuery())
        ->select('datavalue','parent_step')->distinct()
        ->orderBy('parent_step','asc')
        ->get()->toArray();




      // $dataSavedSteps = Pp_req_step_data::where([
      //                       ['parent_step', 'like', 'pre%'],
      //                       ['status', '=',0],
      //                       ['type_resident', '=',1],
      //                       ['user_login', '=', Session::get('email')],
      //                   ])->orWhere([
      //                       ['parent_step', 'like', 'rdv%'],
      //                       ['status', '=',0],
      //                       ['type_resident', '=',1],
      //                       ['user_login', '=', Session::get('email')],
      //                   ]) ->select('datavalue','parent_step')->get()->toArray();

    // dd($dataSavedSteps);
      // recuperation des formules 
       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();
       Session::put('returnedToken',$returnedToken);



        $client0 = new client;
        $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/formulas', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'meeting_type'=>"passport_ci"
                         ] 
                   ],
               ]);

      
        $response_api0 = json_decode($response0->getBody(), true);
          $response_api0;

          

        if(is_array($response_api0['data']) && array_key_exists("formules",$response_api0['data'])){
     
    

        $formules= $response_api0['data']['formules'] ;

        $montant_recu_p  = config('AppConfig.montant_recu_p');
        // $montant_rec_rdv = config('AppConfig.montant_rec_rdv');
        // $montant_rec_rdv = $response_api0['data']['formules']['montant_rdv'];
        $frais_serv_rdv  = config('AppConfig.frais_serv_rdv');
        $frais_transac_dig = config('AppConfig.frais_transac_dig');

      // return view('demandes',compact('countries','regions','formules','montant_recu_p','montant_rec_rdv','frais_serv_rdv','frais_transac_dig','dataSavedSteps'));

       return view('demandes',compact('countries','regions','formules','montant_recu_p','frais_serv_rdv','frais_transac_dig','dataSavedSteps'));
        
        }else  {
            Log::info('la liste des formules n\'est pas retournée ou API indisponible' );
            return view('demandes_error');
        };

    }

    // public function demandes_error(){
    //      return view('demandes_error');
    // }



    public function demandes_diaspora (request $request){


     // if (!Session::has('msisdn')) {
     //    Session::put("awaitingPage",'/demandes');
     //    return redirect('/connexion');
     //  }

     //   return view('resident_diaspora_nd');

         if (!Session::has('msisdn')) {
        Session::put("awaitingPage",'/demande_passeport_diaspora');
        return redirect('/connexion');
      }
      

        $countries = Pays::orderBy('libelle', 'asc')->get();
      $regions = Region::orderBy('libelle', 'asc')->get();

      //recup des données sauvegardées
       //type_resident 2 pour resident diaspora
      // $dataSavedSteps = Pp_req_step_data::where([
      //                       ['parent_step', 'like', 'pre%'],
      //                       ['status', '=',0],
      //                        ['type_resident', '=',2],
      //                       ['user_login', '=', Session::get('email')],
      //                   ])->orWhere([
      //                       ['parent_step', 'like', 'rdv%'],
      //                       ['status', '=',0],
      //                       ['type_resident', '=',2],
      //                       ['user_login', '=', Session::get('email')],
      //                   ]) ->select('datavalue','parent_step')->get()->toArray();

      $dataSavedStepsOrdered = Pp_req_step_data::where([
                            // ['parent_step', 'like', 'pre%'],
                            ['status', '=',0],
                            ['type_resident', '=',2],
                            ['user_login', '=', Session::get('email')],
                            ])->orderBy('id','desc');



       $dataSavedSteps = DB::table( DB::raw("({$dataSavedStepsOrdered->toSql()}) as dataSavedStepsOrdered") )
        ->mergeBindings($dataSavedStepsOrdered->getQuery())
        ->select('datavalue','parent_step')->distinct()
        ->orderBy('parent_step','asc')
        ->get()->toArray();

      // recuperation des formules 
       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();
        Session::put('returnedToken',$returnedToken);


        $client0 = new client;
        $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/formulas', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'meeting_type'=>"passport_foreign"
                         ] 
                   ],
               ]);


        $response_api0 = json_decode($response0->getBody(), true);
        //dd($response_api0);


        if(is_array($response_api0['data']) && array_key_exists("formules",$response_api0['data'])){
        $formules= $response_api0['data']['formules'] ;

        $montant_recu_p  = config('AppConfig.montant_recu_p_diasp');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv_diasp');
        $frais_serv_rdv  = config('AppConfig.frais_serv_rdv_diasp');
        $frais_transac_dig = config('AppConfig.frais_transac_dig_diasp');

      return view('demandes_diaspora',compact('countries','regions','formules','montant_recu_p','montant_rec_rdv','frais_serv_rdv','frais_transac_dig','dataSavedSteps'));
        }else{
            Log::info('la liste des formules n\'est pas retournée ou API indisponible' );
            return view('demandes_error');
        }
        
    }


    public function modifier_rdv (request $request){

      if (!Session::has('msisdn')) {
        Session::put("awaitingPage",'/modifier_rdv');
        return redirect('/connexion');
      }
     
      // recuperation des formules 
       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

        $client0 = new client;
        $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/formulas', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'meeting_type'=>"passport_ci"
                         ] 
                   ],
               ]);
        $response_api0 = json_decode($response0->getBody(), true);
        //dd($response_api0);
        $formules= $response_api0['data']['formules'] ;

        $montant_recu_p  = config('AppConfig.montant_recu_p');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv');
        $frais_serv_rdv  = config('AppConfig.frais_serv_rdv');
        $frais_transac_dig = config('AppConfig.frais_transac_dig');

      return view('modif_rdv',compact('formules','montant_recu_p','montant_rec_rdv','frais_serv_rdv','frais_transac_dig'));
    }

    public function modifier_rdv_diaspora (request $request){


        //return view('resident_diaspora_nd');

      if (!Session::has('msisdn')) {
         Session::put("awaitingPage",'/modifier_rdv_diaspora');
        return redirect('/connexion');
      }
     
      // recuperation des formules 
       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

        $client0 = new client;
        $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/formulas', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'meeting_type'=>"passport_foreign"
                         ] 
                   ],
               ]);
        $response_api0 = json_decode($response0->getBody(), true);
        ///dd($response_api0);
        $formules= $response_api0['data']['formules'] ;

        $montant_recu_p  = config('AppConfig.montant_recu_p');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv');
        $frais_serv_rdv  = config('AppConfig.frais_serv_rdv');
        $frais_transac_dig = config('AppConfig.frais_transac_dig');

      return view('modifier_rdv_diaspora',compact('formules','montant_recu_p','montant_rec_rdv','frais_serv_rdv','frais_transac_dig'));
    }


    

    public function find_department(Request $request){

       $found_departement=Region::with('departement')->where('id', $request->region_id)->get()->toArray();
      // dd($found_departement);
       return view('found_department',compact('found_departement'));

    }

    public function find_ville_commune(Request $request){

       $found_ville_com=Departement::with('ville')->where('id', $request->dept_id)->get()->toArray();
       // dd($found_ville_com);
       return view('found_ville_commune',compact('found_ville_com'));

    }

    public function findsite_enrollement(Request $request){

       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

       $client1 = new client;
        $response1 = $client1->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/local_sites', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'formula_id'=>$request->idformule, 
                                'meeting_type'=>"passport_ci"
                         ] 
                   ],
               ]);
        $response_api1 = json_decode($response1->getBody(), true);
          // dd($response_api1);
        $liste_site= $response_api1['data']['sites'] ;
      
       return view('found_liste_site',compact('liste_site'));

    }

    public function findsite_enrollement_diaspora(Request $request){

       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

       // dd($returnedToken);

       $client1 = new client;
        $response1 = $client1->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/local_sites', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                        'request'=>[
                                'formula_id'=>$request->idformule, 
                                'meeting_type'=>"passport_foreign"
                         ] 
                   ],
               ]);
        $response_api1 = json_decode($response1->getBody(), true);
        $liste_site= $response_api1['data']['sites'] ;
        // dd($liste_site);
      
       return view('found_liste_site',compact('liste_site'));

    }

    
     public function rdv_passeport_agenda(Request $request){

       $siteEnrol =  $request->siteEnrol;
       $dateEnrol =  $request->dateEnrol;
       $lieurdv =  $request->lieurdv;

      

        $token = new TokenAuthenticationHelper();
        $returnedToken  = $token->GetAuthenticationToken();

        $client = new Client();
        $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/timesheet', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                                'location_id'=>$siteEnrol,
                                'desired_date'=>$dateEnrol, 
                                'meeting_type'=>"passport_ci"
                         ] 
                   ],
               ]);
        $response_api = json_decode($response->getBody(), true);
        // dd( $response_api);
        $rdv_datas=$response_api['data'];
        $apicode =$response_api['api_code']; 
        if($apicode  == 200){
        if(is_array($response_api['data']) && array_key_exists("info_rdv",$response_api['data'])){
          $rdv_datas=$response_api['data']['info_rdv']['tranches'];
          $displayed_date=$response_api['data']['info_rdv']['date'];

          $displayed_date = date('d-m-Y', strtotime($displayed_date));

           return view('creneauhoraire_rdv',compact('rdv_datas','displayed_date','lieurdv'));
        }}
        else 
         return view('creneauhoraire_rdv_nodata',compact('dateEnrol','lieurdv'));

     }



      public function rdv_passeport_agenda_edit_rdv(Request $request){

       $siteEnrol =  $request->siteEnrol;
       $dateEnrol =  $request->dateEnrol;
       $lieurdv =  $request->lieurdv;
       $mustpay = $request->mustpay;
      

        $token = new TokenAuthenticationHelper();
        $returnedToken  = $token->GetAuthenticationToken();

        $client = new Client();
        $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/timesheet', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                                'location_id'=>$siteEnrol,
                                'desired_date'=>$dateEnrol, 
                                'meeting_type'=>"passport_ci"
                         ] 
                   ],
               ]);
        $response_api = json_decode($response->getBody(), true);
        // dd( $response_api);
        $rdv_datas=$response_api['data'];
        $apicode =$response_api['api_code']; 
        if($apicode  == 200){
        if(is_array($response_api['data']) && array_key_exists("info_rdv",$response_api['data'])){
          $rdv_datas=$response_api['data']['info_rdv']['tranches'];
          $displayed_date=$response_api['data']['info_rdv']['date'];

          $displayed_date = date('d-m-Y', strtotime($displayed_date));



         return view('creneauhoraire_rdv_edit',compact('rdv_datas','displayed_date','lieurdv','mustpay'));
        }}
        else 
         return view('creneauhoraire_rdv_nodata',compact('dateEnrol','lieurdv'));

     }



     public function rdv_passeport_agenda_edit_rdv_diasp(Request $request){

       $siteEnrol =  $request->siteEnrol;
       $dateEnrol =  $request->dateEnrol;
       $lieurdv =  $request->lieurdv;
       $mustpay = $request->mustpay;
      

        $token = new TokenAuthenticationHelper();
        $returnedToken  = $token->GetAuthenticationToken();

        $client = new Client();
        $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/timesheet', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                                'location_id'=>$siteEnrol,
                                'desired_date'=>$dateEnrol, 
                                'meeting_type'=>"passport_foreign"
                         ] 
                   ],
               ]);
        $response_api = json_decode($response->getBody(), true);
        // dd( $response_api);
        $rdv_datas=$response_api['data'];
        $apicode =$response_api['api_code']; 
        if($apicode  == 200){
        if(is_array($response_api['data']) && array_key_exists("info_rdv",$response_api['data'])){
          $rdv_datas=$response_api['data']['info_rdv']['tranches'];
          $displayed_date=$response_api['data']['info_rdv']['date'];

          $displayed_date = date('d-m-Y', strtotime($displayed_date));



         return view('creneauhoraire_rdv_edit',compact('rdv_datas','displayed_date','lieurdv','mustpay'));
        }}
        else 
         return view('creneauhoraire_rdv_nodata',compact('dateEnrol','lieurdv'));

     }








     


     public function rdv_passeport_agenda_diasp(Request $request){

       $siteEnrol =  $request->siteEnrol;
       $dateEnrol =  $request->dateEnrol;
       $lieurdv =  $request->lieurdv;
       $siterawname =  $request->siterawname;
       Session::put('siterawname',$siterawname);

       
       
      
      

        $token = new TokenAuthenticationHelper();
        $returnedToken  = $token->GetAuthenticationToken();

        $client = new Client();
        $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/timesheet', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                                'location_id'=>$siteEnrol,
                                'desired_date'=>$dateEnrol, 
                                'meeting_type'=>"passport_foreign"
                         ] 
                   ],
               ]);
        $response_api = json_decode($response->getBody(), true);
         // dd( $response_api);
        $rdv_datas=$response_api['data'];
         $apicode =$response_api['api_code']; 
        if($apicode  == 200){
            if(is_array($response_api['data']) && array_key_exists("info_rdv",$response_api['data'])){
              $rdv_datas=$response_api['data']['info_rdv']['tranches'];
              $displayed_date=$response_api['data']['info_rdv']['date'];

              $displayed_date = date('d-m-Y', strtotime($displayed_date));

               return view('creneauhoraire_rdv_diasp',compact('rdv_datas','displayed_date','lieurdv'));
            }
          }
         else 
         return view('creneauhoraire_rdv_nodata',compact('dateEnrol','lieurdv'));

     }


     public function feestopay(Request $request){

       

       $emailRdv          =   $request->emailRdv;
       $telephoneRdv      =   $request->telephoneRdv;
       $location_code     =   $request->location_code;
       $location_address  =   $request->location_address;
       $rdv_payant        =   $request->rdv_payant;
       $mntformule        =   $request->mntformule;
       
       

       $login = Session::get('email');

       $dateHourCode_array = explode('|', $request->dateHourCode);
       $timecode = $dateHourCode_array[1];
       $timevalue = $dateHourCode_array[0];
       $desired_date = $request->dateEnrol;

       $sessionGetId=uniqid();
       Session::put('sessionid',$sessionGetId);

         $data_session= [
                'session_id'=>$sessionGetId,
                'email'=>$login,
                'created_at'=>date('Y-m-d H:i:s'),
                'passport_type'=>'passport_ci',
              ];


       $newInsert =  SavedSessionId::create($data_session
                    );
                if(!$newInsert->id){
                  //  return 'Some Error';
                }else {
                  //  return 'inserted';
                };

       $address="PLATEAU AVENUE LAMBLIN";
       $passport_type=$request->passport_type;
       $returnedToken =  Session::get('returnedToken');

        $pool  = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';  
        $order = substr(str_shuffle(str_repeat($pool, 16)), 0, 16);
        

        $montant_recu_p  = config('AppConfig.montant_recu_p');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv');
        // $frais_serv_rdv  = config('AppConfig.frais_serv_rdv');
        $frais_serv_rdv  = $mntformule;
        $frais_transac_dig = config('AppConfig.frais_transac_dig');


        if ($rdv_payant ==0) {
            // code...
             $frais_serv_rdv  = 0;
        }

        $montant_global_rdv = $montant_recu_p + $frais_serv_rdv + $frais_transac_dig;




        $clientRsv = new Client;
                $responseRsv = $clientRsv->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/passport_fees', [
                          'headers' => [
                               'Authorization' => 'Bearer '.$returnedToken,
                           ],
                           'json' => [
                                 'payment'=>[
                                        'session_id'=>$sessionGetId,
                                        'login'=>$login,
                                        'passport_type'=>$passport_type, 
                                        'lastname'=>$request->nom_demandeur,  //nom du requerant 
                                        'firstname'=> $request->prenom_demandeur, //prenom du requerant
                                        "date_desired" =>  $desired_date,
                                        "time_code"=> $timecode,
                                        'phone_number'=>$request->indicatif . $request->telephonerdv,
                                        'address'=>$address,
                                        'email'=>$emailRdv,
                                        'time_value'=>$timevalue,
                                        'location_address'=>$location_address,
                                        'location_code'=>$location_code
                                 ] 
                           ],
                       ]);
                  
                  $response_apiRsv = json_decode($responseRsv->getBody(), true);

                  // dd($response_apiRsv);
                  $api_data_transRsv = $response_apiRsv['data']['transaction_id'];
                  $payment_statusRsv = $response_apiRsv['data']['payment_status'];

                   Session::put("transaction_id",$api_data_transRsv);
                   Session::put("payment_status",$payment_statusRsv);

                   

                   $data_transactionid= [
                            'transactionid1'=>$api_data_transRsv,
                            'email'=>$login,
                            'created_at'=>date('Y-m-d H:i:s'),
                            'passport_type'=>'passport_ci',
                          ];


                   $insertTransactionid =  SavedTransactionId::create($data_transactionid
                                );
                            if(!$insertTransactionid->id){
                               // return 'Some Error';
                            }else {
                               // return 'inserted';
                            };


                  log::info('transactionid intial' .Session::get("transaction_id"));


                  $payment_rsv = $response_apiRsv['data']['rdv_status'];  // 'RESERVED' 




                  if ($payment_rsv == 'RESERVED') {
                      // code...

                        $client0 = new client;
                        $response0 = $client0->request('POST', config('AppConfig.getwaymonetic'), [
                            'headers' => [
                                'Authorization' => 'Bearer YOUR_TOKEN_HERE',
                            ],
                            'form_params' => [
                               'auth'=>[
                                    "name"=> config('AppConfig.getway_auth_name'),
                                    "authentication_token"=> config('AppConfig.getway_auth_token'),
                                    "order"=>$order 
                                ]
                            ],
                        ]);
                        $response_api0 = json_decode($response0->getBody(), true);
                        $jwt = $response_api0['auth_token'];

                        //dd($jwt);
                        return $jwt.'*'.$montant_global_rdv.'*'.$order .'*'.$emailRdv .'*'.$telephoneRdv .'*'.$location_code .'*'.$location_address .'*'.$timecode .'*'.$timevalue .'*'.$desired_date; 
                         }
                         else 
                         return 'not reserved';
     }



     public function feestopayDiasp(Request $request){


       $emailRdv=           $request->emailRdv;
       $telephoneRdv=       $request->telephoneRdv;
       $location_code=      $request->location_code;
       $location_address=       $request->location_address;

       $rdv_payant        =   $request->rdv_payant;
       $mntformule        =   $request->mntformule;
       // dd($rdv_payant);

       $dateHourCode_array = explode('|', $request->dateHourCode);
       $timecode = $dateHourCode_array[1];
       $timevalue = $dateHourCode_array[0];
       $desired_date = $request->dateEnrol;

       $returnedToken =  Session::get('returnedToken');

       $sessionGetId=uniqid();
       Session::put('sessionid',$sessionGetId);
       $login = Session::get('email');


       $data_session= [
                'session_id'=>$sessionGetId,
                'email'=>$login,
                'created_at'=>date('Y-m-d H:i:s'),
                'passport_type'=>'passport_foreign',
              ];

       $newInsert =  SavedSessionId::create($data_session
                    );
                if(!$newInsert->id){
                    return 'Some Error';
                }else {
                    //return 'inserted';
                };

       $address= $request->address_diasp ;
       $passport_type=$request->passport_type;

        $pool  = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';  
        $order = substr(str_shuffle(str_repeat($pool, 16)), 0, 16);

        $montant_recu_p  = config('AppConfig.montant_recu_p_diasp');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv_diasp');
        // $frais_serv_rdv  = config('AppConfig.frais_serv_rdv_diasp');
        $frais_serv_rdv  = $mntformule;
        $frais_transac_dig = config('AppConfig.frais_transac_dig_diasp');


        //dd($frais_serv_rdv);

        //dd(strtoupper(Session::get('siterawname')));

          // $freecountries = ['MALI', 'MAROC', 'NIGERIA', 'MEXIQUE', 'PAYS-BAS','RDC','RUSSIE','SENEGAL','TUNISIE','COREE DU SUD','CHINE','JAPON','GUINEE','INDE','ISRAEL','ANGOLA','ALGERIE','EGYPTE','GABON','BRESIL','TURQUIE','QATAR','EMIRATES ARABES UNIS','ARABIE SAOUDITE (DJEDDAH)','ARABIE SAOUDITE','ARABIE SAOUDITE (RIYAD)'];

          // if (in_array(strtoupper(Session::get('siterawname')),  $freecountries)) {
          //       $frais_serv_rdv  = 0;
          //   }

        if ($rdv_payant ==0) {
            // code...
             $frais_serv_rdv  = 0;
        }

        

                        

        $montant_global_rdv = $montant_recu_p + $frais_serv_rdv + $frais_transac_dig;



        $clientRsv = new Client;
                $responseRsv = $clientRsv->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/passport_fees', [
                          'headers' => [
                               'Authorization' => 'Bearer '.$returnedToken,
                           ],
                           'json' => [
                                 'payment'=>[
                                        'session_id'=>$sessionGetId,
                                        'login'=>$login,
                                        'passport_type'=>$passport_type, 
                                        'lastname'=>$request->nom_demandeur,  //nom du requerant 
                                        'firstname'=> $request->prenom_demandeur, //prenom du requerant
                                        "date_desired" =>  $desired_date,
                                        "time_code"=> $timecode,
                                        'phone_number'=>$request->indicatif . $request->telephonerdv,
                                        'address'=>$address,
                                        'email'=>$emailRdv,
                                        'time_value'=>$timevalue,
                                        'location_address'=>$location_address,
                                        'location_code'=>$location_code
                                        
                                 ] 
                           ],
                       ]);
                  
                  $response_apiRsv = json_decode($responseRsv->getBody(), true);

                   // dd($response_apiRsv);
                  $api_data_transRsv = $response_apiRsv['data']['transaction_id'];
                  $payment_statusRsv = $response_apiRsv['data']['payment_status'];

                  Session::put("transaction_id",$api_data_transRsv);
                  Session::put("payment_status",$payment_statusRsv);

                  $payment_rsv = $response_apiRsv['data']['rdv_status'];  // 'RESERVED' 


                  $data_transactionid= [
                            'transactionid1'=>$api_data_transRsv,
                            'email'=>$login,
                            'created_at'=>date('Y-m-d H:i:s'),
                            'passport_type'=>'passport_foreign',
                          ];


                   $insertTransactionid =  SavedTransactionId::create($data_transactionid
                                );
                            if(!$insertTransactionid->id){
                                return 'Some Error';
                            }else {
                                //return 'inserted';
                            };




                  if ($payment_rsv == 'RESERVED') {

                    $client0 = new client;
                    $response0 = $client0->request('POST', config('AppConfig.getwaymoneticDiasp'), [
                        'headers' => [
                            'Authorization' => 'Bearer YOUR_TOKEN_HERE',
                        ],
                        'form_params' => [
                           'auth'=>[
                                "name"=> config('AppConfig.getway_auth_name_diasp'),
                                "authentication_token"=> config('AppConfig.getway_auth_token_diasp'),
                                "order"=>$order 
                            ]
                        ],
                    ]);
                    $response_api0 = json_decode($response0->getBody(), true);
                    $jwt = $response_api0['auth_token'];

                    //dd($jwt);
                    return $jwt.'*'.$montant_global_rdv.'*'.$order .'*'.$emailRdv .'*'.$telephoneRdv .'*'.$location_code .'*'.$location_address .'*'.$timecode .'*'.$timevalue .'*'.$desired_date.'*'.$frais_serv_rdv; 

                     } else return 'not reserved';
        
     
     }


      public function confirmRdvSuccessCode(Request $request){

          $token = new TokenAuthenticationHelper();
          $returnedToken  = $token->GetAuthenticationToken();
          $statut_transact=0;

          $rdv_payant = $request->rdv_payant;
          $meeting_type =$request->meeting_type;

           // dd($rdv_payant);

          // dd($request->location_address);
           $api_status=10;

          $client = new Client();
            $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/init', [
            
                      'headers' => [
                           'Authorization' => 'Bearer '.$returnedToken,
                       ],
                       'form_params' => [
                             'request'=>[
                                    'meeting_code'=>$request->meeting_code, //RV919D60dX80P //RV919D60dX80P1
                                    'new_time_code'=>$request->timecode,
                                    'new_time_value'=>$request->timevalue,
                                    'new_desired_date'=>$request->desired_date,
                                    'meeting_type'=>$request->meeting_type,
                                    'new_location_address'=>$request->location_address,
                             ] 
                       ],
                   ]);

         $response_api = json_decode($response->getBody(), true);
        // dd($response_api);
         $api_statusinit = $response_api['api_code'];

          //dd($api_statusinit);//RV550S02RN78P




        //  if($api_status==200){
        //     return 'rdv initiated';
            
        // }else{
        //     return 'rdv not initiated';
        // }

       if ($rdv_payant == 0 || $meeting_type == 'passport_ci') {
           // code...
       
            if( $api_statusinit == 200){
                $client = new Client();
                $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/renew', [
                
                          'headers' => [
                               'Authorization' => 'Bearer '.$returnedToken,
                           ],
                           'form_params' => [
                                 'request'=>[
                                        'meeting_code'=>$request->meeting_code, //RV919D60dX80P //RV919D60dX80P1
                                        'payment_ref'=>'NA',
                                        'payment_date'=>'NA',
                                        'meeting_type'=>$request->meeting_type
                                 ] 
                           ],
                       ]);

             $response_api = json_decode($response->getBody(), true);
             //dd($response_api);
             $api_status = $response_api['api_code'];

            if($api_status==200){
                return 'rdv updated';
                
            }else{
                return 'rdv not updated';
            }
        }
      }else if($rdv_payant == 1){
              $montant_modif_rdv =10;
              $pool  = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';  
              $order = substr(str_shuffle(str_repeat($pool, 16)), 0, 16);
              if($api_statusinit == 200){

                        if ( $meeting_type == 'passport_ci') {
                            // code...
                        
                            $client0 = new client;
                            $response0 = $client0->request('POST', config('AppConfig.getwaymonetic'), [
                                'headers' => [
                                    'Authorization' => 'Bearer YOUR_TOKEN_HERE',
                                ],
                                'form_params' => [
                                   'auth'=>[
                                        "name"=> config('AppConfig.getway_auth_name'),
                                        "authentication_token"=> config('AppConfig.getway_auth_token'),
                                        "order"=>$order 
                                    ]
                                ],
                            ]);

                        } else {
                            // code...
                        
                            $client0 = new client;
                            $response0 = $client0->request('POST', config('AppConfig.getwaymoneticDiasp'), [
                                'headers' => [
                                    'Authorization' => 'Bearer YOUR_TOKEN_HERE',
                                ],
                                'form_params' => [
                                   'auth'=>[
                                        "name"=> config('AppConfig.getway_auth_name_diasp'),
                                        "authentication_token"=> config('AppConfig.getway_auth_token_diasp'),
                                        "order"=>$order 
                                    ]
                                ],
                            ]);

                        }
                            $response_api0 = json_decode($response0->getBody(), true);
                            $jwt = $response_api0['auth_token'];

                            // dd($jwt);

                            return $jwt.'*'.$montant_modif_rdv.'*'.$order.'*pay';

                }


        }



 
      
       
    }

     public function searchCoderdv(request $request){

        $code =$request->coderdv;
        $token = new TokenAuthenticationHelper();
        $returnedToken  = $token->GetAuthenticationToken();
        $meeting_type = $request->meeting_type;
        // "passport_foreign"

        //dd($meeting_type);
        $etat=0;// etat du code 

      
        
        $client = new client;
        $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/meeting/data', [
                  'headers' => [
                       'Authorization' => 'Bearer '.$returnedToken,
                   ],
                   'json' => [
                         'request'=>[
                                'meeting_code'=>$code, //RV919D60dX80P //RV919D60dX80P1
                                'meeting_type'=>$meeting_type
                         ] 
                   ],
               ]);

        $response_api = json_decode($response->getBody(), true);
          // dd($response_api);
        $apicode = $response_api['api_code']; 


      
          if($apicode==400){
            $api_message = $response_api['data']; 
            return  $api_message;
          }

          if($apicode==200){
             $api_message = $response_api['data']; 

             //dd($api_message);

             //return $api_message;


            $nom_demandeur = $response_api['data']['petitioner_firstname']; 
            $prenoms_demmandeur = $response_api['data']['petitioner_lastname']; 
            $email_demandeur = $response_api['data']['petitioner_email']; 
            $petitioner_civility = $response_api['data']['petitioner_civility'];

            $id_site = $response_api['data']['id_site']; 
            $location_address = $response_api['data']['location_address']; 

            
            
              

             $site_code =  $response_api['data']['location_id']; 
             $petitioner_mobile_number =  $response_api['data']['petitioner_mobile_number']; 
             $time_value  =  $response_api['data']['time_value']; 
             $addresse_dem = $response_api['data']['petitioner_address']; 
             $meeting_code = $response_api['data']['meeting_code']; 
             $modification_credit = $response_api['data']['modification_credit']; 
             $scheduled_at = $response_api['data']['scheduled_at']; 

             $scheduled_at = $response_api['data']['scheduled_at']; 

             $rdv_payant = $response_api['data']['rdv_payant']; 
             $nb_modif = $response_api['data']['nb_modif']; 
             $validite_rdv = $response_api['data']['validite_rdv']; 
             
             

             

            $today = date ('Y-m-d');
            $date_scheduled_at= date('Y-m-d', strtotime($scheduled_at));
            $date_rdv= date('d-m-Y', strtotime($scheduled_at));





            //PasseportCiDispo


            $calendarData =[];
            $client0 = new client;  
                
        if ($meeting_type == 'passport_ci') {
                // Log::info(config('app.api_disponiblite_ci').$site);
                $response0 = $client0->request('GET',config('app.api_disponiblite_ci').$id_site, [
                         'verify' => false,
                          // 'headers' => [
                          //      'Authorization' => 'Bearer ',
                          //  ],
                         'headers' => [
                            'Content-Type' => 'application/json',
                            'Authorization' => 'Bearer ',
                            'Accept' => 'application/json'
                        ]
                           
                       ]);
                $calendar_query = json_decode($response0->getBody(), true);

                $calendadarExdata =$calendar_query['data'];
                // dd($calendadarExdata);

               // { eventName: '10 rdv', calendar: 'Work', color: 'orange', eventTime: '2022-06-12' },
                foreach ($calendadarExdata as $calendar_info) {

                     if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
                     else $nbdisp = $calendar_info['nb_dispo'].' rdv';
                  $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
                }

            }


        if ($meeting_type == 'passport_foreign') {
            // code...

                $response0 = $client0->request('GET',config('app.api_disponiblite_diaspo').$id_site, [
                     'verify' => false,
                      // 'headers' => [
                      //      'Authorization' => 'Bearer ',
                      //  ],
                     'headers' => [
                        'Content-Type' => 'application/json',
                        'Authorization' => 'Bearer ',
                        'Accept' => 'application/json'
                    ]
                       
                   ]);
            $calendar_query = json_decode($response0->getBody(), true);

            $calendadarExdata =$calendar_query['data'];
            // dd($calendadarExdata);

           // { eventName: '10 rdv', calendar: 'Work', color: 'orange', eventTime: '2022-06-12' },
            foreach ($calendadarExdata as $calendar_info) {

                 if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
                 else $nbdisp = $calendar_info['nb_dispo'].' rdv';
              $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
            }


        }


       // return  array('paymentstatus' => 'non echu mustnotpay',
       //      'addresse_dem'=> $addresse_dem,
       //      'meeting_code'=> $meeting_code,
       //      'date_rdv'=> $date_rdv,
       //      'time_value'=> $time_value,
       //      'petitioner_mobile_number'=> $petitioner_mobile_number,
       //      'site_code'=> $site_code,
       //      'email_demandeur'=> $email_demandeur,
       //      'rdv_payant'=> $rdv_payant,
       //      'nb_modif'=> $nb_modif,
       //      'site_code'=> $site_code,
       //      'validite_rdv'=> $validite_rdv,
       //      'calendarData'=> $calendarData,
       //      );

            //non encore echue
                    if($today < $date_scheduled_at){

                        if ($modification_credit!=0) {
                          # doit payer une taxe 5000...
                          // return 'non echu mustnotpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv .'*'.$calendarData;
                          return  array('paymentstatus' => 'non echu mustnotpay',
                            'addresse_dem'=> $addresse_dem,
                            'meeting_code'=> $meeting_code,
                            'date_rdv'=> $date_rdv,
                            'time_value'=> $time_value,
                            'petitioner_mobile_number'=> $petitioner_mobile_number,
                            'site_code'=> $site_code,
                            'email_demandeur'=> $email_demandeur,
                            'rdv_payant'=> $rdv_payant,
                            'nb_modif'=> $nb_modif,
                            'site_code'=> $site_code,
                            'validite_rdv'=> $validite_rdv,
                            'calendarData'=> $calendarData,
                            );
                        
                          }else {
                            //ne doit pas payer LES 5000
                            //non echu mustpay mais une demande de changement a pousser a la modif
                                // return 'non echu mustnotpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;

                                return  array('paymentstatus' => 'non echu mustnotpay',
                                    'addresse_dem'=> $addresse_dem,
                                    'meeting_code'=> $meeting_code,
                                    'date_rdv'=> $date_rdv,
                                    'time_value'=> $time_value,
                                    'petitioner_mobile_number'=> $petitioner_mobile_number,
                                    'site_code'=> $site_code,
                                    'email_demandeur'=> $email_demandeur,
                                    'rdv_payant'=> $rdv_payant,
                                    'nb_modif'=> $nb_modif,
                                    'site_code'=> $site_code,
                                    'validite_rdv'=> $validite_rdv,
                                    'calendarData'=> $calendarData,
                                    );
                          }
                  }else {
                    //echu  doit payer  LES 500
                    //echu mustpay mais du a une demande de changement il ya eu une modif
                    // return 'non echu mustnotpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;

                    return  array('paymentstatus' => 'non echu mustnotpay',
                        'addresse_dem'=> $addresse_dem,
                        'meeting_code'=> $meeting_code,
                        'date_rdv'=> $date_rdv,
                        'time_value'=> $time_value,
                        'petitioner_mobile_number'=> $petitioner_mobile_number,
                        'site_code'=> $site_code,
                        'email_demandeur'=> $email_demandeur,
                        'rdv_payant'=> $rdv_payant,
                        'nb_modif'=> $nb_modif,
                        'site_code'=> $site_code,
                        'validite_rdv'=> $validite_rdv,
                        'calendarData'=> $calendarData,
                        );

                  }
                  if ($rdv_payant == 1) {
                      // code...
                    // return 'mustpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;

                    return  array('paymentstatus' => 'non echu mustnotpay',
                        'addresse_dem'=> $addresse_dem,
                        'meeting_code'=> $meeting_code,
                        'date_rdv'=> $date_rdv,
                        'time_value'=> $time_value,
                        'petitioner_mobile_number'=> $petitioner_mobile_number,
                        'site_code'=> $site_code,
                        'email_demandeur'=> $email_demandeur,
                        'rdv_payant'=> $rdv_payant,
                        'nb_modif'=> $nb_modif,
                        'site_code'=> $site_code,
                        'validite_rdv'=> $validite_rdv,
                        'calendarData'=> $calendarData,
                        );
                  }

                  if ($rdv_payant == 0) {
                      // code...
                    // return 'mustnotpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;

                    return  array('paymentstatus' => 'mustnotpay',
                        'addresse_dem'=> $addresse_dem,
                        'meeting_code'=> $meeting_code,
                        'date_rdv'=> $date_rdv,
                        'time_value'=> $time_value,
                        'petitioner_mobile_number'=> $petitioner_mobile_number,
                        'site_code'=> $site_code,
                        'email_demandeur'=> $email_demandeur,
                        'rdv_payant'=> $rdv_payant,
                        'nb_modif'=> $nb_modif,
                        'site_code'=> $site_code,
                        'validite_rdv'=> $validite_rdv,
                        'calendarData'=> $calendarData,
                        );
                  }else
                  // return 'mustpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;
                  return  array('paymentstatus' => 'mustpay',
                    'addresse_dem'=> $addresse_dem,
                    'meeting_code'=> $meeting_code,
                    'date_rdv'=> $date_rdv,
                    'time_value'=> $time_value,
                    'petitioner_mobile_number'=> $petitioner_mobile_number,
                    'site_code'=> $site_code,
                    'email_demandeur'=> $email_demandeur,
                    'rdv_payant'=> $rdv_payant,
                    'nb_modif'=> $nb_modif,
                    'site_code'=> $site_code,
                    'validite_rdv'=> $validite_rdv,
                    'calendarData'=> $calendarData,
                    );


                  if ($nb_modif > 3) {
                      // code...
                    // return 'mustpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;

                    return  array('paymentstatus' => 'mustpay',
                        'addresse_dem'=> $addresse_dem,
                        'meeting_code'=> $meeting_code,
                        'date_rdv'=> $date_rdv,
                        'time_value'=> $time_value,
                        'petitioner_mobile_number'=> $petitioner_mobile_number,
                        'site_code'=> $site_code,
                        'email_demandeur'=> $email_demandeur,
                        'rdv_payant'=> $rdv_payant,
                        'nb_modif'=> $nb_modif,
                        'site_code'=> $site_code,
                        'validite_rdv'=> $validite_rdv,
                        'calendarData'=> $calendarData,
                        );
                  }else
                  // return 'mustnotpay'.'*'.$addresse_dem.'*'.$meeting_code.'*'.$date_rdv .'*'.$time_value.'*'.$petitioner_mobile_number.'*'.$site_code.'*'.$email_demandeur.'*'.$rdv_payant.'*'.$nb_modif.'*'.$validite_rdv.'*'.$calendarData;
                  return  array('paymentstatus' => 'mustnotpay',
                        'addresse_dem'=> $addresse_dem,
                        'meeting_code'=> $meeting_code,
                        'date_rdv'=> $date_rdv,
                        'time_value'=> $time_value,
                        'petitioner_mobile_number'=> $petitioner_mobile_number,
                        'site_code'=> $site_code,
                        'email_demandeur'=> $email_demandeur,
                        'rdv_payant'=> $rdv_payant,
                        'nb_modif'=> $nb_modif,
                        'site_code'=> $site_code,
                        'validite_rdv'=> $validite_rdv,
                        'calendarData'=> $calendarData,
                        );
          }


     }


     public function PasseportCiDispo(request $request){

        $sitereceived =$request->site;
        $sitearray = explode('|',$sitereceived);
        $site = $sitearray[0];

        Session::put('selectedSiteCi',$site);
        $calendarData =[];
        $client0 = new client;  
                

         Log::info(config('app.api_disponiblite_ci').$site);
        $response0 = $client0->request('GET',config('app.api_disponiblite_ci').$site, [
                 'verify' => false,
                  // 'headers' => [
                  //      'Authorization' => 'Bearer ',
                  //  ],
                 'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ',
                    'Accept' => 'application/json'
                ]
                   
               ]);
        $calendar_query = json_decode($response0->getBody(), true);

        $calendadarExdata =$calendar_query['data'];
        // dd($calendadarExdata);

       // { eventName: '10 rdv', calendar: 'Work', color: 'orange', eventTime: '2022-06-12' },
        foreach ($calendadarExdata as $calendar_info) {

             if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
             else $nbdisp = $calendar_info['nb_dispo'].' rdv';
          $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
        }


        return($calendarData);
    }

    public function PasseportDiaspoDispo(request $request){
         $sitereceived =$request->site;
         $sitearray = explode('|',$sitereceived);
         $site = $sitearray[0];

         Session::put('selectedSiteDispo',$site);

        $calendarData =[];
        $client0 = new client;  

        Log::info(config('app.api_disponiblite_diaspo').$site);              
        $response0 = $client0->request('GET',config('app.api_disponiblite_diaspo').$site, [
                 'verify' => false,
                  // 'headers' => [
                  //      'Authorization' => 'Bearer ',
                  //  ],
                 'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ',
                    'Accept' => 'application/json'
                ]
                   
               ]);
        $calendar_query = json_decode($response0->getBody(), true);

        $calendadarExdata =$calendar_query['data'];
        // dd($calendadarExdata);

       // { eventName: '10 rdv', calendar: 'Work', color: 'orange', eventTime: '2022-06-12' },
        foreach ($calendadarExdata as $calendar_info) {

             if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
             else $nbdisp = $calendar_info['nb_dispo'].' rdv';
          $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
        }


        return($calendarData);
    }

    public function cancel_reservation_ci (request $request){


       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

       $saved_transaction_id = Session::get("transaction_id");

        $clientcancel = new Client;
                $responsecancel = $clientcancel->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/cancel_passport_fees', [
                          'headers' => [
                               'Authorization' => 'Bearer '.$returnedToken,
                           ],
                           'json' => [
                                 'payment'=>[
                                        'transaction_id'=> $saved_transaction_id,
                                 ] 
                           ],
                       ]);
                  
                  $response_api0 = json_decode($responsecancel->getBody(), true);



        $site=Session::get('selectedSiteCi');
        $calendarData =[];
        $client0 = new client;  

        Log::info(config('app.api_disponiblite_ci').$site);              
        $response0 = $client0->request('GET',config('app.api_disponiblite_ci').$site, [
                 'verify' => false,
                  // 'headers' => [
                  //      'Authorization' => 'Bearer ',
                  //  ],
                 'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ',
                    'Accept' => 'application/json'
                ]
                   
               ]);
        $calendar_query = json_decode($response0->getBody(), true);

        $calendadarExdata =$calendar_query['data'];
        foreach ($calendadarExdata as $calendar_info) {

             if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
             else $nbdisp = $calendar_info['nb_dispo'].' rdv';
          $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
        }
        return($calendarData);

    }



    public function cancel_reservation_diaspo (request $request){


       $token = new TokenAuthenticationHelper();
       $returnedToken  = $token->GetAuthenticationToken();

       $saved_transaction_id = Session::get("transaction_id");

        $clientcancel = new Client;
                $responsecancel = $clientcancel->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/cancel_passport_fees', [
                          'headers' => [
                               'Authorization' => 'Bearer '.$returnedToken,
                           ],
                           'json' => [
                                 'payment'=>[
                                        'transaction_id'=> $saved_transaction_id,
                                 ] 
                           ],
                       ]);
                  
                  $response_api0 = json_decode($responsecancel->getBody(), true);



        $site=Session::get('selectedSiteCi');
        $calendarData =[];
        $client0 = new client;  

        Log::info(config('app.api_disponiblite_diaspo').$site);              
        $response0 = $client0->request('GET',config('app.api_disponiblite_diaspo').$site, [
                 'verify' => false,
                  // 'headers' => [
                  //      'Authorization' => 'Bearer ',
                  //  ],
                 'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer ',
                    'Accept' => 'application/json'
                ]
                   
               ]);
        $calendar_query = json_decode($response0->getBody(), true);

        $calendadarExdata =$calendar_query['data'];
        foreach ($calendadarExdata as $calendar_info) {

             if ($calendar_info['nb_dispo'] =='JOUR FERME OU DATE PASSEE') $nbdisp = '0 rdv'  ;
             else $nbdisp = $calendar_info['nb_dispo'].' rdv';
          $calendarData []= array('eventName' => $nbdisp,'calendar'=> 'Disponibilité','color'=> 'orange','eventTime'=> $calendar_info['date']);
        }
        return($calendarData);

    }


    
}
