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
                'preferenceMood' => rand(0, 1), // 0 -> sad, 1 -> happy
                'preferenceActivity' => rand(0, 1), // 0 -> chilling, 1 -> working
                'preferenceCoffeeTemperature' => rand(0, 1), // 0 -> cold, 1 -> hot
                'preferenceCoffeeSweetness' => rand(0, 1), // 0 -> not sweet, 1 -> sweet
                'preferenceCoffeeMilkness' => rand(0, 1), // 0 -> no milk, 1 -> with milk
                'preferenceCoffeePrice' => rand(0, 1), // 0 -> cheap, 1 -> pricy
                'preferenceCoffeeMilkType' => rand(0, 1), // 0 -> almond milk, 1 -> cow milk
                'preferenceCoffeeDrinkType' => rand(0, 1), // 0 -> pure coffee, 1 -> variant coffee
                'preferenceCoffeeAcidityLevel' => rand(0, 1), // 0 -> not acid,  1 -> acid
                'preferenceCoffeeStrengthLevel' => rand(0, 1), // 0 -> not strong, 1 -> strong
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
