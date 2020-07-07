<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entreprise extends Model
{
   use SoftDeletes;
   protected $fillable=['user_id','nom_entreprise','nom_fondateur','date_fondation','num_tel','email','domaine','site_web','nombre_employe',
       'adresse_complete', 'description','image'];

   public function user()
    {
        return $this->belongsTo('App\User');
    }


}
