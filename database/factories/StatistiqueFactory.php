<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Statistique;
use Faker\Generator as Faker;

$factory->define(Statistique::class, function (Faker $faker) {
    return [
        'nb_visiteurs'=>$faker->ean8,
        'nb_personnes'=>$faker->ean8,
        'nb_personnes_connectee'=>$faker->ean8,
    ];
});
