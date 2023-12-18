<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest; 
use App\Http\Requests\Auth\LogoutRequest;
use App\Http\Requests\ForgotPassword\ForgotPasswordRequest;
use App\Http\Requests\ForgotPassword\ResetPasswordRequest;
use App\Models\User;
use App\Models\Profil;
use App\Models\PasswordReset;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordResetNotification;

class AuthController extends Controller
{
   
    public function register(RegisterRequest $request)
    {
        try {
            $user=User::create([
                'nom'=>$request->nom,
                'prenoms'=>$request->prenoms,
                'telephone'=>$request->telephone,
                'email'=>$request->email,
                'sexe'=>$request->sexe ?? "M",
                'profil_id'=>$request->profil_id,     
                'password'=>Hash::make($request->password),
            ]);
            $token=$user->createToken('user_token')->plainTextToken;
                 
            return response()->json(['user'=>$user,'token'=>$token],200);

       } catch (\Exception $e) {
            return response()->json([
                'error'=>$e->getMessage(),
                'message'=>'Something went wrong in AuthController.register'
            ]);
       }
    }

    
    public function login(LoginRequest $request)
    {
        try{

            //0173832778
            //ibrahim1155@outlook.com
            $emailOrPhoneNumber=$request->login;
            $user = User::where(function($query) use ($emailOrPhoneNumber) {
                $query->where('email', $emailOrPhoneNumber)
                      ->orWhere('telephone', $emailOrPhoneNumber);
            })->first();


            $deletedRecords = User::withTrashed()
            ->whereNotNull('deleted_at')
            ->where(function($query) use ($emailOrPhoneNumber) {
                $query->where('email', $emailOrPhoneNumber)
                      ->orWhere('telephone', $emailOrPhoneNumber);
            })->first();

            if($deletedRecords){
                return response()->json([
                    'error'=>true,
                    'message'=>"Votre compte a été supprimer de la plateforme veuillez contacter l'administrateur."
                ]);
            }
           
            if(!$user){
                return response()->json([
                    'error'=>true,
                    'message'=>'Les informations de connexion sont invalides. Veuillez vérifier votre login et votre mot de passe et réessayer.'
                ]);
            }

            if($user->isActive == 0){
                return response()->json([
                    'error'=>true,
                    'message'=>"Votre compte est inactif. Veuillez contacter l'administrateur pour plus d'informations."
                ]);
            }
            
            
             if(!Hash::check($request->password,$user->password)){
                return response()->json([
                    'error'=>true,
                    'message'=>"Votre mot de passe est incorrect. Veuillez le vérifier."
                ]);
             }
             $token=$user->createToken('user_token')->plainTextToken;

             $user['profil_info']=Profil::where('id',$user->profil_id)->where('statut','=',1)->first();
             return response()->json(['user'=>$user,'token'=>$token],200);
        } catch (\Exception $e) {
            return response()->json([
                'error'=>$e->getMessage(),
                'message'=>'Something went wrong in AuthController.login'
            ]);
       }
    }

    public function logout(LogoutRequest $request){
        try {
             $user=User::findOrFail($request->user_id);
             $user->tokens()->delete();
             return response()->json(['User logged out!'],200);

        } catch (\Exception $e) {
             return response()->json([
                 'error'=>$e->getMessage(),
                 'message'=>'Something went wrong in AuthController.logout'
             ]);
        } 
     }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        //
    }
    
    
    public function forgot(ForgotPasswordRequest $request){

        $user=($query=User::query());

        $user=$user->where($query->qualifyColumn('email'),$request->email)->first();

        $resetPasswordToken=str_pad(random_int(1,9999),4,'0',STR_PAD_LEFT);

        if(!$userPassReset=PasswordReset::where('email',$user->email)->first()){

            PasswordReset::create([
                'email'=>$user->email,
                'token'=>$resetPasswordToken
            ]);
        }else{
            PasswordReset::where('email',$user->email)->update([
                'email'=>$user->email,
                'token'=>$resetPasswordToken
            ]);
        }

        //send notification 
        $user['resetPasswordToken']=$resetPasswordToken;
        $user->notify(
             
             new PasswordResetNotification($user)
        );

        return response()->json([
            'message'=>"Un code vous a été envoyé sur votre adresse email"
        ]);

    }


    public function reset(ResetPasswordRequest $request){
       
      
        
        $resetRequest=PasswordReset::where('token',$request->token)->first();

      
        if(!$resetRequest){
            return response()->json([
                'error'=>true,
                'message'=>"Votre code est incorrecte"
            ]);
        }
       
        $user=User::where('email',$resetRequest['email'])->first();

        $user->fill([
            'password'=>Hash::make($request['password'])
        ]);
        $user->save();
        //delete previous token
        $user->tokens()->delete();

       
        PasswordReset::where('token',$request->token)->delete();

        $token=$user->createToken('user_token')->plainTextToken;

        $loginResponse=[
            'user'=>$user,
            'token'=>$token
        ];
        return response()->json([
            'data'=>$loginResponse,
            'message'=>"Mot de passe réinitialisez avec succès",
            
        ],201);

    }
}
