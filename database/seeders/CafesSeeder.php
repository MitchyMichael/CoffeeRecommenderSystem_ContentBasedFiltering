<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CafesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     // php artisan db:seed --class=CafesSeeder
    public function run(): void
    {
        DB::table('cafes')->insert([
            [
                'cafeName' => "Gisoe",
                'cafeEmail' => "gisoe@brewmaster.com",
                'cafePassword' => Hash::make('000000'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
