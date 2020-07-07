<?php

namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Quizz extends Model
{
    use softDeletes;

    protected $fillable=['user_id','nom','description'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
