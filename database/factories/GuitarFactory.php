<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guitars;
use Faker\Generator as Faker;

$factory->define(Guitars::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'excerpt' => $faker->sentence,
        'type' => $faker->sentence,
        'body'=> $faker->paragraph
        //php
    ];
});
