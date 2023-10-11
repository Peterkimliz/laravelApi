<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,10) as $index){
            DB::table("categories")->insert([

                "name"=>$faker->name
            ]);

        }
        // \App\Models\User::factory(10)->create();
    }
}
