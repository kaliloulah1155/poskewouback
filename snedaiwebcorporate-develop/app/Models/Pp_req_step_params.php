<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pp_req_step_params extends Model
{
    //
     /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'pp_req_step_params';
     protected $fillable = ['idEnr1','userlogin','status'];
    //protected $connection = 'mysql2';
    public $timestamps = false;
}
