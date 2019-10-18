<?php

use App\Show;
use Illuminate\Database\Seeder;

class ShowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('tr_TR');

        factory(Show::class, $faker->numberBetween(15, 25))->state('with-nullables')->create();
        factory(Show::class, $faker->numberBetween(15, 25))->create();
    }
}
