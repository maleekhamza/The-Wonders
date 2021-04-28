<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Club;
use App\Resp_media;
use Faker\Generator as Faker;

$factory->define(Resp_media::class, function (Faker $faker) {
    return [
        'nom'=>$faker->lastName,
        'email'=>$faker->email,
        'email_verified_at'=>$faker->date($format = 'Y-m-d', $max = 'now') ,
        'password'=>$faker->password,
        'club_id'=>Club::get('id')->random(),
        'created_at'=>now(),
        
    ];
});
