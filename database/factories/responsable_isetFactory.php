<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\responsable_iset;
use App\Salle;
use Faker\Generator as Faker;

$factory->define(responsable_iset::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'password'=>$faker->password,
        'email'=>$faker->safeEmail,
        'salle_id'=>Salle::get('id')->random(),
        'created_at'=>now(),
    ];
});
