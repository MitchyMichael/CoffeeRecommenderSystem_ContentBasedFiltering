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

    public function run(): void // php artisan db:seed --class=CoffeesSeeder.php
    {
        DB::table('coffees')->insert([
            [
                'coffeeName' => 'Ice Shakencano',
                'coffeeDescription' => 'Espresso shake with homemade aren.',
                'coffeePhoto' => '',
                'coffeePrice' => 22000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Friendly Coffee',
                'coffeeDescription' => 'The famous aren latte, with ice.',
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => true,
                'coffeeIsPromo' => false,
                'numberChosen' => 10,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Friendly Coffee',
                'coffeeDescription' => 'The famous aren latte, but hot.',
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Vanilla Latte',
                'coffeeDescription' => 'Enjoy the delicious mix of vanilla, milk, and espresso.',
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => true,
                'coffeeIsPromo' => false,
                'numberChosen' => 10,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Hazelnut Latte',
                'coffeeDescription' => 'Savor the harmonious blend of hazelnut, fresh milk, and espresso.',
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Citrus Cafe',
                'coffeeDescription' => 'The exciting combination of orange juice and espresso.',
                'coffeePhoto' => '',
                'coffeePrice' => 24000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Butterscotch Latte',
                'coffeeDescription' => 'A blend of espresso, fresh milk, and butterscotch syrup.',
                'coffeePhoto' => '',
                'coffeePrice' => 25000,
                'coffeeIsBestSeller' => true,
                'coffeeIsPromo' => false,
                'numberChosen' => 10,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Candy Latte',
                'coffeeDescription' => 'A mixture consisting of espresso, fresh milk, and caramel syrup.',
                'coffeePhoto' => '',
                'coffeePrice' => 25000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Biru',
                'coffeeDescription' => "It's a blue cafe latte.",
                'coffeePhoto' => '',
                'coffeePrice' => 25000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Apple Pie Latte',
                'coffeeDescription' => "Cafe Latte that taste like apple pie.",
                'coffeePhoto' => '',
                'coffeePrice' => 25000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Not Tiramisu Latte',
                'coffeeDescription' => "It is not tiramisu but slightly taste like tiramisu.",
                'coffeePhoto' => '',
                'coffeePrice' => 25000,
                'coffeeIsBestSeller' => true,
                'coffeeIsPromo' => false,
                'numberChosen' => 10,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Matchapresso',
                'coffeeDescription' => "A fusion of espresso, fresh milk, and matcha.",
                'coffeePhoto' => '',
                'coffeePrice' => 30000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Happy Mocha',
                'coffeeDescription' => "A combination of espresso, fresh milk, and chocolate.",
                'coffeePhoto' => '',
                'coffeePrice' => 30000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Americano',
                'coffeeDescription' => "Espresso with water, no added sugar.",
                'coffeePhoto' => '',
                'coffeePrice' => 20000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 1, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Americano',
                'coffeeDescription' => "Espresso with water, no added sugar.",
                'coffeePhoto' => '',
                'coffeePrice' => 20000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 1, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Cappuccino',
                'coffeeDescription' => "Espresso with fresh milk, without any added sugar.",
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 3, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 2, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 3, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Cappuccino',
                'coffeeDescription' => "Espresso with fresh milk, without any added sugar.",
                'coffeePhoto' => '',
                'coffeePrice' => 23000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 3, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 2, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 5, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 3, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Cold Brew',
                'coffeeDescription' => "Coffee that brewed in cold water for 12 hours.",
                'coffeePhoto' => '',
                'coffeePrice' => 30000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 2, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 1, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 4, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Espresso Arabica',
                'coffeeDescription' => "Just an espresso.",
                'coffeePhoto' => '',
                'coffeePrice' => 15000,
                'coffeeIsBestSeller' => false,
                'coffeeIsPromo' => false,
                'numberChosen' => 0,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeDrinkType' => 1, // 1 (pure coffee), 5 (variant coffee)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
