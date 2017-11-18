<?php


use App\User;
use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'user_id' =>  function(){
        	return User::all()->random();
        },
        'detail' => $faker->paragraph
    ];
});
