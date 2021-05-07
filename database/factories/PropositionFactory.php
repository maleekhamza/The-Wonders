<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Proposition;
use App\Utilisateur;
use Faker\Generator as Faker;

$factory->define(Proposition::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'username'=> $faker ->userName,
        'message'=>$faker->word,
        'e-mail'=>$faker->safeEmail,
        
    ];
});
