<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/*
Migration Order
=================================
1. Preferences
2. Coffees
3. Customers
4. Orders
5. Coffee Preferences

= Execute these commands to migrate =
php artisan migrate:fresh

php artisan migrate --path=/database/migrations/2024_03_20_063856_create_preferences_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_063923_create_coffees_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_063846_create_orders_table.php \
&& php artisan migrate --path=/database/migrations/2024_03_20_064140_create_coffeepreference_table.php
*/


return new class extends Migration
{
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
