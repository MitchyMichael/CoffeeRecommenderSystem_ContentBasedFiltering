<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffeepreference', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            // Migrate preference table first
            $table->foreignId('preference_id')->constrained('preferences');

            // Migrate coffees table first
            $table->foreignId('coffee_id')->constrained('coffees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffeepreference');
    }
};
