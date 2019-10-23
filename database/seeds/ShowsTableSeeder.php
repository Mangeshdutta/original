<?php

use App\Show;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Collection::times(50, function () use ($faker) {
            factory(Show::class)
                ->states($faker->randomElements([
                    $faker->randomElement(['with-nullables','without-nullables']),
                    $faker->randomElement(['with-episodes', 'with-episodes-with-nullables']),
                ]))
                ->create();
        });
    }
}
