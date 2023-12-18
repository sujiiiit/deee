<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Note;
use Faker\Generator as Faker;

$factory->define(Note::class, function (Faker $faker) {
    return [
        'owner_id' => 1,
        'title' => ucwords($faker->text(15)),
        'description' => $faker->text(20)
    ];
});
