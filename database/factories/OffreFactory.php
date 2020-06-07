<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Offre;
use Faker\Generator as Faker;

$factory->define(Offre::class, function (Faker $faker) {
    return [
        'user_id' =>factory(App\User::class),
        'titre_emploi'=>$faker->domainName,
        'secteur_emploi'=>$faker->sentence,
        'type_emploi'=>$faker->sentence,
        'description'=>$faker->sentence,
        'date_publication'=>$faker->dateTimeAD,
        'date_limite'=>$faker->dateTime,
        'mail_recruteur'=>$faker->email,
        'salaire_propose'=>$faker->randomDigit,
        'ville'=>$faker->city

    ];
});
