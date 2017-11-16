<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'comment' => $faker->text,
        'post_id' =>  function(){
        	return Post::all()->random();
        }
    ];
});
