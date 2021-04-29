<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'numero'=>$faker->randomDigit,
        'date_dispo'=>$faker->now,
        'heure'=>$faker->time($format = 'H:i:s', $max = 'now'),
        'created_at'=>now(),
    ];
});
