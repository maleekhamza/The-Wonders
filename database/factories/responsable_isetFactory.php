<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\responsable_iset;
use Faker\Generator as Faker;

$factory->define(responsable_iset::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'password'=>$faker->password,
        'email'=>$faker->safeEmail,
        'created_at'=>now(),
    ];
});
