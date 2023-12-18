<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Categorie;

class Categorie extends Model
{
    use HasFactory,SoftDeletes;

    protected $guarded = [];

     // Définir la relation parent
     public function parent()
     {
         return $this->belongsTo(Categorie::class, 'categorie_id');
     }
     // Définir la relation enfant
     public function enfants()
     {
         return $this->hasMany(Categorie::class, 'categorie_id');
     }
}
