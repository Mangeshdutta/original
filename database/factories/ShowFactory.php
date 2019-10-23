<?php

/** @var Factory $factory */

use App\Enums\SocialMediaAccountType;
use App\Show;
use App\Language;
use App\SocialMediaAccount;
use App\TimeZone;
use App\Category;
use App\Enums\ShowType;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory
    ->define(Show::class, function (Faker $faker) {
        return [
            'title'            => $title = ucwords($faker->words($faker->numberBetween(3, 5), true).$faker->lexify('???')),
            'slug'             => Str::slug($title),
            'description'      => $faker->paragraphs($faker->numberBetween(3, 5), true),
            'show_type'        => ShowType::getRandomValue(),
            'explicit_content' => $faker->boolean,
            'author'           => $faker->firstName.$faker->lastName,
            'owner'            => $owner = $faker->firstName.' '.$faker->lastName,
            'owner_email'      => Str::slug($owner, '.').'@'.$faker->safeEmailDomain,
            'language_id'      => Language::all()->random(1)->first()->id,
            'time_zone_id'     => TimeZone::all()->random(1)->first()->id,
        ];
    })
    ->afterCreating(Show::class, function ($show, Faker $faker) {
        $show->categories()->saveMany(Category::all()->random($faker->numberBetween(1, 3)));
    });

$factory->state(Show::class, 'with-nullables', function (Faker $faker) {
    return [
        'short_description' => $faker->paragraphs($faker->numberBetween(1, 2), true),
        'tags'              => implode(', ', $faker->words($faker->numberBetween(3, 5))),
        'copyright'         => '© 2019 '.$faker->company,
        'website'           => $faker->url,
        'artwork'           => $faker->imageUrl(300, 300, null, true, null, true),
        'itunes_url'        => 'https://itunes.apple.com/us/podcast/'.implode('-', $faker->words($faker->numberBetween(3, 5), false)).'/id'.$faker->numerify('##########'),
        'spotify_url'       => 'https://open.spotify.com/track/'.$faker->bothify('#?#????#?????##??'),
    ];
});

$factory->state(Show::class, 'with-social-media-accounts', function (Faker $faker) {
    return [];
})->afterCreatingState(Show::class, 'with-social-media-accounts', function ($show, Faker $faker) {
    $socialMediaAccounts = collect(SocialMediaAccountType::getKeys())->random(3);

    foreach ($socialMediaAccounts as $socialMediaAccount) {
        factory(SocialMediaAccount::class)->create([
            'show_id'   => $show->id,
            'key'       => $socialMediaAccount,
        ]);
    }
});
