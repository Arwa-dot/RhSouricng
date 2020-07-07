<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use App\Quizz;
use App\User;
use Faker\Generator as Faker;

$factory->define(Quizz::class, function (Faker $faker) {
    return [
        'user_id'=>factory(App\User::class),
        'nom'=>$faker->domainName,
        'description'=>$faker->sentence


    ];
});
