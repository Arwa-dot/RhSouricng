<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entreprise;
use Faker\Generator as Faker;


$factory->define(Entreprise::class, function (Faker $faker) {
    return [
        'user_id' =>factory(App\User::class),
        'nom_entreprise'=>$faker->company,
        'nom_fondateur'=>$faker->userName,
        'date_fondation'=>$faker->dateTime,
        'num_tel'=>$faker->phoneNumber,
        'email'=>$faker->companyEmail,
        'domaine'=>$faker->word,
        'site_web'=>$faker->url,
        'nombre_employe'=>$faker->randomDigit,
        'adresse_complete'=>$faker->streetAddress,
        'description'=>$faker->sentence

    ];
});

