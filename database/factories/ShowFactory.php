<?php

/** @var Factory $factory */

use App\Show;
use App\Episode;
use App\Language;
use App\TimeZone;
use App\Category;
use App\Enums\ShowType;
use App\SocialMediaAccount;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\ListeningService;
use App\Enums\ListeningServiceType;
use App\Enums\SocialMediaAccountType;
use Illuminate\Database\Eloquent\Factory;

$factory
    ->define(Show::class, function (Faker $faker) {
        return [
            'title'            => $title = ucwords($faker->words($faker->numberBetween(3, 5), true).$faker->lexify('???')),
            'slug'             => $slug = Str::slug($title),
            'description'      => $faker->paragraphs($faker->numberBetween(3, 5), true),
            'show_type'        => ShowType::getRandomValue(),
            'explicit_content' => $faker->boolean,
            'author'           => $faker->firstName.$faker->lastName,
            'owner'            => $owner = $faker->firstName.' '.$faker->lastName,
            'owner_email'      => Str::slug($owner, '.').'@'.$faker->safeEmailDomain,
            'subdomain'        => $slug,
            'language_id'      => Language::all()->random(1)->first()->id,
            'time_zone_id'     => TimeZone::all()->random(1)->first()->id,
        ];
    })
    ->afterCreating(Show::class, function ($show, Faker $faker) {
        $show->categories()->saveMany(Category::all()->random($faker->numberBetween(1, 3)));
    });

$factory->state(Show::class, 'without-nullables', function (Faker $faker) {
    return [];
});

$factory->state(Show::class, 'with-nullables', function (Faker $faker) {
    return [
        'short_description' => $faker->paragraphs($faker->numberBetween(1, 2), true),
        'tags'              => implode(', ', $faker->words($faker->numberBetween(3, 5))),
        'copyright'         => '© 2019 '.$faker->company,
        'website'           => $faker->url,
        'donation_message'  => $faker->paragraphs($faker->numberBetween(1, 2), true),
        'donation_link'     => $faker->url,
        'custom_domain'     => $faker->url,
        'artwork'           => $faker->imageUrl(300, 300, null, true, null, true),
    ];
});

$factory
    ->state(Show::class, 'with-episodes', function () {
        return [];
    })
    ->afterCreatingState(Show::class, 'with-episodes', function ($show, Faker $faker) {
        factory(Episode::class, $faker->numberBetween(2, 10))
            ->create([
                'show_id' => $show->id,
            ]);
    });

$factory
    ->state(Show::class, 'with-episodes-with-nullables', function () {
        return [];
    })
    ->afterCreatingState(Show::class, 'with-episodes-with-nullables', function ($show, Faker $faker) {
        factory(Episode::class, $faker->numberBetween(2, 10))
            ->state('with-nullables')
            ->create([
                'show_id' => $show->id,
            ]);
    });

$factory->state(Show::class, 'with-social-media-accounts', function (Faker $faker) {
    return [];
})->afterCreatingState(Show::class, 'with-social-media-accounts', function ($show, Faker $faker) {
    $socialMediaAccounts = collect(SocialMediaAccountType::getKeys())->random(3);

    foreach ($socialMediaAccounts as $socialMediaAccount) {
        factory(SocialMediaAccount::class)->create([
            'show_id' => $show->id,
            'key'     => $socialMediaAccount,
        ]);
    }
});

$factory->state(Show::class, 'with-listening-services', function (Faker $faker) {
    return [];
})->afterCreatingState(Show::class, 'with-listening-services', function ($show, Faker $faker) {
    $listeningServices = collect(ListeningServiceType::getKeys())->random(3);

    foreach ($listeningServices as $listeningService) {
        factory(ListeningService::class)->create(['show_id' => $show->id, 'key' => $listeningService,]);
    }
});

$factory->state(Show::class, 'without-listening-services', function (Faker $faker) {
    return [];
})->afterCreatingState(Show::class, 'without-listening-services', function ($show, Faker $faker) {
    //
});

$factory->state(Show::class, 'without-social-media-accounts', function (Faker $faker) {
    return [];
})->afterCreatingState(Show::class, 'without-social-media-accounts', function ($show, Faker $faker) {
    //
});
