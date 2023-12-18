<?php

use App\Http\Controllers\API\ActionController;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\CategorieController;
use App\Http\Controllers\API\MenuController;
use App\Http\Controllers\API\ProfilController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\API\PermissionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1'], function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::post('login', [AuthController::class, 'login']);
    Route::get('permissions/menu/{id}', [PermissionController::class, 'menu_profil']); // passage de l'id profil

    //Password reset
    Route::post('forgot', [AuthController::class, 'forgot']);
    Route::post('reset', [AuthController::class, 'reset']);
});

Route::middleware('auth:sanctum')->group(function () {
    Route::group(['prefix' => '/v1'], function () {
        Route::post('logout', [AuthController::class, 'logout']);

        //USER
        Route::get('users', [UserController::class, 'index']);
        Route::post('users/{id}', [UserController::class, 'update']);
        Route::delete('users/{id}', [UserController::class, 'destroy']);
        Route::delete('users/dl/{id}', [UserController::class, 'delete']);
        Route::get('users/{id}', [UserController::class, 'show']);
        //PROFIL
        Route::post('profils', [ProfilController::class, 'store']);

        Route::get('profils', [ProfilController::class, 'index']);
        Route::post('profils/{id}', [ProfilController::class, 'update']);
        Route::delete('profils/{id}', [ProfilController::class, 'destroy']);
        Route::delete('profils/dl/{id}', [ProfilController::class, 'delete']);
        Route::get('profils/{id}', [ProfilController::class, 'show']);
        //CATEGORIE
        Route::get('categories', [CategorieController::class, 'index']);
        Route::post('categories', [CategorieController::class, 'store']);
        Route::post('categories/{id}', [CategorieController::class, 'update']);
        Route::get('categories/{id}', [CategorieController::class, 'show']);
        Route::delete('categories/{id}', [CategorieController::class, 'destroy']);
        Route::delete('categories/dl/{id}', [CategorieController::class, 'delete']);
    
        //ACTION
        Route::get('actions', [ActionController::class, 'index']);
        Route::post('actions', [ActionController::class, 'store']);
        Route::post('actions/{id}', [ActionController::class, 'update']);
        Route::get('actions/{id}', [ActionController::class, 'show']);
        Route::delete('actions/{id}', [ActionController::class, 'destroy']);
        Route::delete('actions/dl/{id}', [ActionController::class, 'delete']);

        //MENU
        Route::get('menus', [MenuController::class, 'index']);
        Route::post('menus', [MenuController::class, 'store']);
        Route::post('menus/{id}', [MenuController::class, 'update']);
        Route::get('menus/{id}', [MenuController::class, 'show']);
        Route::delete('menus/{id}', [MenuController::class, 'destroy']);
        Route::delete('menus/dl/{id}', [MenuController::class, 'delete']);

        //Permissions 
        Route::post('permissions', [PermissionController::class, 'store'])->withoutMiddleware("throttle:api");
        Route::get('permissions/{id}', [PermissionController::class, 'show']); ///passage de l'id profil
        Route::delete('permissions/{id}', [PermissionController::class, 'destroy']); // passage de l'id profil
        Route::post('test_permission', [PermissionController::class, 'test_permission']);    

    });

});
