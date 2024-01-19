<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Session;
use TokenAuthenticationHelper;
use Image;
use File;
use App\Models\Demande;
use App\Models\Pays;
use App\Models\Pp_req_step_data;
use App\Models\Pp_req_step_params;
use App\Models\Region;
use App\Models\Departement;
use App\Models\Ville;
use App\Models\Savedtransactionid;
use App\Models\Savedsessionid;
use DateTime;

class SaveAlldataPassportController extends Controller
{
    //demandes 
    public function save_passport_request (request $request){


          // $token = new TokenAuthenticationHelper();
          // $returnedToken = $token->GetAuthenticationToken();
          $returnedToken =  Session::get('returnedToken');

              $idAuth=Session::get('auth_token');
              $currentD=date('Y-m-d');
              $currentH=date('H:i:s');
              
        $mntformule        =   $request->mntformule;
        $rdv_payant        =   $request->rdv_payant;
        $montant_recu_p  = config('AppConfig.montant_recu_p');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv');
        // $frais_serv_rdv  = config('AppConfig.frais_serv_rdv');
        $frais_serv_rdv  = $mntformule;
        

        $frais_transac_dig = config('AppConfig.frais_transac_dig');

        $montant_global_rdv = $montant_recu_p + $frais_serv_rdv + $frais_transac_dig;

        $finalextr_naiss= null; $finalcni_ai=null;$finalphotocni_part=null;$finalcert_nat= null;$finalext_mar= null;$finalaut_parent=null;$final_person_contact_birthdate=null;


          if ($rdv_payant ==0) {
            // code...
             $frais_serv_rdv  = 0;
        }

               // if ($request->hasFile('ext_naiss')) {
               //  $finalextr_naiss= 'ext_naiss.'.$request->file('ext_naiss')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('cni_ai')) {
               //  $finalcni_ai= 'cni_ai.'.$request->file('cni_ai')->getClientOriginalExtension();
               //  }

               //   if ($request->hasFile('photocni_part')) {
               //  $finalphotocni_part= 'photocni_part.'.$request->file('photocni_part')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('certif_nat')) {
               //  $finalcert_nat= 'certif_nat.'.$request->file('certif_nat')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('ext_mar')) {
               //  $finalext_mar= 'ext_mar.'.$request->file('ext_mar')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('aut_parent')) {
               //  $finalaut_parent= 'aut_parent.'.$request->file('aut_parent')->getClientOriginalExtension();
               //  }

                 $finalextr_naiss=Session::get('ext_naiss') ;
                 $finalcni_ai=Session::get('cni_ai') ;
                 $finalphotocni_part=Session::get('photocni_part') ;
                 $finalcert_nat=Session::get('certif_nat') ;
                 $finalext_mar=Session::get('ext_mar') ;
                 $finalaut_parent=Session::get('aut_parent') ;

                // if ($request->hasFile('ext_naiss')) {
                // $finalextr_naiss=Session::get('ext_naiss') ;
                // }
                //  if ($request->hasFile('cni_ai')) {
                //  $finalextr_naiss=Session::get('cni_ai') ;
                // }

                //  if ($request->hasFile('photocni_part')) {
                //  $finalphotocni_part=Session::get('photocni_part') ;
                // }
                //  if ($request->hasFile('certif_nat')) {
                //  $finalcert_nat=Session::get('certif_nat') ;
                // }
                //  if ($request->hasFile('ext_mar')) {
                // $finalext_mar=Session::get('ext_mar') ;
                // }
                //  if ($request->hasFile('aut_parent')) {
                //  $finalaut_parent=Session::get('aut_parent') ;
                // }


                // $arrayNamelist = array('ext_naiss', 'cni_ai','photocni_part','certif_nat','ext_mar','aut_parent');



                 // dd($returnedToken);

               

                if ( $request->datenaiss_pere != null ||  $request->datenaiss_pere !='') {
                    // code...

                 $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_pere);
                 $final_date_n_pere = $datereceived->format('Y-m-d');

                }else 
                 $final_date_n_pere=null;



                   if ( $request->datenaiss_mere != null ||  $request->datenaiss_mere !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_mere);
                 $final_datenaiss_mere = $datereceived->format('Y-m-d');

                }else 
                 $final_date_n_pere=null;



                   if ( $request->person_contact_birthdate != null ||  $request->person_contact_birthdate !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->person_contact_birthdate);
                 $final_person_contact_birthdate= $datereceived->format('Y-m-d');

                }else 
                 $final_person_contact_birthdate=null;




                    if ( $request->datenaiss_conj != null ||  $request->datenaiss_conj !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_conj);
                 $final_datenaiss_conj = $datereceived->format('Y-m-d');
                }else 
                 $final_datenaiss_conj=null;


                   if ( $request->date_mariage != null ||  $request->date_mariage !='') {
                    // code...

                 $datereceived = DateTime::createFromFormat('d/m/Y', $request->date_mariage);
                 $final_date_mariage = $datereceived->format('Y-m-d');


                }else 
                 $final_date_mariage=null;



               
               
               

                //$sessionGetId=uniqid();

                $sessionGetId= Session::get('sessionid');

                   //lieu_naiss_cj
                    //profession_cj
                    //emailrdv
                    //telephonerdv
                  // dd($idAuth);

                 $login = Session::get('email');
                 // $passport_type="passeport_ci";
                  $passport_type=$request->passport_type;

                 // dd($passport_type);
                 $address="PLATEAU AVENUE LAMBLIN";


                // $client0 = new Client;
                // $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/passport_fees', [
                //           'headers' => [
                //                'Authorization' => 'Bearer '.$returnedToken,
                //            ],
                //            'json' => [
                //                  'payment'=>[
                //                         'session_id'=>$sessionGetId,
                //                         'login'=>$login,
                //                         'passport_type'=>$passport_type, 
                //                         'lastname'=>$request->nom_demandeur,  //nom du requerant 
                //                         'firstname'=> $request->prenom_demandeur, //prenom du requerant
                                       
                //                         'phone_number'=>$request->indicatif . $request->telephonerdv,
                //                         'address'=>$address
                //                  ] 
                //            ],
                //        ]);
                  
                //   $response_api0 = json_decode($response0->getBody(), true);

                  // $api_data_trans0 = $response_api0['data']['transaction_id'];
                  // $payment_status0 = $response_api0['data']['payment_status'];

                  $api_data_trans0 = Session::get('transaction_id') ;
                  $payment_status0 = Session::get('payment_status'); //$response_api0['data']['payment_status'];



                  $find_transactionid = SavedTransactionId::where([
                            ['email', '=', Session::get('email')],
                            ['passport_type', '=', 'passport_ci'],
                        ])->orderBy('id', 'desc')->first();

                  // dd($find_transactionid->transactionid1);
                  $api_data_trans0 =$find_transactionid->transactionid1;




                  $find_sessionid = SavedSessionId::where([
                            ['email', '=', Session::get('email')],
                            ['passport_type', '=', 'passport_ci'],
                        ])->orderBy('id', 'desc')->first();


                  //dd($find_sessionid->session_id);
                  $sessionGetId =$find_sessionid->session_id;
                  




                  $dateNaisreceived = DateTime::createFromFormat('d/m/Y', $request->date_naiss);
                  $dateNais = $dateNaisreceived->format('Y-m-d');

                  $Job = 'STUDENT';

                  if ($request->profession  != '' && $request->profession  != null) {
                      // code...
                     $Job = $request->profession;
                  }

                    $data=[
                        'idAuth'=>$idAuth,
                        'lastname'=>$request->nom_demandeur,
                        'firstname'=>$request->prenom_demandeur,
                        // 'birthday'=>$request->date_naiss,
                        'birthday'=>$dateNais,
                        'gender'=>$request->sexe,    
                        'height'=>$request->taille, 
                        'birthday_place'=>$request->lieu_naissance, 
                        'country'=>$request->pays_naissance, 
                        'country_code'=>$request->pays_residence,
                        'birth_country_code'=>$request->pays_naissance,
                        'district'=>$request->ville,
                        'nationality'=>$request->nationalite,
                        'job'=>$Job, 
                        'address'=>$request->addresse_siterdv, 
                        'marital_status'=>$request->sitmat ,
                        'old_passport_id'=>$request->numpassport ??'', 
                        'id_card_type'=>$request->type_piece, 
                        'id_card_number'=>$request->numpiece,  
                        'father_lastname'=>$request->nom_pere,
                        'father_firstname'=>$request->prenom_pere,
                        'father_birthday'=>$final_date_n_pere,
                        'mother_lastname'=>$request->nom_mere,
                        'mother_firstname'=>$request->prenoms_mere,
                        'mother_birthday'=>$final_datenaiss_mere,
                        'spouse_lastname'=>$request->nom_conjoint,
                        'spouse_firstname'=>$request->prenoms_conjoint, 
                        'spouse_birthday'=>$final_datenaiss_conj,
                        'wedding_date'=>$final_date_mariage,  
                        'wedding_place'=>$request->lieu_mariage,
                        'region'=>$request->region,
                        'department'=>$request->departement,
                        'city'=>$request->ville,
                        'township'=>$request->ville,
                        // 'street'=>$request->rue , a cause de la demande de changement  
                        'street'=>'NULL', 
                        'postal_box'=>$request->boite_postale, 
                        'phone_number'=>$request->telephonerdv,
                        'created_at'=>$currentD.' '.$currentH ,
                        'extr_naiss' =>$finalextr_naiss,
                        'cni_ai'=>$finalcni_ai,
                        'photocni_part'=>$finalphotocni_part,
                        'cert_nat'=>$finalcert_nat ,
                        'ext_mar'=>$finalext_mar ,
                        'aut_parent'=>$finalaut_parent,
                        'email_demandeur'=>Session::get('email'),
                        'phone_demandeur'=>Session::get('msisdn'),
                        'civility'=>Session::get('civility'),
                        'order_id'=>$request->order ??'',
                        // 'montant'=>$request->transaction_amount ??'',
                        'montant'=>$montant_global_rdv,
                        'session_id'=>$sessionGetId ??'',
                        'status'=>3,
                        'email'=> Session::get('email'),
                        'loginRdv'=>$request->emailRdv,
                        'location_code'=>$request->location_code,
                        'time_value'=>$request->time_value,
                        'time_code'=>$request->time_code,
                        'date_desired'=>$request->date_desired,
                        'phone_number'=>$request->indicatif . $request->telephoneRdv,
                        'location_address'=>$request->location_address,
                        'meeting_type'=>$request->passport_type,
                        'transaction_id1'=>$api_data_trans0??'',   //Jean
                        'payment_status'=>$payment_status0 ??'',
                        'person_lastname_contact'=>$request->person_lastname_contact,
                        'person_firstname_contact'=>$request->person_firstname_contact,
                        'person_contact_birthdate'=>$final_person_contact_birthdate?? Null, 
                        'person_contact_number_phone'=>$request->person_contact_number_phone ??''
                      ];

                     
// order
// transaction_amount
              if ($request->transaction_amount == $montant_global_rdv) {
                // code...
                    $newInsert =  Demande::create($data
                        );
                    if(!$newInsert->id){
                        return 'Some Error';
                    }else {
                        return 'inserted';
                    }

               }else 
                return 'fraud';
    }



    public function save_passport_request_diasp (request $request){


          // $token = new TokenAuthenticationHelper();
          // $returnedToken = $token->GetAuthenticationToken();
          $returnedToken =  Session::get('returnedToken');

              $idAuth=Session::get('auth_token');
              $currentD=date('Y-m-d');
              $currentH=date('H:i:s');

        $mntformule        =   $request->mntformule;

        $montant_recu_p  = config('AppConfig.montant_recu_p_diasp');
        $montant_rec_rdv = config('AppConfig.montant_rec_rdv_diasp');
        // $frais_serv_rdv  = config('AppConfig.frais_serv_rdv_diasp');

        $rdv_payant        =   $request->rdv_payant;
        $frais_serv_rdv  = $mntformule;

        $frais_transac_dig = config('AppConfig.frais_transac_dig_diasp');

        //dd(strtoupper(Session::get('siterawname')));

          $freecountries = ['MALI', 'MAROC', 'NIGERIA', 'MEXIQUE', 'PAYS-BAS','RDC','RUSSIE','SENEGAL','TUNISIE','COREE DU SUD','CHINE','JAPON','GUINEE','INDE','ISRAEL','ANGOLA','ALGERIE','EGYPTE','GABON','BRESIL','TURQUIE','QATAR','EMIRATES ARABES UNIS','ARABIE SAOUDITE (DJEDDAH)','ARABIE SAOUDITE','ARABIE SAOUDITE (RIYAD)'];

          // if (in_array(strtoupper(Session::get('siterawname')),  $freecountries)) {
          //       $frais_serv_rdv  = 0;
          //   }


          if ($rdv_payant ==0) {
            // code...
             $frais_serv_rdv  = 0;
        }


                        

        $montant_global_rdv = $montant_recu_p + $frais_serv_rdv + $frais_transac_dig;

        $finalextr_naiss= null; $finalcni_ai=null;$finalphotocni_part=null;$finalcert_nat= null;$finalext_mar= null;$finalaut_parent=null;$final_person_contact_birthdate=null;

               // if ($request->hasFile('ext_naiss')) {
               //  $finalextr_naiss= 'ext_naiss.'.$request->file('ext_naiss')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('cni_ai')) {
               //  $finalcni_ai= 'cni_ai.'.$request->file('cni_ai')->getClientOriginalExtension();
               //  }

               //   if ($request->hasFile('photocni_part')) {
               //  $finalphotocni_part= 'photocni_part.'.$request->file('photocni_part')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('certif_nat')) {
               //  $finalcert_nat= 'certif_nat.'.$request->file('certif_nat')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('ext_mar')) {
               //  $finalext_mar= 'ext_mar.'.$request->file('ext_mar')->getClientOriginalExtension();
               //  }
               //   if ($request->hasFile('aut_parent')) {
               //  $finalaut_parent= 'aut_parent.'.$request->file('aut_parent')->getClientOriginalExtension();
               //  }

                 $finalextr_naiss=Session::get('ext_naiss') ;
                 $finalcni_ai=Session::get('cni_ai') ;
                 $finalphotocni_part=Session::get('photocni_part') ;
                 $finalcert_nat=Session::get('certif_nat') ;
                 $finalext_mar=Session::get('ext_mar') ;
                 $finalaut_parent=Session::get('aut_parent') ;

                // if ($request->hasFile('ext_naiss')) {
                // $finalextr_naiss=Session::get('ext_naiss') ;
                // }
                //  if ($request->hasFile('cni_ai')) {
                //  $finalextr_naiss=Session::get('cni_ai') ;
                // }

                //  if ($request->hasFile('photocni_part')) {
                //  $finalphotocni_part=Session::get('photocni_part') ;
                // }
                //  if ($request->hasFile('certif_nat')) {
                //  $finalcert_nat=Session::get('certif_nat') ;
                // }
                //  if ($request->hasFile('ext_mar')) {
                // $finalext_mar=Session::get('ext_mar') ;
                // }
                //  if ($request->hasFile('aut_parent')) {
                //  $finalaut_parent=Session::get('aut_parent') ;
                // }


                // $arrayNamelist = array('ext_naiss', 'cni_ai','photocni_part','certif_nat','ext_mar','aut_parent');



                 // dd($returnedToken);

               

                if ( $request->datenaiss_pere != null ||  $request->datenaiss_pere !='') {
                    // code...

                 $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_pere);
                 $final_date_n_pere = $datereceived->format('Y-m-d');

                }else 
                 $final_date_n_pere=null;



                   if ( $request->datenaiss_mere != null ||  $request->datenaiss_mere !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_mere);
                 $final_datenaiss_mere = $datereceived->format('Y-m-d');

                }else 
                 $final_date_n_pere=null;



                    if ( $request->datenaiss_conj != null ||  $request->datenaiss_conj !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->datenaiss_conj);
                 $final_datenaiss_conj = $datereceived->format('Y-m-d');
                }else 
                 $final_datenaiss_conj=null;


                   if ( $request->date_mariage != null ||  $request->date_mariage !='') {
                    // code...

                 $datereceived = DateTime::createFromFormat('d/m/Y', $request->date_mariage);
                 $final_date_mariage = $datereceived->format('Y-m-d');


                }else 
                 $final_date_mariage=null;


                 if ( $request->person_contact_birthdate != null ||  $request->person_contact_birthdate !='') {
                    // code...
                
                  $datereceived = DateTime::createFromFormat('d/m/Y', $request->person_contact_birthdate);
                 $final_person_contact_birthdate= $datereceived->format('Y-m-d');

                }else 
                 $final_person_contact_birthdate=null;



               
               
               

                //$sessionGetId=uniqid();

                // $sessionGetId= Session::get('sessionid');

                   //lieu_naiss_cj
                    //profession_cj
                    //emailrdv
                    //telephonerdv
                  // dd($idAuth);

                 $login = Session::get('email');
                 // $passport_type="passeport_ci";
                  $passport_type=$request->passport_type;

                 // dd($passport_type);
                 $address="PLATEAU AVENUE LAMBLIN";





                // $client0 = new Client;
                // $response0 = $client0->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/payment/passport_fees', [
                //           'headers' => [
                //                'Authorization' => 'Bearer '.$returnedToken,
                //            ],
                //            'json' => [
                //                  'payment'=>[
                //                         'session_id'=>$sessionGetId,
                //                         'login'=>$login,
                //                         'passport_type'=>$passport_type, 
                //                         'lastname'=>$request->nom_demandeur,  //nom du requerant 
                //                         'firstname'=> $request->prenom_demandeur, //prenom du requerant
                                       
                //                         'phone_number'=>$request->indicatif . $request->telephonerdv,
                //                         'address'=>$address
                //                  ] 
                //            ],
                //        ]);
                  
                //   $response_api0 = json_decode($response0->getBody(), true);

                  // $api_data_trans0 = $response_api0['data']['transaction_id'];
                  // $payment_status0 = $response_api0['data']['payment_status'];

                  $api_data_trans0 = Session::get('transaction_id') ;
                  $payment_status0 = Session::get('payment_status'); //$response_api0['data']['payment_status'];


                  $find_transactionid = SavedTransactionId::where([
                            ['email', '=', Session::get('email')],
                            ['passport_type', '=', 'passport_foreign'],
                        ])->orderBy('id', 'desc')->first();

                  // dd($find_transactionid->transactionid1);
                  $api_data_trans0 =$find_transactionid->transactionid1;




                  $find_sessionid = SavedSessionId::where([
                            ['email', '=', Session::get('email')],
                            ['passport_type', '=', 'passport_foreign'],
                        ])->orderBy('id', 'desc')->first();


                  //dd($find_sessionid->session_id);
                  $sessionGetId =$find_sessionid->session_id;
                  

                  $dateNaisreceived = DateTime::createFromFormat('d/m/Y', $request->date_naiss);
                  $dateNais = $dateNaisreceived->format('Y-m-d');

                  $Job = 'STUDENT';

                  if ($request->profession  != '' && $request->profession  != null) {
                      // code...
                     $Job = $request->profession;
                  }

                  

                    $data=[
                        'idAuth'=>$idAuth,
                        'lastname'=>$request->nom_demandeur,
                        'firstname'=>$request->prenom_demandeur,
                        // 'birthday'=>$request->date_naiss,
                        'birthday'=>$dateNais,
                        'gender'=>$request->sexe,    
                        'height'=>$request->taille, 
                        'birthday_place'=>$request->lieu_naissance, 
                        'country'=>$request->pays_naissance, 
                        'country_code'=>$request->pays_residence,
                        'birth_country_code'=>$request->pays_naissance,
                        'district'=>$request->ville,
                        'nationality'=>$request->nationalite,
                        'job'=>$Job, 
                        'address'=>$request->addresse_siterdv, 
                        'marital_status'=>$request->sitmat ,
                        'old_passport_id'=>$request->numpassport ??'', 
                        'id_card_type'=>$request->type_piece, 
                        'id_card_number'=>$request->numpiece,  
                        'father_lastname'=>$request->nom_pere,
                        'father_firstname'=>$request->prenom_pere,
                        'father_birthday'=>$final_date_n_pere,
                        'mother_lastname'=>$request->nom_mere,
                        'mother_firstname'=>$request->prenoms_mere,
                        'mother_birthday'=>$final_datenaiss_mere,
                        'spouse_lastname'=>$request->nom_conjoint,
                        'spouse_firstname'=>$request->prenoms_conjoint, 
                        'spouse_birthday'=>$final_datenaiss_conj,
                        'wedding_date'=>$final_date_mariage,  
                        'wedding_place'=>$request->lieu_mariage,
                        'region'=>$request->region,
                        'department'=>$request->departement,
                        'city'=>$request->ville,
                        'township'=>$request->ville,
                        // 'street'=>$request->rue , a cause de la demande de changement  
                        'street'=>'NULL', 
                        'postal_box'=>$request->boite_postale, 
                        'phone_number'=>$request->telephonerdv,
                        'created_at'=>$currentD.' '.$currentH ,
                        'extr_naiss' =>$finalextr_naiss,
                        'cni_ai'=>$finalcni_ai,
                        'photocni_part'=>$finalphotocni_part,
                        'cert_nat'=>$finalcert_nat ,
                        'ext_mar'=>$finalext_mar ,
                        'aut_parent'=>$finalaut_parent,
                        'email_demandeur'=>Session::get('email'),
                        'phone_demandeur'=>Session::get('msisdn'),
                        'civility'=>Session::get('civility'),
                        'order_id'=>$request->order ??'',
                        // 'montant'=>$request->transaction_amount ??'',
                        'montant'=>$montant_global_rdv,
                        'session_id'=>$sessionGetId ??'',
                        'status'=>3,
                        'email'=> Session::get('email'),
                        'loginRdv'=>$request->emailRdv,
                        'location_code'=>$request->location_code,
                        'time_value'=>$request->time_value,
                        'time_code'=>$request->time_code,
                        'date_desired'=>$request->date_desired,
                        'phone_number'=>$request->indicatif . $request->telephoneRdv,
                        'location_address'=>$request->location_address,
                        'meeting_type'=>$request->passport_type,
                        'transaction_id1'=>$api_data_trans0??'',   //Jean
                        'payment_status'=>$payment_status0 ??'',
                        'person_lastname_contact'=>$request->person_lastname_contact,
                        'person_firstname_contact'=>$request->person_firstname_contact,
                        'person_contact_birthdate'=>$final_person_contact_birthdate?? Null, 
                        'person_contact_number_phone'=>$request->person_contact_number_phone ??''
                      ];

                     
// order
// transaction_amount
              if ($request->transaction_amount == $montant_global_rdv) {
                  $newInsert =  Demande::create($data
                      );
                  if(!$newInsert->id){
                      return 'Some Error';
                  }else {
                      return 'inserted';
                  }
                }else
                return 'fraud';

    }



    public function save_step_one(Request $request){

      $numPass = $request->numpassport;
      $type_resident = $request->type_resident;
      $type_piece= $request->type_piece;
      $num_piece= $request->numpiece;
      $nom= $request->nom_demandeur;
      $prenoms= $request->prenom_demandeur;
      $taille= $request->taille;
      $dateNais= $request->date_naiss;
      // $type_demande= $request->type_demande;
      $paysNais= $request->pays_naissance;
      $paysResidence= $request->pays_residence;
      $nationalite= $request->nationalite;
      $lieuNais= $request->lieu_naissance;
      $profession= $request->profession;
      //$diff= abs(date('Y-m-d') - date("Y-m-d", strtotime($request->date_naiss)));
       $diff= abs(strtotime(date('Y-m-d')) - strtotime(date("Y-m-d", strtotime($request->date_naiss))));

       //  $diff = abs(strtotime($date2) - strtotime($date1));
      $age = floor($diff / (365*60*60*24));
      $sexe= $request->sexe;

      //numpassprec#typepiece#numpiece#nom#prenom#taille#datenais#paynais#paysres#nationalite#lieunais#prof#sexe
      $finaldata = $numPass.'#'.$type_piece.'#'.$num_piece.'#'.$nom.'#'.$prenoms.'#'.$taille.'#'.$dateNais.'#'.$paysNais.'#'.$paysResidence.'#'.$nationalite.'#'.$lieuNais.'#'.$profession.'#'.$age.'#'.$sexe;

      $codeArray = array('pre1');
      $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
                        ->where([
                            ['user_login', '=', Session::get('email')],
                            ['status', '=', 0],
                            ['type_resident', '=', $type_resident],
                        ])->get();

       if ($find_operation->count()==0) {
      $newInsert =  Pp_req_step_data::create([
                        'datavalue'=>$finaldata,
                        'parent_step'=>'pre1',
                        'user_login'=>Session::get('email'),
                        'status'=>0,
                        'type_resident'=>$type_resident,
                    ]);

          if(!$newInsert->id){
             // App::abort(500, 'Some Error');
              return 'Some Error';
          }else {
              Session::put('current_step', 'pre1');
              return 'inserted';
          }
     
       }else{
          Pp_req_step_data::where([
                            ['parent_step', '=', 'pre1'],
                            ['user_login', '=', Session::get('email')],
                            ['type_resident', '=', $type_resident],
                            ])->update(['datavalue' => $finaldata]);
           return 'updated';
       }

    }


     public function save_step_two(Request $request){

      $pereN = $request->nom_pere;
      $pereP= $request->prenom_pere;
      $pereDt= $request->datenaiss_pere;
      $mereN= $request->nom_mere;
      $mereP= $request->prenoms_mere;
      $mereDt= $request->datenaiss_mere;

      $ctactN= $request->person_lastname_contact;
      $ctactP= $request->person_firstname_contact;
      $ctactBd= $request->person_contact_birthdate;
      $ctactNf= $request->person_contact_number_phone;


      $type_resident = $request->type_resident;
     
      $finaldata = $pereN.'#'.$pereP.'#'.$pereDt.'#'.$mereN.'#'.$mereP.'#'.$mereDt.'#'.$ctactN.'#'.$ctactP.'#'.$ctactBd.'#'.$ctactNf;
      $codeArray = array('pre2');
      $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
                        ->where([
                            ['user_login', '=', Session::get('email')],
                            ['status', '=', 0],
                            ['type_resident', '=', $type_resident],
                        ])->get();

       if ($find_operation->count()==0) {
            $newInsert =  Pp_req_step_data::create([
                        'datavalue'=>$finaldata,
                        'parent_step'=>'pre2',
                        'user_login'=>Session::get('email'),
                        'type_resident'=>$type_resident,
                        'status'=>0
                    ]);
            if(!$newInsert->id){
             // App::abort(500, 'Some Error');
              return 'Some Error';
          }else {
              Session::put('current_step', 'pre2');
              return 'inserted';
          }
       }else{
          Pp_req_step_data::where([
                            ['parent_step', '=', 'pre2'],
                            ['user_login', '=', Session::get('email')],
                            ['type_resident', '=', $type_resident],
                            ])->update(['datavalue' => $finaldata]);
           return 'updated';
       }

    }



    public function save_step_three(Request $request){

      $sitmat = $request->sitmat;
      $conjointN= $request->nom_conjoint;
      $conjointP= $request->prenoms_conjoint;
      $conjointDt= $request->datenaiss_conj;
      $conjointLieu= $request->lieu_naiss_cj;
      $conjointMarDt= $request->date_mariage;
      $lieuMar= $request->lieu_mariage;
      $ProfessionMar= $request->profession_cj;
      //numpassprec#typepiece#numpiece#nom#prenom#taille#datenais#paynais#paysres#nationalite#lieunais#prof#sexe
      $finaldata = $sitmat.'#'.$conjointN.'#'.$conjointP.'#'.$conjointDt.'#'.$conjointLieu.'#'.$conjointMarDt.'#'.$lieuMar.'#'.$ProfessionMar;

      $type_resident = $request->type_resident;

      $codeArray = array('pre3');
        $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
                        ->where([
                            ['user_login', '=', Session::get('email')],
                            ['status', '=', 0],
                             ['type_resident', '=', $type_resident],
                        ])->get();

       if ($find_operation->count()==0) {
      $newInsert= Pp_req_step_data::create([
                        'datavalue'=>$finaldata,
                        'parent_step'=>'pre3',
                        'user_login'=>Session::get('email'),
                        'type_resident'=>$type_resident,
                        'status'=>0
                    ]);
        if(!$newInsert->id){
             // App::abort(500, 'Some Error');
              return 'Some Error';
          }else {
              Session::put('current_step', 'pre3');
              return 'inserted';
          }
       }else{
          Pp_req_step_data::where([
                            ['parent_step', '=', 'pre3'],
                            ['user_login', '=', Session::get('email')],
                            ['type_resident', '=', $type_resident],
                            ])->update(['datavalue' => $finaldata]);
           return 'updated';
       }
    }


    public function save_step_four(Request $request){

      $region = $request->region;
      $Departement= $request->departement;
      $ville= $request->ville;
      $Commune= $request->Commune;
      $postale= $request->boite_postale;
      $finaldata = $region.'#'.$Departement.'#'.$ville.'#'.$Commune.'#'.$postale.'#';

      $type_resident = $request->type_resident;

      $step='pre4';

      $codeArray = array('pre4');
        $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
                        ->where([
                            ['user_login', '=', Session::get('email')],
                            ['status', '=', 0],
                            ['type_resident', '=', $type_resident],
                        ])->get();

       if ($find_operation->count()==0) {
       
      $newInsert =  Pp_req_step_data::create([
                        'datavalue'=>$finaldata,
                        'parent_step'=>$step,
                        'user_login'=>Session::get('email'),
                        'type_resident'=>$type_resident,
                        'status'=>0
                    ]);
          if(!$newInsert->id){
             // App::abort(500, 'Some Error');
              return 'Some Error';
          }else {
              Session::put('current_step', 'pre4');
              return 'inserted';
          }
       }else{
          Pp_req_step_data::where([
                            ['parent_step', '=', $step],
                            ['user_login', '=', Session::get('email')],
                            ['type_resident', '=', $type_resident],
                            ])->update(['datavalue' => $finaldata]);
           return 'updated';
       }
    }



    public function save_rdv_step_one(Request $request){

        $email = $request->emailrdv;
        $telephone= $request->telephonerdv;
        $indicatif= $request->indicatif;
        $type_resident = $request->type_resident;
     
        $finaldata = $email.'#'.$telephone.'#'.$indicatif;
        $step='rdv1';

        $codeArray = array('rdv1', 'rdv2');
        $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
                        ->where([
                            ['user_login', '=', Session::get('email')],
                            ['status', '=', 0],
                            ['type_resident', '=', $type_resident],
                        ])->get();

       if ($find_operation->count()==0) {
       $newInsert = Pp_req_step_data::create([
                        'datavalue'=>$finaldata,
                        'parent_step'=>$step,
                        'user_login'=>Session::get('email'),
                        'type_resident'=>$type_resident,
                        'status'=>0
                    ]);
       if(!$newInsert->id){
             // App::abort(500, 'Some Error');
              return 'Some Error';
          }else {
              Session::put('current_step', $step);
              return 'inserted';
          }
       
       }else{
          Pp_req_step_data::where([
                            ['parent_step', '=', $step],
                            ['user_login', '=', Session::get('email')],
                            ['type_resident', '=', $type_resident],
                            ])->update(['datavalue' => $finaldata]);
           return 'updated';
       }
    }


    public function save_step_five(Request $request){
        $step = 'pre5';
        $type_resident = $request->type_resident;
        $folderId = date('YmdHis');
        $directoryname = Session::get('msisdn').$folderId;
        //sauvegarde du repertoire 
        $find_operation = Pp_req_step_params::where([
            ['userlogin', '=', Session::get('email')],
            ['status', '=', 0],
        ])->get();

        if($find_operation->count() == 0){
            Pp_req_step_params::create([
                'idEnr1'=>$folderId,
                'userlogin'=>Session::get('email'),
                'status' => 0
            ]);
        }else{
            Pp_req_step_params::where([
              ['userlogin', '=', Session::get('email')],
            ])->update(['idEnr1' => $folderId,'status' => 0]);
        }

        $finaldata = '';
        $arrayNamelist = array('ext_naiss', 'cni_ai','photocni_part','certif_nat','ext_mar','aut_parent');
        foreach($arrayNamelist as $namelist):
            if($request->hasFile($namelist)){
                $path = public_path('images/'.$directoryname);
                if(!File::isDirectory($path)){
                    File::makeDirectory($path, 0777, true, true);
                }
                $image = $request->file($namelist);
                $filename = $namelist.'.'.$image->getClientOriginalExtension();
                 Session::put($namelist,$filename);
                if($image->move($path, $filename)){
                  $finaldata .= $filename.'#';
                }
            }
        endforeach;
        $codeArray = array('pre5');
        $find_operation = Pp_req_step_data::whereIn('parent_step',  $codeArray)
        ->where([
            ['user_login', '=', Session::get('email')],
            ['type_resident', '=', $type_resident],
            ['status', '=', 0],
        ])->get();
        if($find_operation->count() == 0){
            $newInsert = Pp_req_step_data::create([
                'datavalue' => $finaldata,
                'parent_step' => $step,
                'user_login' => Session::get('email'),
                'type_resident' => $type_resident,
                'status' => 0
            ]);
            if(!$newInsert->id){
                $return = 'Some Error';
            }else{
                Session::put('current_step', 'pre5');
                $return = 'inserted';
            }
        }else{
            Pp_req_step_data::where([
                ['parent_step', '=', $step],
                ['user_login', '=', Session::get('email')],
                ['type_resident', '=', $type_resident],
            ])->update(['datavalue' => $finaldata]);
            $return = 'updated';
        }
        return $return;
    }


    
}


