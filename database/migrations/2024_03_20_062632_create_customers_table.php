<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
============================================================
Migration Order
============================================================
1. Preferences
2. Coffees
3. Customers
4. Choises
5. Coffee Preferences
============================================================


============================================================
Logic Step
============================================================
Note: Coffees data already inputted.

1. Input preference (Done)
2. Submit preference and customer ID to database -> preference + customer (Done)
3. Content-based Filtering
4. Output 3 recommendation
5. Choose recommendation and submit to database -> choises + coffee preference
============================================================


============================================================
= Execute these commands to migrate =
============================================================
php artisan migrate:fresh

php artisan migrate --path=/database/migrations/2024_03_20_063856_create_preferences_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_063923_create_coffees_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_063846_create_choise_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_064140_create_coffeepreference_table.php
============================================================


============================================================
Run this code to seed all database
============================================================
php artisan db:seed --class=PreferenceSeeder \
&& php artisan db:seed --class=CoffeesSeeder \
&& php artisan db:seed --class=CustomersSeeder \
&& php artisan db:seed --class=ChoisesSeeder \
&& php artisan db:seed --class=CoffeePreferenceSeeder
============================================================
*/

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Migrate preference table first
            $table->foreignId('preference_id')->constrained('preferences');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
