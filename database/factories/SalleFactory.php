<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;
use App\Salle;

$factory->define(Salle::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'numero'=>$faker->randomDigit,
        'date_dispo'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'heure'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'created_at'=>now(),
    ];
});
