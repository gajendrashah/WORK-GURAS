<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;
use Faker\Generator as Faker;

$factory->define(User::class, function (Faker $faker) {
    return [
        'full_name' => Str::random(10),
        'email' => Str::random(10).'@gmail.com',
        'password' => bcrypt('password'),
    ];
});
