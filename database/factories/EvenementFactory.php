<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Evenement;
use App\Statistiquet;
use App\Resp_media;

$factory->define(App\Evenement::class, function (Faker $faker) {
    return [
        'nom'=>$faker->lastName,
        'date'=>now(),
        'nb_patricipant' => $faker->randomDigitNotNull(5,100),
        'statistique_id'=>Statistique::get('id')->random(),
        'responsableMedia_id'=>Resp_media::get('id')->random(),
    ];
});
