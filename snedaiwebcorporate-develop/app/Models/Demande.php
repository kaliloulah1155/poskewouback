<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'demandes';
     protected $fillable = ['idAuth','lastname','firstname','birthday','gender','height','birthday_place','country','country_code','birth_country_code','district','nationality','job','marital_status','old_passport_id','id_card_type','id_card_number','father_lastname','father_firstname','father_birthday','mother_lastname','mother_firstname','mother_birthday','spouse_lastname','spouse_firstname','spouse_birthday','wedding_date','wedding_place','region','department','city','township','street','postal_box','phone_number','created_at','extr_naiss','cni_ai','photocni_part','cert_nat','ext_mar','aut_parent','email_demandeur','phone_demandeur','civility','order_id','montant','session_id','status','time_code','time_value','status_id','transaction_id','rdvcode','date_desired','wallet','ref_momo','meeting_code','location_code','location_address','address','email','meeting_type','loginRdv','transaction_id1','payment_status','person_lastname_contact','person_firstname_contact','person_contact_birthdate','person_contact_number_phone'];

    public $timestamps = false;
}
