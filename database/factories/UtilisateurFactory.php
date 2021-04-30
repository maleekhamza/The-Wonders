<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Evenement;
use App\Utilisateur;
use App\Proposition;
use Faker\Generator as Faker;

$factory->define(Utilisateur::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'username'=> $faker ->userName,
        'numCin'=>$faker->ean8,
        'adresse'=> $faker ->streetAddress,
        'numTel'=>$faker->ean8,
        'occupation'=>$faker->jobTitle,
        'email'=>$faker->safeEmail,
        'email_verified_at'=>$faker->date($format = 'Y-m-d', $max = 'now') ,
        'password'=>$faker->password   ,
       
'proposition_id'=>Proposition::get('id')->random(),
'evenement_id'=>Evenement::get('id')->random(),

'created_at'=>now(),
        
    ];
});
