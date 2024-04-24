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
                'coffeeName' => 'Ice Basic Latte',
                'coffeeDescription' => 'Single or double espresso plus fresh milk.',
                'coffeePhoto' => '/img/cafeLatte.jpg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Basic Latte',
                'coffeeDescription' => 'Single or double espresso plus fresh milk.',
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Friendly Coffee',
                'coffeeDescription' => 'Classic "Kopi Susu". Espresso, homemade aren syrup, and fresh milk.',
                'coffeePhoto' => '/img/friendlyHazelnutVanilla.jpg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 3, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Friendly Coffee',
                'coffeeDescription' => 'Classic "Kopi Susu". Espresso, homemade aren syrup, and fresh milk.',
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 3, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Vanilla Latte',
                'coffeeDescription' => 'Single shot espresso, vanilla syrup, fresh milk.',
                'coffeePhoto' => '/img/friendlyHazelnutVanilla.jpg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 3, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Hazelnut Latte',
                'coffeeDescription' => 'Single shot espresso, hazelnut syrup, fresh milk.',
                'coffeePhoto' => '/img/friendlyHazelnutVanilla.jpg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Sitrus Cafe',
                'coffeeDescription' => 'Fresh orange juice with single / double espresso.',
                'coffeePhoto' => '/img/sitrusCafe.jpg',
                'coffeePrice' => "24.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 2, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 4, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Candy Latte',
                'coffeeDescription' => 'Single shot espresso, salted caramel, fresh milk.',
                'coffeePhoto' => '/img/candyLatte.jpg',
                'coffeePrice' => "25.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 3, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Butterscotch Latte',
                'coffeeDescription' => 'It has a flavor similar to caramel latte but lighter and more savory, with homemade cream on top of the coffee.',
                'coffeePhoto' => '/img/butterscotch.jpg',
                'coffeePrice' => "25.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 3, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Biru',
                'coffeeDescription' => "A light caramel latte but blue.",
                'coffeePhoto' => '/img/biru.jpg',
                'coffeePrice' => "25.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 3, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Not Tiramisu Latte',
                'coffeeDescription' => "It tastes similar to tiramisu but it isn't tiramisu, with a sprinkle of cocoa powder on top of the coffee.",
                'coffeePhoto' => '/img/notTiramisu.jpg',
                'coffeePrice' => "25.000,-",
                'coffeeIsBestSeller' => true,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 3, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 1, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Matchapresso',
                'coffeeDescription' => "Matcha latte with pure matcha and fresh single shot espresso.",
                'coffeePhoto' => '/img/matchapresso.jpg',
                'coffeePrice' => "30.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 3, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 3, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Shakencano',
                'coffeeDescription' => 'Double espresso shake with aren syrup.',
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "22.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Apple Pie Latte',
                'coffeeDescription' => "Cafe Latte that taste like apple pie.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "25.000,-",
                'coffeeIsBestSeller' => false,


                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 5, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 3, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 2, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Happy Mocha',
                'coffeeDescription' => "A combination of double espresso, steamed milk, and chocolate.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "30.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 5, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 1, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 4, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 1, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Americano',
                'coffeeDescription' => "Double espresso with water, no added sugar.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "20.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Americano',
                'coffeeDescription' => "Double espresso with water, no added sugar.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "20.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Cappuccino',
                'coffeeDescription' => "Espresso with fresh milk, without any added sugar.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 3, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 2, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 2, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 3, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Ice Cappuccino',
                'coffeeDescription' => "Espresso with fresh milk, without any added sugar.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "23.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 3, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 2, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 5, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 2, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 3, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 4, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Cold Brew',
                'coffeeDescription' => "Coffee that brewed in cold water for 12 hours.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "30.000,-",
                'coffeeIsBestSeller' => false,


                'coffeePreferenceMood' => 2, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 1, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 5, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 4, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'coffeeName' => 'Hot Espresso Arabica',
                'coffeeDescription' => "Just an espresso.",
                'coffeePhoto' => '/img/coffeeRecImg.jpeg',
                'coffeePrice' => "15.000,-",
                'coffeeIsBestSeller' => false,

                'coffeePreferenceMood' => 1, // 1 (sad) - 5 (happy)
                'coffeePreferenceActivity' => 5, // 1 (chilling), 5 (working)
                'coffeeTemperature' => 5, // 1 (cold), 5 (hot)
                'coffeeSweetness' => 1, // 1 (Not sweet) - 5 (Sweet)
                'coffeeMilkness' => 1, // 1 (No Milk), 5 (With Milk)
                'coffeeCheapness' => 1, // 1 (cheap), 5 (pricy)
                'coffeeAcidityLevel' => 5, // 1 (not acid) - 5 (acid)
                'coffeeStrengthLevel' => 5, // 1 (not strong) - 5 (strong)
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
