<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SavedTransactionId extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */
     protected $table = 'saved_transactionid1';
     protected $fillable = ['transactionid1','email','created_at','passport_type'];

    public $timestamps = false;
}
