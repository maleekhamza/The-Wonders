<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Membre_club;
use App\Club;

$factory->define(App\Membre_club::class, function (Faker $faker) {
    return [
        'nom'=>$faker->lastName,
        'email'=>$faker->email,
        'email_verified_at'=>$faker->date($format = 'Y-m-d', $max = 'now') ,
        'password'=>$faker->password,
        'club_id'=>Club::get('id')->random(),
    ];
});
