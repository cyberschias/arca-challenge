<?php

$faker = new Faker\Generator();
$faker->addProvider(new Faker\Provider\en_US\PhoneNumber($faker));
$faker->addProvider(new Faker\Provider\en_US\Address($faker));

$factory->define(App\Models\Business::class, function ($faker) {
    return [
        'category_id' => \App\Models\Category::inRandomOrder()->pluck('id')->first(),
        'title' => $title = $faker->company,
        'url' => str_slug($title, "-"),
        'description' => $faker->realText(200, 2),
        'phone' => $faker->e164PhoneNumber,
        'address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zipcode' => $faker->postcode,
    ];
});
