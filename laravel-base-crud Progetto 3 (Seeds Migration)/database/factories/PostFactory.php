<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Post;
$factory->define(Post::class, function (Faker $faker) {
    return [
      "title"  	 => $faker ->  unique() -> text($maxNbChars = 25),
      "text"     => $faker ->  text($maxNbChars = 50),
      "category" => $faker ->  word(),
      "like"     => $faker ->  numberBetween($min = 1, $max = 10000),
      "dislike"  => $faker ->  numberBetween($min = 1, $max = 10000)
    ];
});
