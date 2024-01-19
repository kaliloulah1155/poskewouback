<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\LoginController; 
use App\Http\Controllers\PassportRequestController;
use App\Http\Controllers\SaveAlldataPassportController;
use App\Http\Controllers\AfterPaymentController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// Route::get('login',[AdminsController::class, 'login']);
Route::get('accueil', [ContactsController::class,'accueil']);
Route::get('/', [ContactsController::class,'accueil']);
Route::get('find_contact', [ContactsController::class,'find_contact']);


Route::get('login', [ 'as' => 'login', 'uses' => 'LoginController@login']);



Route::get('inscription', 'LoginController@inscription');
Route::get('connexion', 'LoginController@connexion');
Route::get('/password/reset/user','LoginController@forgotten_pwd_reset');
Route::post('/resetpwd_request','LoginController@resetpwd_request');


Route::get('demande_passeport_resident', 'PassportRequestController@demandes');
// Route::get('demande_error', 'PassportRequestController@demandes_error');
Route::get('demande_passeport_diaspora', 'PassportRequestController@demandes_diaspora');


Route::get('modifier_rdv', 'PassportRequestController@modifier_rdv');
Route::get('modifier_rdv_diaspora', 'PassportRequestController@modifier_rdv_diaspora');
Route::any('find_department', 'PassportRequestController@find_department');
Route::any('find_ville_commune', 'PassportRequestController@find_ville_commune');
Route::any('findsite_enrollement', 'PassportRequestController@findsite_enrollement');
Route::any('findsite_enrollement_diaspora', 'PassportRequestController@findsite_enrollement_diaspora');


Route::post('PasseportCiDispo', 'PassportRequestController@PasseportCiDispo');
Route::post('PasseportDiaspoDispo', 'PassportRequestController@PasseportDiaspoDispo');



Route::get('rdv_passeport_agenda', 'PassportRequestController@rdv_passeport_agenda');
Route::get('rdv_passeport_agenda_edit_rdv', 'PassportRequestController@rdv_passeport_agenda_edit_rdv');
Route::get('rdv_passeport_agenda_edit_rdv_diasp', 'PassportRequestController@rdv_passeport_agenda_edit_rdv_diasp');
Route::get('rdv_passeport_agenda_diasp', 'PassportRequestController@rdv_passeport_agenda_diasp');


Route::post('feestopay', 'PassportRequestController@feestopay');
Route::post('feestopayDiasp', 'PassportRequestController@feestopayDiasp');
Route::post('confirmRdvSuccessCode', 'PassportRequestController@confirmRdvSuccessCode');
Route::post('cancel_reservation_ci', 'PassportRequestController@cancel_reservation_ci');
Route::post('cancel_reservation_diaspo', 'PassportRequestController@cancel_reservation_diaspo');



Route::post('save_passport_request', 'SaveAlldataPassportController@save_passport_request');
Route::post('save_passport_request_diasp', 'SaveAlldataPassportController@save_passport_request_diasp');
Route::post('save_step_one', 'SaveAlldataPassportController@save_step_one');
Route::post('save_step_two', 'SaveAlldataPassportController@save_step_two');
Route::post('save_step_three', 'SaveAlldataPassportController@save_step_three');
Route::post('save_step_four', 'SaveAlldataPassportController@save_step_four');
Route::post('save_step_five', 'SaveAlldataPassportController@save_step_five');
Route::post('save_rdv_step_one', 'SaveAlldataPassportController@save_rdv_step_one');
// Route::get('testredirect', 'SaveAlldataPassportController@testredirect');




Route::post('paiementFrais', 'AfterPaymentController@paiementFrais');
Route::get('afterpaymentpasseportci', 'AfterPaymentController@get_afterpaymentpasseportci');
Route::get('fixpayment_passeport_ci/{from}/{to}', 'AfterPaymentController@fixpayment_passeport_ci');

Route::get('fixpayment_passeport_diasp/{from}/{to}', 'AfterPaymentController@fixpayment_passeport_diasp');

Route::get('fixpayment_passeport_ci_meeting/{email}/{session_id}/{payment_ref}', 'AfterPaymentController@fixpayment_passeport_ci_meeting');


Route::get('fixpayment_passeport_diasp_meeting/{email}/{session_id}/{payment_ref}', 'AfterPaymentController@fixpayment_passeport_diasp_meeting');







Route::get('get_data_from_orderid/{orderid}', 'AfterPaymentController@getdatafrom_orderid');


Route::post('searchCoderdv', 'PassportRequestController@searchCoderdv');
Route::post('generatepdf','PdfController@Pdfgeneration');
Route::post('generatepdfdiasp','PdfController@generatepdfdiasp');





Route::get('/piece_a_fournir', function () {
    return view('piece_a_fournir');
});

Route::get('/sampling', function () {
    return view('sampling');
});


Route::get('/test', function () {
    return view('test');
});

Route::get('/piece_a_fournir_diaspora', function () {
    return view('piece_a_fournir_diaspora');
});



Route::get('/type_demande', function () {
    return view('type_demande');
});


Route::get('/type_demande_diaspora', function () {
    return view('type_demande_diaspora');
});




Route::get('/demande_passeport', function () {
    return view('resident_diaspora');
});


Route::get('/modification_rdv', function () {
    return view('resident_diaspora_mdf_rdv');
});

// Route::get('/demande_resident_diaspora', function () {
//     return view('type_demande_diaspora');
// });

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/tuto_videos', function () {
    return view('tutovideos');
});

Route::get('/type_resident', function () {
    return view('type_resident');
});

Route::get('/faq_diaspora', function () {
    return view('faq_diaspora');
});


Route::get('historique_transaction', 'UsersController@historique_transaction');
Route::get('espace_personnel', 'UsersController@espace_personnel');
Route::get('statut_demande', 'UsersController@statut_demande');

Route::post('send_mail_contact', 'ContactsController@send_mail_contact');
Route::post('send_mail_contact_new', 'ContactsController@send_mail_contact_new');

Route::get('reclamation', 'ContactsController@reclamation');

Route::middleware(['throttle:loginAttempts'])->group(function () {

    Route::post('login_user', 'UsersController@login_user');
});


Route::post('create_user', 'UsersController@create_user');
Route::post('forgotten_pwd', 'UsersController@forgotten_pwd');
Route::post('update_user_data', 'UsersController@update_user_data');
Route::post('update_user_pwd', 'UsersController@update_user_pwd');
Route::get('logout_user', 'UsersController@logout_user');

Route::get('historiqueCodeRdv', 'UsersController@historiqueCodeRdv');
Route::get('historiqueDemandes', 'UsersController@historiqueDemandes');
Route::post('filter_dmd_request', 'UsersController@filter_dmd_request');
Route::post('filter_achat_request', 'UsersController@filter_achat_request');

Route::post('find_request_status', 'UsersController@find_request_status');


Route::get('historiqueRecuPaiement', 'UsersController@historiqueRecuPaiement');
Route::post('historiqueRecuPaiementFilter', 'UsersController@historiqueRecuPaiementFilter');

Route::post('historiqueCodeRdv_details', 'UsersController@historiqueCodeRdv_details');
Route::post('historiqueDmd_details', 'UsersController@historiqueDmd_details');
Route::post('historiquerecupaie_details', 'UsersController@historiquerecupaie_details');



Route::fallback( function () {
    return view('404');
});




