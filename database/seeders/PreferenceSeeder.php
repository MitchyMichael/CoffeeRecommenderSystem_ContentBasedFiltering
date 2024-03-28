<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('preferences')->insert([
            [
                'preferenceMood' => rand(0, 1),
                'preferenceActivity' => rand(0, 1),
                'preferenceCoffeeTemperature' => rand(0, 1),
                'preferenceCoffeeSweetness' => rand(0, 1),
                'preferenceCoffeeMilkness' => rand(0, 1),
                'preferenceCoffeePrice' => rand(0, 1),
                // 'preferenceCoffeeMilkType' => rand(0, 1),
                'preferenceCoffeeDrinkType' => rand(0, 1),
                'preferenceCoffeeAcidityLevel' => rand(0, 1),
                'preferenceCoffeeStrengthLevel' => rand(0, 1),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
