<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Session;
use TokenAuthenticationHelper;
use App\Models\Forgottenpwd;
use App\Models\Ctact_pays;
use App\Models\Ctact_email;
use App\Models\Ctact_situation;
use App\Models\Ctact_site;
use App\Models\Ctact_telephonique;



class ContactsController extends Controller
{
    //Connexion 
    public function send_mail_contact(request $request){
    	$lastname = trim($request->lastname);
    	$firstname = trim($request->firstname);
      $email = trim($request->email);
      $subject = trim($request->subject);
      $msg = trim($request->message);
     /** je suis un commentaire  ibson*/

       $message = '<html>
                       <body>
                            <p> 
                              <strong>Nom et Prénoms :</strong>  '.$lastname.'  '.$firstname.'
                             </p>
                             <p> 
                                  <strong>Email :</strong>  '.$email.' 
                             </p>
                             <p>
                                  <strong>Message :</strong> '.$msg. '
                             </p>
                       </body>
                  </html>';

 

        $recepEmail=env('EMAIL_RECEPT');
        $client = new client;
        $response = $client->request('POST',env(""), [
                  'headers' => [
                       'Authorization' => 'Bearer TOKEN_HERE',
                   ],
                   'json' => [
                                'email'=> ['support@monpasseport.ci'], //systeme qui recoit le message
                                'subject'=>"SNEDAI WEB : ".$subject,
                                'body'=> $message,  //msg peut etre du Html
                   ],
               ]);
       
          $response_api = json_decode($response->getBody(), true);
         // dd($response_api);

          $response_api['status'];
          $response_api['description'];
          $status = $response_api['status'];
        
         // Log::info(json_encode($response_api));
          // Alert::success('Votre message a été envoyé avec succès')->persistent('Fermer');
           return $status;
    }


    public function send_mail_contact_new (request $request){


          $__vtrftk =   $request->__vtrftk;
          $cf_909 =     $request->cf_909;
          $cf_911 =     $request->cf_911;
          $cf_913 =     $request->cf_913;
          $publicid =     $request->publicid;
          $urlencodeenable =     $request->urlencodeenable;
          $name =     $request->name;
          $ticket_title =     $request->ticket_title;
          $cf_885 =     $request->cf_885;
          $cf_905 =     $request->cf_905;
          $cf_907 =     $request->cf_907;
          $cf_893=     $request->cf_893;
          $description=     $request->description;
          $cf_889=     $request->cf_889;
          $cf_895=  'Passeport';



          
        $client = new client;
        $response = $client->request('POST','https://crm.appinov.net/CRM/modules/Webforms/capture.php', [
                  'headers' => [
                       'Authorization' => 'Bearer TOKEN_HERE',
                   ],
                   'form_params' => [
                                '__vtrftk'=> $__vtrftk,
                                'cf_909'=> $cf_909,
                                'cf_911'=> $cf_911,
                                'cf_913'=> $cf_913,
                                'publicid'=> $publicid,
                                'urlencodeenable'=> $urlencodeenable,
                                'name'=> $name,
                                'ticket_title'=> $ticket_title,
                                'cf_885'=>$cf_885,
                                'cf_905'=> $cf_905,
                                'cf_905'=> $cf_905,
                                'cf_907'=> $cf_907,
                                'cf_895'=> $cf_895,
                                'cf_893'=> $cf_893,
                                'cf_889'=> $cf_889,
                                'description'=> $description,
                                'name'=> $request->name,
                   ],
               ]);
       
          $response_api = json_decode($response->getBody(), true);
          //dd($response_api);


          // {"success":true,"result":"ok"}

          $response_api['success'];
          $response_api['result'];
          $status = $response_api['success'];
        
         // Log::info(json_encode($response_api));
          // Alert::success('Votre message a été envoyé avec succès')->persistent('Fermer');

          if ($response_api['success']== true) {
               // code...
               return 'success';
          }
          

    }


     public function accueil(request $request){

          // $listePays= Ctact_pays::all();

          // dd(config('AppConfig.getway_auth_name'));

          $listePays= Ctact_pays::orderBy('libelle')->get();

          // orderBy('name')
     
          return view('accueil', compact('listePays'));
     }


     public function find_contact (request $request){

          $selectCountry = $request->selectCountry;

           $detailsSite = Ctact_site::with('Telephone','Situation','Emails')
           ->where('id_pays', $selectCountry)
           ->get()->toArray();

           //dd($detailsSite);

           return view('infoContact', compact('detailsSite'));

     }


     public function reclamation (request $request){

          return view('reclamation');
     }


}
