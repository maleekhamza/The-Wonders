<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use App\Membre_club;
use Faker\Generator as Faker;

$factory->define(App\Membre_club::class, function (Faker $faker) {
    return [
        'nom'=>$faker->lastName,
        'email'=>$faker->email,
        'email_verified_at'=>$faker->date($format = 'Y-m-d', $max = 'now') ,
        'password'=>$faker->password,
        'club_id'=>Club::get('id')->random(),
    ];
});
