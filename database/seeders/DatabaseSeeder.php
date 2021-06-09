<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $faker = Faker::create();
        foreach (range(1,100) as $index) {

            DB::table('scroll_paginations')->insert([
                'name' => $faker->text(30),
                'description' => $faker->text(100)
            ]);
        }
    }
}
