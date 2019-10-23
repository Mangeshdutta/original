<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Enums\SocialMediaAccountType;
use App\Show;
use App\SocialMediaAccount;
use Faker\Generator as Faker;

$factory->define(SocialMediaAccount::class, function (Faker $faker, $attributes) {
    $socialMediaLinks = [
        'Twitter'   => 'https://twitter.com/',
        'Instagram' => 'https://instagram.com/',
        'Facebook'  => 'https://facebook.com/',
        'Linkedin'  => 'https://linkedin.com/',
        'Patreon'   => 'https://patreon.com/',
        'Youtube'   => 'https://youtube.com/',
        'Medium'    => 'https://medium.com/',
    ];

    $key = $attributes['key'] ?? $faker->randomElement(SocialMediaAccountType::getKeys());

    return [
        'show_id' => $attributes['show_id'] ?? factory(Show::class)->create(),
        'key' => $key,
        'value' => $socialMediaLinks[$key] . $faker->userName,
    ];
});
