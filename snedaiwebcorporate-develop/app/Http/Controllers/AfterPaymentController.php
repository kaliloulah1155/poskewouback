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
use App\Modif_rdv;
use DB;
use Illuminate\Support\Facades\Log;

class AfterPaymentController extends Controller
{
    //
    public function paiementFrais(Request $request)
    {

        $token = new TokenAuthenticationHelper();
        $returnedToken = $token->GetAuthenticationToken();

        $order_id_ = $request->order_id;
        $status_id_ = $request->status_id ?? 0;
        $transaction_id_ = $request->transaction_id;
        $transaction_amount_ = $request->transaction_amount;
        $currency_ = $request->currency;
        $paid_transaction_amount_ = $request->paid_transaction_amount;
        $change_rate_ = $request->change_rate;
        $conflictual_transaction_amount_ = $request->conflictual_transaction_amount;
        $conflictual_currency_ = $request->conflictual_currency;
        $wallet_ = $request->wallet;
        $ref_momo_ = $request->ref_momo ?? '';

        $wallet_tosend = '';

        $transaction_id1 = '';

        $response = '';
        $status_endoperation = 2; //echec et fin
        if ($status_id_ == 1) $status_endoperation = 1;
        // if($status_id_!=null)$status_endoperation =$status_id_; //success et fin
        if (substr($order_id_, 0, 3) === "rdv")
        {

            $find_rdv = Modif_rdv::where([['order_id', '=', $order_id_], ])->first();

            if ($find_rdv->count() == 1)
            {

                $meeting_code = $find_rdv->meeting_code;
                $time_code = $find_rdv->time_code;
                $time_value = $find_rdv->time_value;
                $desired_date = $find_rdv->desired_date;

                $client = new \GuzzleHttp\Client();
                $response = $client->request('POST', $ipadress_api . 'api/snedai_hub/meeting/update', ['headers' => ['Authorization' => 'Bearer ' . $tocken_obtenu, ], 'form_params' => ['request' => ['meeting_code' => $meeting_code, //RV919D60dX80P //RV919D60dX80P1
                'time_code' => $time_code, 'time_value' => $time_value, 'desired_date' => $desired_date]], ]);

                $response_api = json_decode($response->getBody() , true);
                $api_status = $response_api['api_code'];

                if ($api_status == 200)
                {
                    // Alert::success('Votre Rendez vous a été modifié avec succès')->persistent('Fermer');
                    
                }
                else
                {
                    // Alert::success('Echec de modification de RDV')->persistent('Fermer');
                    
                }

            }

        }
        else
        {

            //controle
            //insertion des données de la gateway
            $rq = DB::table('demandes')->where('order_id', $order_id_)->latest('created_at')
                ->update(['status_id' => $status_id_, 'transaction_id' => $transaction_id_, 'wallet' => $wallet_, 'ref_momo' => $ref_momo_, 'status' => $status_endoperation, ]);

            $dmd = Demande::select('*')->where('order_id', $order_id_)->first();

            //dd($dmd);
            // debut enrol+Rdv
            //Debut RDV
            //$replaced = Str::replace('8.x', '9.x', $string);
            $session_id = $dmd->session_id;
            $payment_ref = $transaction_id_;
            $loginRdv = $dmd->civility;
            $email = $dmd->email;
            $phone_numberRdv = $dmd->phone_number;
            $addressRdv = $dmd->location_address;
            $libelle_adress_rdv = $dmd->address;
            $location_code = $dmd->location_code;
            $time_value = $dmd->time_value;
            $time_code = $dmd->time_code;
            $date_desired = $dmd->date_desired;
            $lastname = $dmd->lastname;
            $firstname = $dmd->firstname;

            // $meeting_type = "passport_ci";
            $meeting_type = $dmd->meeting_type;

            $transaction_id1 = $dmd->transaction_id1;
            $session_id = $dmd->session_id;
            $checkciv = $dmd->civility;

            $rdvCodeV = '';
            $login = $dmd->email;
            $email = $dmd->email;
            $civilite = $checkciv;
            //$civilite="M";
            $emailRdv1 = $dmd->loginRdv;
            $phone_number = $dmd->phone_number;
            $gender = $dmd->gender;
            $height = $dmd->height;
            $job = str_replace('-', ' ', $dmd->job); //$dmd->job;
            //$marital_status=$dmd->marital_status; a definir en base et input
            $particular_signs = $dmd->particular_signs;
            $old_passport_id = $dmd->old_passport_id ?? '';
            $id_card_type = $dmd->id_card_type;
            $id_card_number = $dmd->id_card_number;
            $marital_status = $dmd->marital_status;

            $nationality = $dmd->nationality;
            $country_code = $dmd->country_code;
            $birth_country_code = $dmd->birth_country_code;
            $district = $dmd->district;

            $region = $dmd->region;
            $department = $dmd->department;
            $city = $dmd->city;
            $township = $dmd->township;
            $street = $dmd->street;
            $postal_box = $dmd->postal_box;
            $birthdate = $dmd->birthday;
            $birth_place = str_replace('-', ' ', $dmd->birthday_place); // $dmd->birthday_place;
            $father_firstname = $dmd->father_firstname;
            $father_lastname = $dmd->father_lastname;
            $father_birthdate = $dmd->father_birthday;
            $mother_firstname = $dmd->mother_firstname;
            $mother_lastname = $dmd->mother_lastname;
            $mother_birthdate = $dmd->mother_birthday;
            $spouse_firstname = $dmd->spouse_firstname;
            $spouse_lastname = $dmd->spouse_lastname;
            $spouse_birthdate = $dmd->spouse_birthday;
            $wedding_date = $dmd->wedding_date;
            $wedding_place = $dmd->wedding_place;

            $person_lastname_contact = $dmd->person_lastname_contact;
            $person_firstname_contact = $dmd->person_firstname_contact;
            $person_contact_birthdate = $dmd->person_contact_birthdate;
            $person_contact_number_phone = $dmd->person_contact_number_phone;

            $montant_enreg = $dmd->montant;

            if ($transaction_amount_ == $montant_enreg)
            {

                //fin traitement des données pour les formulaires enrollement
                if ($status_id_ == 1)
                {

                    //Confirmation Passeport frais
                    $client = new Client();
                    $response = $client->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/passport_payment/confirm', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['order_id' => $dmd->transaction_id1, 'transaction_id' => $transaction_id_, 'wallet' => $wallet_, 'ref_momo' => $ref_momo_, 'currency' => $currency_]], ]);
                    $response_api = json_decode($response->getBody() , true);

                    if (isset($modifRdv))
                    {

                        $client0 = new Client();
                        $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civil_rdv, //civilite de la personne connecté
                        'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $loginRdv, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv,'libelle_adress_rdv' => $libelle_adress_rdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'date_desired' => $date_desired, 'transaction_id' => $transaction_id1, 'currency' => $currency_]], ]);
                        $response_api0 = json_decode($response0->getBody() , true);
                        $rdvCodeV = $response_api0['data']['meeting_code'];

                    }
                    else
                    {

                        //Confirmation RDV frais + Enrol
                        $client0 = new Client();
                        $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civilite, //civilite de la personne connecté
                        'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $emailRdv1, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv,'libelle_adress_rdv' => $libelle_adress_rdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'transaction_id' => $transaction_id1, 'date_desired' => $date_desired, 'currency' => $currency_]], ]);
                        $response_api0 = json_decode($response0->getBody() , true);
                        
                        //Confirmation Enrollement
                        $client1 = new Client();

                        $finalarr = array();
                        $finalextr_naiss = $dmd->extr_naiss;
                        $finalcni_ai = $dmd->cni_ai;
                        $finalphotocni_part = $dmd->photocni_part;
                        $finalcert_nat = $dmd->cert_nat;
                        $finalext_mar = $dmd->ext_mar;
                        $finalaut_parent = $dmd->aut_parent;
                        $email_demandeur = $dmd->email_demandeur;
                        $phone_demandeur = $dmd->phone_demandeur;

                        // reperftoire des fichiers
                        $find_paramsfolder = Pp_req_step_params::where([['userlogin', '=', $email_demandeur],
                        // ['status', '=', 1],
                        ])->orderBy('id', 'desc')
                            ->limit(1)
                            ->get()
                            ->toArray();
                        $folderId = $find_paramsfolder[0]['idEnr1'];

                        $directoryname = $phone_demandeur . $folderId;

                        if ($finalextr_naiss != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalextr_naiss);
                            $en_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalextr_naiss);
                            $en_ext = $extension_array[1];
                            $en_array = array(
                                'en_ext' => $en_ext,
                                'en_code' => $en_code
                            );
                            $finalarr[] = $en_array;
                        }

                        if ($finalcni_ai != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalcni_ai);
                            $cni_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalcni_ai);
                            $cni_ext = $extension_array[1];
                            $cni_array = array(
                                'cni_ext' => $cni_ext,
                                'cni_code' => $cni_code
                            );
                            $finalarr[] = $cni_array;
                        }

                        if ($finalphotocni_part != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalphotocni_part);
                            $cnipa_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalphotocni_part);
                            $cnipa_ext = $extension_array[1];
                            $cnipa_array = array(
                                'cnipa_ext' => $cnipa_ext,
                                'cnipa_code' => $cnipa_code
                            );
                            $finalarr[] = $cnipa_array;
                        }

                        if ($finalcert_nat != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalcert_nat);
                            $cn_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalcert_nat);
                            $cn_ext = $extension_array[1];
                            $cn_array = array(
                                'cn_ext' => $cn_ext,
                                'cn_code' => $cn_code
                            );
                            $finalarr[] = $cn_array;
                        }

                        if ($finalext_mar != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalext_mar);
                            $eam_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalext_mar);
                            $eam_ext = $extension_array[1];
                            $eam_array = array(
                                'eam_ext' => $eam_ext,
                                'eam_code' => $eam_code
                            );
                            $finalarr[] = $eam_array;
                        }

                        if ($finalaut_parent != null)
                        {
                            # code...
                            $filepath = public_path('images/' . $directoryname . '/' . $finalaut_parent);
                            $apl_code = base64_encode(File::get($filepath));

                            $extension_array = explode('.', $finalaut_parent);
                            $apl_ext = $extension_array[1];
                            $apl_array = array(
                                'apl_ext' => $apl_ext,
                                'apl_code' => $apl_code
                            );
                            $finalarr[] = $apl_array;
                        }

                        //     array( "title" => "Rear Window",
                        // "director" => "Alfred Hitchcock",
                        // "year" => 1954 );
                        $a = array(
                            'request' => ['session_id' => $session_id,
                            'login' => $dmd->email,
                            'email' => $emailRdv1,
                            'firstname' => $firstname,
                            'lastname' => $lastname,
                            'phone_number' => $phone_number,
                            'gender' => $gender,
                            'height' => $height,
                            'job' => $job,
                            'particular_signs' => $particular_signs,
                            'old_passport_id' => $old_passport_id ?? '',
                            'id_card_type' => $id_card_type,
                            'id_card_number' => $id_card_number,
                            'country_code' => $country_code,
                            'district' => $district,
                            'nationality' => $nationality,
                            'marital_status' => $marital_status,
                            'passport_type' => $meeting_type,
                            'birth_country_code' => $birth_country_code,
                            'region' => $region,
                            'department' => $department,
                            'city' => $city,
                            'township' => $township,
                            'street' => $street,
                            'postal_box' => $postal_box,
                            'birthdate' => $birthdate,
                            'birth_place' => $birth_place,
                            'father_firstname' => $father_firstname,
                            'father_lastname' => $father_lastname,
                            'father_birthdate' => $father_birthdate,
                            'mother_firstname' => $mother_firstname,
                            'mother_lastname' => $mother_lastname,
                            'mother_birthdate' => $mother_birthdate,
                            'spouse_firstname' => $spouse_firstname,
                            'spouse_lastname' => $spouse_lastname,
                            'spouse_birthdate' => $spouse_birthdate,
                            'wedding_date' => $wedding_date,
                            'wedding_place' => $wedding_place,
                            'attachments' => $finalarr]
                        );

                        Log::info(json_encode($a));

                        if ($meeting_type =='passport_foreign') {
                            // code...
                              $response1 = $client1->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/passport/application', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['request' => ['session_id' => $session_id, 'login' => $dmd->email, 'email' => $emailRdv1, 'firstname' => $firstname, 'lastname' => $lastname, 'phone_number' => $phone_number, 'gender' => $gender, 'height' => $height, 'job' => $job, 'particular_signs' => $particular_signs, 'old_passport_id' => $old_passport_id ?? '', 'id_card_type' => $id_card_type, 'id_card_number' => $id_card_number, 'country_code' => $country_code, 'district' => $district, 'nationality' => $nationality, 'marital_status' => $marital_status, 'passport_type' => $meeting_type, 'birth_country_code' => $birth_country_code, 'region' => $region, 'department' => $department, 'city' => $city, 'township' => $township, 'street' => $street, 'postal_box' => $postal_box, 'birthdate' => $birthdate, 'birth_place' => $birth_place, 'father_firstname' => $father_firstname, 'father_lastname' => $father_lastname, 'father_birthdate' => $father_birthdate, 'mother_firstname' => $mother_firstname, 'mother_lastname' => $mother_lastname, 'mother_birthdate' => $mother_birthdate, 'spouse_firstname' => $spouse_firstname, 'spouse_lastname' => $spouse_lastname, 'spouse_birthdate' => $spouse_birthdate, 'wedding_date' => $wedding_date, 
                                    'wedding_place' => $wedding_place, 
                                    'person_lastname_contact'=>$person_lastname_contact,
                                    'person_firstname_contact'=>$person_firstname_contact,
                                    'person_contact_birthdate'=>$person_contact_birthdate, 
                                    'person_contact_number_phone'=>$person_contact_number_phone,
                                    'attachments' => $finalarr]], ]);

                        }else{

                        $response1 = $client1->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/passport/application', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['request' => ['session_id' => $session_id, 'login' => $dmd->email, 'email' => $emailRdv1, 'firstname' => $firstname, 'lastname' => $lastname, 'phone_number' => $phone_number, 'gender' => $gender, 'height' => $height, 'job' => $job, 'particular_signs' => $particular_signs, 'old_passport_id' => $old_passport_id ?? '', 'id_card_type' => $id_card_type, 'id_card_number' => $id_card_number, 'country_code' => $country_code, 'district' => $district, 'nationality' => $nationality, 'marital_status' => $marital_status, 'passport_type' => $meeting_type, 'birth_country_code' => $birth_country_code, 'region' => $region, 'department' => $department, 'city' => $city, 'township' => $township, 'street' => $street, 'postal_box' => $postal_box, 'birthdate' => $birthdate, 'birth_place' => $birth_place, 'father_firstname' => $father_firstname, 'father_lastname' => $father_lastname, 'father_birthdate' => $father_birthdate, 'mother_firstname' => $mother_firstname, 'mother_lastname' => $mother_lastname, 'mother_birthdate' => $mother_birthdate, 'spouse_firstname' => $spouse_firstname, 'spouse_lastname' => $spouse_lastname, 'spouse_birthdate' => $spouse_birthdate, 'wedding_date' => $wedding_date, 
                            'wedding_place' => $wedding_place, 
                            'attachments' => $finalarr]], ]);
                     }



                        $response_api1 = json_decode($response1->getBody() , true);

                    }

                    Pp_req_step_data::where([['user_login', '=', Session::get('email') ], ['status', '=', 0], ])
                        ->update(['status' => 1]);
                    //cloture de l'enregistrement des etape
                    Pp_req_step_params::where([['userlogin', '=', Session::get('email') ], ['status', '=', 0], ])
                        ->update(['status' => 1]);

                    Session::forget('current_step');
                }
                else
                {

                    
                    log::info('transactionid ' . $transaction_id1);

                    $client0 = new Client;
                    $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/cancel_passport_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['transaction_id' => $transaction_id1, ]], ]);

                    $response_api0 = json_decode($response0->getBody() , true);

                }
            }

        }

    }

    public function get_afterpaymentpasseportci(Request $request)
    {

        // return view('get_after_payment');
        $token = new TokenAuthenticationHelper();
        $returnedToken = $token->GetAuthenticationToken();

        $rdvCodeV = '';
        $status_id = 0;
        $order_id_ = $request->order_id;
        $status_id_ = $request->status_id;
        $transaction_amount_ = $request->transaction_amount;

        $location_address = "";
        $meeting_code = "";
        $desired_date = "";
        $time_value = "";
        $time_code = "";
        $statut_transact = 0;

        if (substr($order_id_, 0, 3) === "rdv")
        {
            $mustpay = 0;
            if ($status_id_ == '1')
            {
                # code...
                $statut_transact = 1;
                //Alert::success('Votre Rendez vous a été modifié avec succès')->persistent('Fermer');
                $find_rdv = Modif_rdv::where([['order_id', '=', $order_id_], ])->get();

                if ($find_rdv->count() == 1)
                {
                    $find_rdv = $find_rdv->toArray();
                    $location_address = $find_rdv[0]["location_address"];
                    $meeting_code = $find_rdv[0]["meeting_code"];
                    $desired_date = $find_rdv[0]["desired_date"];
                    $time_value = $find_rdv[0]["time_value"];
                    $time_code = $find_rdv[0]["time_code"];
                }

                return view('get_after_paymentRdv', compact('meeting_code', 'desired_date', 'time_value', 'time_code', 'location_address', 'mustpay', 'statut_transact'));
            }
            else
            {
                $statut_transact = 2;
                $find_rdv = Modif_rdv::where([['order_id', '=', $order_id_], ])->get();

                if ($find_rdv->count() == 1)
                {
                    $find_rdv = $find_rdv->toArray();

                    $location_address = $find_rdv[0]["location_address"];
                    $meeting_code = $find_rdv[0]["meeting_code"];
                    $desired_date = $find_rdv[0]["desired_date"];
                    $time_value = $find_rdv[0]["time_value"];
                    $time_code = $find_rdv[0]["time_code"];
                }
                return view('get_after_paymentRdv', compact('meeting_code', 'desired_date', 'time_value', 'time_code', 'location_address', 'mustpay', 'statut_transact'));
            }

        }
        else
        {
            //$order_id='OXQdhbTRF3fJOsfZ';
            $dmd = Demande::select('*')->where('order_id', $_GET['order_id'])->first();

            $order_id = isset($dmd->order_id) ? $dmd->order_id : null;
            $status_id = isset($dmd->status_id) ? $dmd->status_id : null;
            $rdvCodeV = isset($dmd->meeting_code) ? $dmd->meeting_code : null;
            $email_demandeur = isset($dmd->email_demandeur) ? $dmd->email_demandeur : null;
            $montant_enreg = $dmd->montant;
            $fraude = 0;
            // dd($status_id);
            if (!empty(session('failed_rdvVal')))
            {

                foreach (session('failed_rdvVal') as $value)
                {
                    $modifRdv = $value[0]['failed_rdv'];
                }
            }

            if ($order_id)
            {

                if ($status_id == 1)
                {
                    if (isset($modifRdv))
                    {

                        // Alert::success("L'initiation de votre demande de RDV a été pris en compte!
                        // Un Email vous a été transmis avec les détails et le reçu de la transaction.")->persistent('Fermer');
                        

                        
                    }
                    else
                    {

                    }

                    if ($transaction_amount_ == $montant_enreg)
                    {
                        // code...
                        //cloture de l'enregistrement des etape
                        Pp_req_step_data::where([['user_login', '=', Session::get('email') ], ['status', '=', 0], ])->update(['status' => 1]);
                        //cloture de l'enregistrement des etape
                        Pp_req_step_params::where([['userlogin', '=', Session::get('email') ], ['status', '=', 0], ])
                            ->update(['status' => 1]);

                        Session::forget('current_step');
                        $fraude = 0;

                    }
                    else $fraude = 1;

                }
            }

            return view('get_after_payment', compact('rdvCodeV', 'status_id', 'fraude'));
        }

    }

    public function fixpayment_passeport_ci($from, $to)
    {

        $convert_from = strtotime($from);
        $convert_to = strtotime($to);

        // dd($to);
        

        $formatted_from = date('Y-m-d H:i:s', $convert_from);
        $formatted_to = date('Y-m-d H:i:s', $convert_to);
        // dd($formatted_to);
        

        
        

        $dmd = DB::table('demandes')->where([['status', '=', '1'], ['status_id', '=', '1'], ['meeting_type', '<>', 'passport_foreign'], ])
            ->whereBetween('created_at', [$formatted_from, $formatted_to])->orderBy('id', 'desc')
            ->get();

        if ($dmd->count()>=1) {
            // code...
        
            foreach ($dmd as $dmd_element)
            {
                // code...
                

                $session_id = $dmd_element->session_id;
                $payment_ref = $transaction_id_;
                $loginRdv = $dmd_element->civility;
                $email = $dmd_element->email;
                $phone_numberRdv = $dmd_element->phone_number;
                $addressRdv = $dmd_element->location_address;
                $libelle_adress_rdv = $dmd->address;
                $location_code = $dmd_element->location_code;
                $time_value = $dmd_element->time_value;
                $time_code = $dmd_element->time_code;
                $date_desired = $dmd_element->date_desired;
                $lastname = $dmd_element->lastname;
                $firstname = $dmd_element->firstname;

                // $meeting_type = "passport_ci";
                $meeting_type = $dmd_element->meeting_type;

                $transaction_id1 = $dmd_element->transaction_id1;
                $session_id = $dmd_element->session_id;
                $checkciv = $dmd_element->civility;

                $rdvCodeV = '';
                $login = $dmd_element->email;
                $email = $dmd_element->email;
                $civilite = $checkciv;
                //$civilite="M";
                $emailRdv1 = $dmd_element->loginRdv;
                $phone_number = $dmd_element->phone_number;
                $gender = $dmd_element->gender;
                $height = $dmd_element->height;
                $job = str_replace('-', ' ', $dmd_element->job); //$dmd_element->job;
                //$marital_status=$dmd_element->marital_status; a definir en base et input
                $particular_signs = $dmd_element->particular_signs;
                $old_passport_id = $dmd_element->old_passport_id ?? '';
                $id_card_type = $dmd_element->id_card_type;
                $id_card_number = $dmd_element->id_card_number;
                $marital_status = $dmd_element->marital_status;

                $nationality = $dmd_element->nationality;
                $country_code = $dmd_element->country_code;
                $birth_country_code = $dmd_element->birth_country_code;
                $district = $dmd_element->district;

                $region = $dmd_element->region;
                $department = $dmd_element->department;
                $city = $dmd_element->city;
                $township = $dmd_element->township;
                $street = $dmd_element->street;
                $postal_box = $dmd_element->postal_box;
                $birthdate = $dmd_element->birthday;
                $birth_place = str_replace('-', ' ', $dmd_element->birthday_place); // $dmd_element->birthday_place;
                $father_firstname = $dmd_element->father_firstname;
                $father_lastname = $dmd_element->father_lastname;
                $father_birthdate = $dmd_element->father_birthday;
                $mother_firstname = $dmd_element->mother_firstname;
                $mother_lastname = $dmd_element->mother_lastname;
                $mother_birthdate = $dmd_element->mother_birthday;
                $spouse_firstname = $dmd_element->spouse_firstname;
                $spouse_lastname = $dmd_element->spouse_lastname;
                $spouse_birthdate = $dmd_element->spouse_birthday;
                $wedding_date = $dmd_element->wedding_date;
                $wedding_place = $dmd_element->wedding_place;

                //fin traitement des données pour les formulaires enrollement
                // if ($status_id_ == 1){
                //Confirmation Passeport frais
                $client = new Client();
                $response = $client->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/passport_payment/confirm', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['order_id' => $dmd_element->transaction_id1, 'transaction_id' => $payment_ref, 'wallet' => $wallet_, 'ref_momo' => $ref_momo_, 'currency' => $currency_]], ]);
                $response_api = json_decode($response->getBody() , true);

                
                //Confirmation RDV frais + Enrol
                $client0 = new Client();
                $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civilite, //civilite de la personne connecté
                'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $emailRdv1, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv,'libelle_adress_rdv' => $libelle_adress_rdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'transaction_id' => $transaction_id1, 'date_desired' => $date_desired, 'currency' => $currency_]], ]);
                $response_api0 = json_decode($response0->getBody() , true);

                //Confirmation Enrollement
                $client1 = new Client();

                $finalarr = array();
                $finalextr_naiss = $dmd_element->extr_naiss;
                $finalcni_ai = $dmd_element->cni_ai;
                $finalphotocni_part = $dmd_element->photocni_part;
                $finalcert_nat = $dmd_element->cert_nat;
                $finalext_mar = $dmd_element->ext_mar;
                $finalaut_parent = $dmd_element->aut_parent;
                $email_demandeur = $dmd_element->email_demandeur;
                $phone_demandeur = $dmd_element->phone_demandeur;

                // reperftoire des fichiers
                $find_paramsfolder = Pp_req_step_params::where([['userlogin', '=', $email_demandeur],
                // ['status', '=', 1],
                ])->orderBy('id', 'desc')
                    ->limit(1)
                    ->get()
                    ->toArray();
                $folderId = $find_paramsfolder[0]['idEnr1'];

                $directoryname = $phone_demandeur . $folderId;

                if ($finalextr_naiss != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalextr_naiss);
                    $en_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalextr_naiss);
                    $en_ext = $extension_array[1];
                    $en_array = array(
                        'en_ext' => $en_ext,
                        'en_code' => $en_code
                    );
                    $finalarr[] = $en_array;
                }

                if ($finalcni_ai != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalcni_ai);
                    $cni_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalcni_ai);
                    $cni_ext = $extension_array[1];
                    $cni_array = array(
                        'cni_ext' => $cni_ext,
                        'cni_code' => $cni_code
                    );
                    $finalarr[] = $cni_array;
                }

                if ($finalphotocni_part != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalphotocni_part);
                    $cnipa_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalphotocni_part);
                    $cnipa_ext = $extension_array[1];
                    $cnipa_array = array(
                        'cnipa_ext' => $cnipa_ext,
                        'cnipa_code' => $cnipa_code
                    );
                    $finalarr[] = $cnipa_array;
                }

                if ($finalcert_nat != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalcert_nat);
                    $cn_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalcert_nat);
                    $cn_ext = $extension_array[1];
                    $cn_array = array(
                        'cn_ext' => $cn_ext,
                        'cn_code' => $cn_code
                    );
                    $finalarr[] = $cn_array;
                }

                if ($finalext_mar != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalext_mar);
                    $eam_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalext_mar);
                    $eam_ext = $extension_array[1];
                    $eam_array = array(
                        'eam_ext' => $eam_ext,
                        'eam_code' => $eam_code
                    );
                    $finalarr[] = $eam_array;
                }

                if ($finalaut_parent != null)
                {
                    # code...
                    $filepath = public_path('images/' . $directoryname . '/' . $finalaut_parent);
                    $apl_code = base64_encode(File::get($filepath));

                    $extension_array = explode('.', $finalaut_parent);
                    $apl_ext = $extension_array[1];
                    $apl_array = array(
                        'apl_ext' => $apl_ext,
                        'apl_code' => $apl_code
                    );
                    $finalarr[] = $apl_array;
                }

                $a = array(
                    'request' => ['session_id' => $session_id,
                    'login' => $dmd_element->email,
                    'email' => $emailRdv1,
                    'firstname' => $firstname,
                    'lastname' => $lastname,
                    'phone_number' => $phone_number,
                    'gender' => $gender,
                    'height' => $height,
                    'job' => $job,
                    'particular_signs' => $particular_signs,
                    'old_passport_id' => $old_passport_id ?? '',
                    'id_card_type' => $id_card_type,
                    'id_card_number' => $id_card_number,
                    'country_code' => $country_code,
                    'district' => $district,
                    'nationality' => $nationality,
                    'marital_status' => $marital_status,
                    'passport_type' => $meeting_type,
                    'birth_country_code' => $birth_country_code,
                    'region' => $region,
                    'department' => $department,
                    'city' => $city,
                    'township' => $township,
                    'street' => $street,
                    'postal_box' => $postal_box,
                    'birthdate' => $birthdate,
                    'birth_place' => $birth_place,
                    'father_firstname' => $father_firstname,
                    'father_lastname' => $father_lastname,
                    'father_birthdate' => $father_birthdate,
                    'mother_firstname' => $mother_firstname,
                    'mother_lastname' => $mother_lastname,
                    'mother_birthdate' => $mother_birthdate,
                    'spouse_firstname' => $spouse_firstname,
                    'spouse_lastname' => $spouse_lastname,
                    'spouse_birthdate' => $spouse_birthdate,
                    'wedding_date' => $wedding_date,
                    'wedding_place' => $wedding_place,
                    'attachments' => $finalarr]
                );

                Log::info(json_encode($a));

                $response1 = $client1->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/passport/application', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['request' => ['session_id' => $session_id, 'login' => $dmd_element->email, 'email' => $emailRdv1, 'firstname' => $firstname, 'lastname' => $lastname, 'phone_number' => $phone_number, 'gender' => $gender, 'height' => $height, 'job' => $job, 'particular_signs' => $particular_signs, 'old_passport_id' => $old_passport_id ?? '', 'id_card_type' => $id_card_type, 'id_card_number' => $id_card_number, 'country_code' => $country_code, 'district' => $district, 'nationality' => $nationality, 'marital_status' => $marital_status, 'passport_type' => $meeting_type, 'birth_country_code' => $birth_country_code, 'region' => $region, 'department' => $department, 'city' => $city, 'township' => $township, 'street' => $street, 'postal_box' => $postal_box, 'birthdate' => $birthdate, 'birth_place' => $birth_place, 'father_firstname' => $father_firstname, 'father_lastname' => $father_lastname, 'father_birthdate' => $father_birthdate, 'mother_firstname' => $mother_firstname, 'mother_lastname' => $mother_lastname, 'mother_birthdate' => $mother_birthdate, 'spouse_firstname' => $spouse_firstname, 'spouse_lastname' => $spouse_lastname, 'spouse_birthdate' => $spouse_birthdate, 'wedding_date' => $wedding_date, 'wedding_place' => $wedding_place, 'attachments' => $finalarr]], ]);
                $response_api1 = json_decode($response1->getBody() , true);

                 return $response_api0;

            }

        }else
        // code...
        return 'aucune donnee retrouvée';

        
        

        
    }



    public function fixpayment_passeport_ci_meeting($email, $session_id, $payment_ref)
    {

        // $session_id = strtotime($session_id);
        // $email = strtotime($to);

        // dd($to);
        

        // $formatted_from = date('Y-m-d H:i:s', $convert_from);
        // $formatted_to = date('Y-m-d H:i:s', $convert_to);
        // dd($formatted_to);


        $token = new TokenAuthenticationHelper();
        $returnedToken = $token->GetAuthenticationToken();
        $currency_ ='XOF';
        

        
        

        $dmd = DB::table('demandes')->where([
            ['status', '=', '1'],
            ['session_id', '=', $session_id],
            ['email', '=', $email] 
           ])
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();


      if ($dmd->count()>=1) {
    
        
        foreach ($dmd as $dmd_element)
        {
            // code...
            

            $session_id = $dmd_element->session_id;
            // $payment_ref = $transaction_id_;
            $loginRdv = $dmd_element->civility;
            $email = $dmd_element->email;
            $phone_numberRdv = $dmd_element->phone_number;
            $addressRdv = $dmd_element->location_address;
            // $libelle_adress_rdv = $dmd->address;
            $location_code = $dmd_element->location_code;
            $time_value = $dmd_element->time_value;
            $time_code = $dmd_element->time_code;
            $date_desired = $dmd_element->date_desired;
            $lastname = $dmd_element->lastname;
            $firstname = $dmd_element->firstname;

            // $meeting_type = "passport_ci";
            $meeting_type = $dmd_element->meeting_type;

            $transaction_id1 = $dmd_element->transaction_id1;
            $session_id = $dmd_element->session_id;
            $checkciv = $dmd_element->civility;

            $rdvCodeV = '';
            $login = $dmd_element->email;
            $email = $dmd_element->email;
            $civilite = $checkciv;
            //$civilite="M";
            $emailRdv1 = $dmd_element->loginRdv;
            $phone_number = $dmd_element->phone_number;
            $gender = $dmd_element->gender;
            $height = $dmd_element->height;
            $job = str_replace('-', ' ', $dmd_element->job); //$dmd_element->job;
            //$marital_status=$dmd_element->marital_status; a definir en base et input
            $particular_signs = $dmd_element->particular_signs;
            $old_passport_id = $dmd_element->old_passport_id ?? '';
            $id_card_type = $dmd_element->id_card_type;
            $id_card_number = $dmd_element->id_card_number;
            $marital_status = $dmd_element->marital_status;

            $nationality = $dmd_element->nationality;
            $country_code = $dmd_element->country_code;
            $birth_country_code = $dmd_element->birth_country_code;
            $district = $dmd_element->district;

            $region = $dmd_element->region;
            $department = $dmd_element->department;
            $city = $dmd_element->city;
            $township = $dmd_element->township;
            $street = $dmd_element->street;
            $postal_box = $dmd_element->postal_box;
            $birthdate = $dmd_element->birthday;
            $birth_place = str_replace('-', ' ', $dmd_element->birthday_place); // $dmd_element->birthday_place;
            $father_firstname = $dmd_element->father_firstname;
            $father_lastname = $dmd_element->father_lastname;
            $father_birthdate = $dmd_element->father_birthday;
            $mother_firstname = $dmd_element->mother_firstname;
            $mother_lastname = $dmd_element->mother_lastname;
            $mother_birthdate = $dmd_element->mother_birthday;
            $spouse_firstname = $dmd_element->spouse_firstname;
            $spouse_lastname = $dmd_element->spouse_lastname;
            $spouse_birthdate = $dmd_element->spouse_birthday;
            $wedding_date = $dmd_element->wedding_date;
            $wedding_place = $dmd_element->wedding_place;

            

            
            //Confirmation RDV frais + Enrol
            $client0 = new Client();
            $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civilite, //civilite de la personne connecté
            'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $emailRdv1, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'transaction_id' => $transaction_id1, 'date_desired' => $date_desired, 'currency' => $currency_]], ]);
            $response_api0 = json_decode($response0->getBody() , true);

            // return 0;
            return $response_api0;

            

            

        }
    }else
     return 'ce element nexiste pas en base';

        
        

        
    }


     public function fixpayment_passeport_diasp_meeting($email, $session_id, $payment_ref)
    {

        // $session_id = strtotime($session_id);
        // $email = strtotime($to);

        // dd($to);
        

        // $formatted_from = date('Y-m-d H:i:s', $convert_from);
        // $formatted_to = date('Y-m-d H:i:s', $convert_to);
        // dd($formatted_to);


        $token = new TokenAuthenticationHelper();
        $returnedToken = $token->GetAuthenticationToken();
        $currency_ ='EUR';
        

        
        

        $dmd = DB::table('demandes')->where([
            ['status', '=', '1'],
            ['session_id', '=', $session_id],
            ['email', '=', $email] 
           ])
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get();


      if ($dmd->count()>=1) {
    
        
        foreach ($dmd as $dmd_element)
        {
            // code...
            

            $session_id = $dmd_element->session_id;
            // $payment_ref = $transaction_id_;
            $loginRdv = $dmd_element->civility;
            $email = $dmd_element->email;
            $phone_numberRdv = $dmd_element->phone_number;
            $addressRdv = $dmd_element->location_address;
            // $libelle_adress_rdv = $dmd->address;
            $location_code = $dmd_element->location_code;
            $time_value = $dmd_element->time_value;
            $time_code = $dmd_element->time_code;
            $date_desired = $dmd_element->date_desired;
            $lastname = $dmd_element->lastname;
            $firstname = $dmd_element->firstname;

            // $meeting_type = "passport_ci";
            $meeting_type = $dmd_element->meeting_type;

            $transaction_id1 = $dmd_element->transaction_id1;
            $session_id = $dmd_element->session_id;
            $checkciv = $dmd_element->civility;

            $rdvCodeV = '';
            $login = $dmd_element->email;
            $email = $dmd_element->email;
            $civilite = $checkciv;
            //$civilite="M";
            $emailRdv1 = $dmd_element->loginRdv;
            $phone_number = $dmd_element->phone_number;
            $gender = $dmd_element->gender;
            $height = $dmd_element->height;
            $job = str_replace('-', ' ', $dmd_element->job); //$dmd_element->job;
            //$marital_status=$dmd_element->marital_status; a definir en base et input
            $particular_signs = $dmd_element->particular_signs;
            $old_passport_id = $dmd_element->old_passport_id ?? '';
            $id_card_type = $dmd_element->id_card_type;
            $id_card_number = $dmd_element->id_card_number;
            $marital_status = $dmd_element->marital_status;

            $nationality = $dmd_element->nationality;
            $country_code = $dmd_element->country_code;
            $birth_country_code = $dmd_element->birth_country_code;
            $district = $dmd_element->district;

            $region = $dmd_element->region;
            $department = $dmd_element->department;
            $city = $dmd_element->city;
            $township = $dmd_element->township;
            $street = $dmd_element->street;
            $postal_box = $dmd_element->postal_box;
            $birthdate = $dmd_element->birthday;
            $birth_place = str_replace('-', ' ', $dmd_element->birthday_place); // $dmd_element->birthday_place;
            $father_firstname = $dmd_element->father_firstname;
            $father_lastname = $dmd_element->father_lastname;
            $father_birthdate = $dmd_element->father_birthday;
            $mother_firstname = $dmd_element->mother_firstname;
            $mother_lastname = $dmd_element->mother_lastname;
            $mother_birthdate = $dmd_element->mother_birthday;
            $spouse_firstname = $dmd_element->spouse_firstname;
            $spouse_lastname = $dmd_element->spouse_lastname;
            $spouse_birthdate = $dmd_element->spouse_birthday;
            $wedding_date = $dmd_element->wedding_date;
            $wedding_place = $dmd_element->wedding_place;

            

            
            //Confirmation RDV frais + Enrol
            $client0 = new Client();
            $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civilite, //civilite de la personne connecté
            'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $emailRdv1, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'transaction_id' => $transaction_id1, 'date_desired' => $date_desired, 'currency' => $currency_]], ]);
            $response_api0 = json_decode($response0->getBody() , true);

            // return 0;
            return $response_api0;

            

            

        }
    }else
     return 'ce element nexiste pas en base';

        
        

        
    }









     public function fixpayment_passeport_diasp($from, $to)
    {


        // de : 2023-02-15 17:01:21.200697
        // A : 2023-02-16 12:21:00.341594

        $currency_ ='EUR';
        $token = new TokenAuthenticationHelper();
        $returnedToken = $token->GetAuthenticationToken();

        $convert_from = strtotime($from);
        $convert_to = strtotime($to);

        // dd($to);
        

        $formatted_from = date('Y-m-d H:i:s', $convert_from);
        $formatted_to = date('Y-m-d H:i:s', $convert_to);
        

        // dd($formatted_to);
        

        
        

        $dmd = DB::table('demandes')->where([ ['status', '=', '1'], ['meeting_type', '=', 'passport_foreign'], ])
            ->whereBetween('created_at', [$formatted_from, $formatted_to])->orderBy('id', 'desc')
            ->get();

             // dd($dmd);

    
    if ($dmd->count()>=1) {

            // code...

        foreach ($dmd as $dmd_element)
        {
            // code...
            

            $session_id = $dmd_element->session_id;
            $payment_ref = $dmd_element->transaction_id;
            $loginRdv = $dmd_element->civility;
            $email = $dmd_element->email;
            $phone_numberRdv = $dmd_element->phone_number;
            $addressRdv = $dmd_element->location_address;
            // $libelle_adress_rdv = $dmd->address;
            $location_code = $dmd_element->location_code;
            $time_value = $dmd_element->time_value;
            $time_code = $dmd_element->time_code;
            $date_desired = $dmd_element->date_desired;
            $lastname = $dmd_element->lastname;
            $firstname = $dmd_element->firstname;

            // $meeting_type = "passport_ci";
            $meeting_type = $dmd_element->meeting_type;

            $transaction_id1 = $dmd_element->transaction_id1;
            $session_id = $dmd_element->session_id;
            $checkciv = $dmd_element->civility;

            $rdvCodeV = '';
            $login = $dmd_element->email;
            $email = $dmd_element->email;
            $civilite = $checkciv;
            //$civilite="M";
            $emailRdv1 = $dmd_element->loginRdv;
            $phone_number = $dmd_element->phone_number;
            $gender = $dmd_element->gender;
            $height = $dmd_element->height;
            $job = str_replace('-', ' ', $dmd_element->job); //$dmd_element->job;
            //$marital_status=$dmd_element->marital_status; a definir en base et input
            $particular_signs = $dmd_element->particular_signs;
            $old_passport_id = $dmd_element->old_passport_id ?? '';
            $id_card_type = $dmd_element->id_card_type;
            $id_card_number = $dmd_element->id_card_number;
            $marital_status = $dmd_element->marital_status;

            $nationality = $dmd_element->nationality;
            $country_code = $dmd_element->country_code;
            $birth_country_code = $dmd_element->birth_country_code;
            $district = $dmd_element->district;

            $region = $dmd_element->region;
            $department = $dmd_element->department;
            $city = $dmd_element->city;
            $township = $dmd_element->township;
            $street = $dmd_element->street;
            $postal_box = $dmd_element->postal_box;
            $birthdate = $dmd_element->birthday;
            $birth_place = str_replace('-', ' ', $dmd_element->birthday_place); // $dmd_element->birthday_place;
            $father_firstname = $dmd_element->father_firstname;
            $father_lastname = $dmd_element->father_lastname;
            $father_birthdate = $dmd_element->father_birthday;
            $mother_firstname = $dmd_element->mother_firstname;
            $mother_lastname = $dmd_element->mother_lastname;
            $mother_birthdate = $dmd_element->mother_birthday;
            $spouse_firstname = $dmd_element->spouse_firstname;
            $spouse_lastname = $dmd_element->spouse_lastname;
            $spouse_birthdate = $dmd_element->spouse_birthday;
            $wedding_date = $dmd_element->wedding_date;
            $wedding_place = $dmd_element->wedding_place;

            //fin traitement des données pour les formulaires enrollement
            // if ($status_id_ == 1){
            //Confirmation Passeport frais
            // $client = new Client();
            // $response = $client->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/passport_payment/confirm', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['order_id' => $dmd_element->transaction_id1, 'transaction_id' => $payment_ref, 'wallet' => $wallet_, 'ref_momo' => $ref_momo_, 'currency' => $currency_]], ]);
            // $response_api = json_decode($response->getBody() , true);

            
            //Confirmation RDV frais + Enrol
            $client0 = new Client();
            $response0 = $client0->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['payment' => ['session_id' => $session_id, 'payment_ref' => $payment_ref, 'login' => $email, 'civility' => $civilite, //civilite de la personne connecté
            'meeting_type' => $meeting_type, 'lastname' => $lastname, 'firstname' => $firstname, 'email' => $emailRdv1, 'phone_number' => $phone_numberRdv, 'address' => $addressRdv, 'location_code' => $location_code, 'time_value' => $time_value, 'time_code' => $time_code, 'location_address' => $addressRdv, 'transaction_id' => $transaction_id1, 'date_desired' => $date_desired, 'currency' => $currency_]], ]);
            $response_api0 = json_decode($response0->getBody() , true);



            //dd(config('AppConfig.api_passerelle') . 'api/snedai_hub/payment/meeting_fees');
            // dd( $response_api0);

            // //Confirmation Enrollement
            // $client1 = new Client();

            $finalarr = array();
            $finalextr_naiss = $dmd_element->extr_naiss;
            $finalcni_ai = $dmd_element->cni_ai;
            $finalphotocni_part = $dmd_element->photocni_part;
            $finalcert_nat = $dmd_element->cert_nat;
            $finalext_mar = $dmd_element->ext_mar;
            $finalaut_parent = $dmd_element->aut_parent;
            $email_demandeur = $dmd_element->email_demandeur;
            $phone_demandeur = $dmd_element->phone_demandeur;

            // reperftoire des fichiers
            $find_paramsfolder = Pp_req_step_params::where([['userlogin', '=', $email_demandeur],
            // ['status', '=', 1],
            ])->orderBy('id', 'desc')
                ->limit(1)
                ->get()
                ->toArray();
            $folderId = $find_paramsfolder[0]['idEnr1'];

            $directoryname = $phone_demandeur . $folderId;

            if ($finalextr_naiss != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalextr_naiss);
                $en_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalextr_naiss);
                $en_ext = $extension_array[1];
                $en_array = array(
                    'en_ext' => $en_ext,
                    'en_code' => $en_code
                );
                $finalarr[] = $en_array;
            }

            if ($finalcni_ai != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalcni_ai);
                $cni_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalcni_ai);
                $cni_ext = $extension_array[1];
                $cni_array = array(
                    'cni_ext' => $cni_ext,
                    'cni_code' => $cni_code
                );
                $finalarr[] = $cni_array;
            }

            if ($finalphotocni_part != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalphotocni_part);
                $cnipa_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalphotocni_part);
                $cnipa_ext = $extension_array[1];
                $cnipa_array = array(
                    'cnipa_ext' => $cnipa_ext,
                    'cnipa_code' => $cnipa_code
                );
                $finalarr[] = $cnipa_array;
            }

            if ($finalcert_nat != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalcert_nat);
                $cn_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalcert_nat);
                $cn_ext = $extension_array[1];
                $cn_array = array(
                    'cn_ext' => $cn_ext,
                    'cn_code' => $cn_code
                );
                $finalarr[] = $cn_array;
            }

            if ($finalext_mar != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalext_mar);
                $eam_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalext_mar);
                $eam_ext = $extension_array[1];
                $eam_array = array(
                    'eam_ext' => $eam_ext,
                    'eam_code' => $eam_code
                );
                $finalarr[] = $eam_array;
            }

            if ($finalaut_parent != null)
            {
                # code...
                $filepath = public_path('images/' . $directoryname . '/' . $finalaut_parent);
                $apl_code = base64_encode(File::get($filepath));

                $extension_array = explode('.', $finalaut_parent);
                $apl_ext = $extension_array[1];
                $apl_array = array(
                    'apl_ext' => $apl_ext,
                    'apl_code' => $apl_code
                );
                $finalarr[] = $apl_array;
            }

            $a = array(
                'request' => ['session_id' => $session_id,
                'login' => $dmd_element->email,
                'email' => $emailRdv1,
                'firstname' => $firstname,
                'lastname' => $lastname,
                'phone_number' => $phone_number,
                'gender' => $gender,
                'height' => $height,
                'job' => $job,
                'particular_signs' => $particular_signs,
                'old_passport_id' => $old_passport_id ?? '',
                'id_card_type' => $id_card_type,
                'id_card_number' => $id_card_number,
                'country_code' => $country_code,
                'district' => $district,
                'nationality' => $nationality,
                'marital_status' => $marital_status,
                'passport_type' => $meeting_type,
                'birth_country_code' => $birth_country_code,
                'region' => $region,
                'department' => $department,
                'city' => $city,
                'township' => $township,
                'street' => $street,
                'postal_box' => $postal_box,
                'birthdate' => $birthdate,
                'birth_place' => $birth_place,
                'father_firstname' => $father_firstname,
                'father_lastname' => $father_lastname,
                'father_birthdate' => $father_birthdate,
                'mother_firstname' => $mother_firstname,
                'mother_lastname' => $mother_lastname,
                'mother_birthdate' => $mother_birthdate,
                'spouse_firstname' => $spouse_firstname,
                'spouse_lastname' => $spouse_lastname,
                'spouse_birthdate' => $spouse_birthdate,
                'wedding_date' => $wedding_date,
                'wedding_place' => $wedding_place,
                'attachments' => $finalarr]
            );

            // Log::info(json_encode($a));
            $client1 = new Client();
            $response1 = $client1->request('POST', config('AppConfig.api_passerelle') . 'api/snedai_hub/passport/application', ['headers' => ['Authorization' => 'Bearer ' . $returnedToken, ], 'json' => ['request' => ['session_id' => $session_id, 'login' => $dmd_element->email, 'email' => $emailRdv1, 'firstname' => $firstname, 'lastname' => $lastname, 'phone_number' => $phone_number, 'gender' => $gender, 'height' => $height, 'job' => $job, 'particular_signs' => $particular_signs, 'old_passport_id' => $old_passport_id ?? '', 'id_card_type' => $id_card_type, 'id_card_number' => $id_card_number, 'country_code' => $country_code, 'district' => $district, 'nationality' => $nationality, 'marital_status' => $marital_status, 'passport_type' => $meeting_type, 'birth_country_code' => $birth_country_code, 'region' => $region, 'department' => $department, 'city' => $city, 'township' => $township, 'street' => $street, 'postal_box' => $postal_box, 'birthdate' => $birthdate, 'birth_place' => $birth_place, 'father_firstname' => $father_firstname, 'father_lastname' => $father_lastname, 'father_birthdate' => $father_birthdate, 'mother_firstname' => $mother_firstname, 'mother_lastname' => $mother_lastname, 'mother_birthdate' => $mother_birthdate, 'spouse_firstname' => $spouse_firstname, 'spouse_lastname' => $spouse_lastname, 'spouse_birthdate' => $spouse_birthdate, 'wedding_date' => $wedding_date, 'wedding_place' => $wedding_place, 'attachments' => $finalarr]], ]);
            $response_api1 = json_decode($response1->getBody() , true);

             return $response_api1;

        }

    }else
        // code...
        return 'aucune donnee retrouvée';



        
        

        
    }

    public function getdatafrom_orderid($orderid)
    {

        $dmd = Demande::select('*')->where('order_id', $orderid)->get()
            ->toArray();
        if (count($dmd) > 0) return $dmd;
        else
        // return json_encode('{}');
        return json_encode(json_decode("{}"));

    }

}

