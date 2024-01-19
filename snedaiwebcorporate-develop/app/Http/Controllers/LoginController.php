<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;
use Session;
use TokenAuthenticationHelper;
use App\Models\Forgottenpwd;

class LoginController extends Controller
{


    // public function __contruct(){
    //   $this->middleware('auth');
    // }
    //Connexion 
    public function login(request $request){
     if (Session::has('msisdn')) {
       
        return redirect('/accueil');
      }else
    	 return view('connexion');
    }

    public function inscription(request $request){
    	 if (Session::has('msisdn')) {
        return redirect('/accueil');
      }else
    	 return view('inscription');
    }

    public function connexion(request $request){
    	  if (Session::has('msisdn')) {
        return redirect('/accueil');
      }else
    	 return view('connexion');
    }

    public function forgotten_pwd_reset (request $request){

    	 return view('mot_de_passe_oublie');
    }

    public function resetpwd_request (request $request){

    	// return view('mot_de_passe_oublie');
    	//dd($request->password);

    	$found_email=Forgottenpwd::where('token', $request->receivedtoken)
    	->select('email')
    	->get()->toArray();
    	

    	$email = $found_email[0]['email'];
    	$receivedtoken = $request->receivedtoken;


    	 $newpwd = $request->password;
    	 $token = new TokenAuthenticationHelper();
         $returnedToken  = $token->GetAuthenticationToken();

    	 $client =  new Client(); 
         $response = $client->request('POST',config('AppConfig.api_passerelle').'api/snedai_hub/password_resetting/validate', [
           'headers' => [
                'Authorization' => 'Bearer '.$returnedToken,
            ],
            'form_params' => [
                'request'=>[
                     'login'=>$email,
                     'token'=>$receivedtoken,
                     'new_password'=>$newpwd,    
                ]
            ],     
        ]);

        $response_api = json_decode($response->getBody(), true);
        // dd( $response_api);
         if( $response_api["api_code"] ==  401){
         	return $response_api["data"] ;
         }

         if( $response_api["api_code"] ==  200){
          return 'success' ;
         }

    }


    

    


}
