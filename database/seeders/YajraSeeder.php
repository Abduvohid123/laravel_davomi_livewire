<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class YajraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,100) as $index) {

            DB::table('yajras')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName
            ]);
        }
    }
}
