<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Comment;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body' => $faker->sentence,
        'user_id' => factory(User::class)->create(),
    ];
});
