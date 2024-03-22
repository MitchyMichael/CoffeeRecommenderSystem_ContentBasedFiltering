<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoffeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        DB::table('coffees')->insert([
            [
                'coffeeName' => 'Example Coffee',
                'coffeeTemperature' => 'Hot',
                'coffeeSweetness' => 'Medium',
                'coffeeMilkness' => 'Regular',
                'coffeePrice' => 15000,
                'coffeeMilkType' => 'Whole Milk',
                'coffeeDrinkType' => 'Espresso',
                'coffeeAcidityLevel' => 'Low',
                'coffeeStrengthLevel' => 'Medium',
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'coffeeRating' => 0.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
