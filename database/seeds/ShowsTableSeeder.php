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
        $faker = Faker\Factory::create('tr_TR');

        Collection::times(50, function() use ($faker){
            $faker->boolean
                ? factory(Show::class)->state('with-nullables')->create()
                : factory(Show::class)->create();
        });
    }
}
