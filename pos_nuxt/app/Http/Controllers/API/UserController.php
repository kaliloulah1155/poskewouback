<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use DB;
use App\Services\ImageService;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        try {

            $size = 5;
            // Start building the query
           // $query = User::query();
            $query = User::join('profils', 'profils.id', '=', 'users.profil_id')
                  ->select('users.*', 'profils.id as profil_id', 'profils.libelle as profil_lib', 'profils.description as profil_description')
                ->where('profils.statut', 1);

            // Eager load parent and enfants categories
                //$query->with('profils');

            if ($request['field'] == "nom") {
                $query->where('nom', $request['type'], $request['type'] == 'like' ? '%' . $request['value'] . '%' : $request['value']);
            }
    
            if ($request['field'] == "prenoms") {
                $query->where('prenoms', $request['type'], $request['type'] == 'like' ? '%' . $request['value'] . '%' : $request['value']);
            }
            if ($request['field'] == "sexe") {
                $query->where('sexe', $request['type'], $request['type'] == 'like' ? '%' . $request['value'] . '%' : $request['value']);
            }


            if ($request['field'] == "isActive") {
                $query->where('isActive', $request['type'], $request['type'] == 'like' ? '%' . $request['value'] . '%' : $request['value']);
            }
            $size = $request->size;
            if ($request->sorters) {
                $sortField = $request->sorters[0]['field'];
                $sortDirection = $request->sorters[0]['dir'];
                $query->orderBy($sortField, $sortDirection);
            } 

            // Paginate the filtered data
            $perPage = $request->input('per_page', $size); // Default per page to 10 if not specified
            $actions = $query->paginate($perPage);

            // Add last_page, page, per_page, and total information
            $lastPage = $actions->lastPage();
            $currentPage = $actions->currentPage();
            $perPage = $actions->perPage();
            $total = $actions->total();
            // Return the paginated data with additional information
            return response()->json([
                'data' => $actions->items(),
                'last_page' => $lastPage,
                'page' => $currentPage,
                'per_page' => $perPage,
                'total' => $total,
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'message' => 'Something went wrong in UserController.index',
            ]);

        }
    }


    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        try{
           
            $user = User::join('profils', 'profils.id', '=', 'users.profil_id')
             ->select('users.*','profils.id as profil_id','profils.libelle as profil_lib','profils.description as profil_description')
             ->where('users.id',$id)
             ->where('profils.statut',1)
             ->get(); 

            if(!$user) return response()->json(['success'=>false,'message'=>"Cet utilisateur n'existe pas"], 200);
            
            return response()->json($user, 200);

        }catch(\Exception $e) {
                return response()->json([
                    'error'=>$e->getMessage(),
                    'message'=>'Something went wrong in UserController.show'
                ]);
        }
    }
    
    public function update(UpdateRequest $request, int $id)
    {
        try{

            $user = User::find($id);
            if(!$user){
                return response()->json([
                    'success'=>false,
                    'message'=>'Utilisateur avec l\'id ' . $id . ' n\'existe pas!'
                ], 200);
            }

            if($request->hasFile('image')){
               
                (new ImageService)->updateImage($user,$request,'/images/users/','update');
             }
            $user->nom = $request->nom ?? $user->nom;
            $user->prenoms = $request->prenoms ?? $user->prenoms;
            $user->telephone = $request->telephone ?? $user->telephone ;
            $user->isAdmin = $request->isAdmin ?? $user->isAdmin ;
            $user->isActive = $request->isActive ?? $user->isActive;
            $user->sexe = $request->sexe ?? $user->sexe;
            $user->email = $request->email ?? $user->email;
            $user->profil_id = $request->profil_id ?? $user->profil_id ;
            $user->updated_user = Auth::id();

            if(isset($request->password)){
                $this->validate($request, [
                    'password' => 'min:8|confirmed',
                ],
                [
                    'password.min' => "Le champ du mot de passe doit contenir au moins 6 caractères.",
                    'password.confirmed' => 'Le mot de passe ne correspond pas à la confirmation.',
                ]
            );
                $user->password = Hash::make($request->password);
            }
              
            $user->save();
            return response()->json([
                'success'=>true,
                'message'=>'Utilisateur avec l\'id ' . $id . ' a été mis à jour!'
            ], 200);

        }catch (\Exception $e) {
                return response()->json([
                    'error'=>$e->getMessage(),
                    'message'=>'Something went wrong in UserController.update'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        try {
        $record =User::where('id' , $id)->get();
        $current =Carbon::now();
        
        
        if(intval($record[0]->profil_id) !=1){
            if(count($record) >0){
                User::where('id',$id)->update([
                    'deleted_at'=>$current,
                    'deleted_user'=>Auth::id()
                ]);
                return response()->json([
                    'success'=>true,
                    'message'=>'Utilisateur avec l\'id ' . $id . ' a été supprimé!']
                ,201);
            }else{
                return response()->json([
                    'result'=>false,
                    "message"=>"Cet Utilisateur n'existe pas"
                ]);
            }
        }

         
            
        }catch (\Exception $e) {
            return response()->json([
                'error'=>$e->getMessage(),
                'message'=>'Something went wrong in UserController.destroy'
            ]);
        }

   

    }

    public function delete(int $id){
        try{
            $record =User::where('id' , $id)->get();

           
            if(count($record)){
                DB::table('users')->where('id',$id)->delete();
                return response()->json([
                    'success'=>true,
                    'message'=>'Utilisateur avec l\'id ' . $id . ' a été supprimé!']
                ,201);
             }else{
                return response()->json([
                    'result'=>false,
                    "message"=>"Cet Utilisateur n'existe pas"
                ]);
            }

        }catch (\Exception $e) {
            return response()->json([
                'error'=>$e->getMessage(),
                'message'=>'Something went wrong in UserController.delete'
            ]);
        }
    }
    
}
