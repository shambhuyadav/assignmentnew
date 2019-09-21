<?php

use Illuminate\Database\Seeder;

class characters extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        characters::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            characters::create([
                'name' => $faker->sentence,
                'email' => $faker->sentence,
                'phone' => $faker->sentence,
            ]);
        }
    }
}
