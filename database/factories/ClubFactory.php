<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use Faker\Generator as Faker;

$factory->define(Club::class, function (Faker $faker) {
    return [
        'nom_club' => $faker->unique()->randomElement(['tunivisions','voyages et loisirs',
        'Alpha-tech club','MCNCOM','IPEC','IEEE','Google club','Life club','Shrys:fiestacontigo!',
        'Gaming lab','We seek','4c']),
        'nb_membres' => $faker->randomDigitNotNull(5,50),
        'created_at'=>now()
    ];
});
