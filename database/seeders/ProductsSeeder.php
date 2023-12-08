<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fake = Factory::create();


        for($i=0; $i<100; $i++)
        {
        // DB::table("products")->insert([
        //     'name' => Str::random(30),
        //     'seller_name' => Str::random(30),
        //     'description' => Str::random(100),
        //     'prize' => (float) random_int(10, 1000),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        DB::table("products")->insert([
            'name' => $fake -> realText(60),

            'seller_name' => $fake-> name(),

            'description' => $fake-> realText(),
            'prize' => (float) random_int(10, 1000),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
      }

    }
}
