<?php

use Faker\Generator as Faker;
use App\Models\ProjectDetailModel;

$factory->define(ProjectDetailModel::class, function (Faker $faker) {
    
    $tags = ['new', 'new1', 'One-Day build', 'WIP', 'lorem', 'ipsum', 'testTag', 'tags', 'loremTag'];

    return [
        'priority'          => 0,
        'title'             => $faker->text(20),
        'short_description' => $faker->text(100),
        'description'       => $faker->text(200),
        'tags'              => $faker->randomElement($tags) .','. $faker->randomElement($tags) .','. $faker->randomElement($tags),
    ];
});
