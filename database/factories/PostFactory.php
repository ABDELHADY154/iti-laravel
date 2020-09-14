<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'slug' => $faker->name,
        'desc' => $faker->text,
        'body' => $faker->text(500),
        'enabled' => $faker->boolean,
        'published_at' => $faker->dateTime,
        'user_id' => rand(1, User::all()->count()),

    ];
});
