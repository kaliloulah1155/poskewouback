<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pp_req_step_data extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'pp_req_step_data';
     protected $fillable = ['datavalue','parent_step','user_login','status','type_resident'];
    //protected $connection = 'mysql2';
    public $timestamps = false;
}
