<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'nickname' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'avatar' => $faker->image(),
        'blog' => $faker->url,
        'admin' => 0,
        'status' => 1,
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\Node::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->title,
        'status' => 1,
    ];
});
$factory->define(App\Article::class, function (Faker\Generator $faker) use ($factory) {
    return [
        'title' => $faker->text(20),
        'content' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'user_id' => $factory->create(App\User::class)->id,
        'pv' => mt_rand(5, 15),
        'score' => mt_rand(5, 15),
        'node_id' => $factory->create(App\Node::class)->id,
        'status' => 1,
    ];
});
