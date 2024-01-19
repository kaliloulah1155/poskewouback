<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedSessionId extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'saved_session_id';
     protected $fillable = ['session_id','email','created_at','passport_type'];

    public $timestamps = false;
}
