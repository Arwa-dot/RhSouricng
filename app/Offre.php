<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Offre extends Model
{
    use SoftDeletes;
    protected $fillable=['user_id','titre_emploi','secteur_emploi','type_emploi','description','date_publication',
        'date_limite','mail_recruteur','salaire_propose','ville'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
