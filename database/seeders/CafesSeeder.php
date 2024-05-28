<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CafesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cafes')->insert([
            [
                'cafeName' => "Gisoe",
                'cafeEmail' => "gisoe@brewmaster.com",
                'cafePassword' => "000000",
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
