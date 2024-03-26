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
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('coffeeName');
            $table->string('coffeePhoto')->nullable();
            $table->integer('coffeePrice');
            $table->boolean('coffeeIsBestSeller')->default(false);
            $table->boolean('coffeeIsPromo')->default(false);

            // Preference
            $table->integer('coffeePreferenceMood')->default(0);
            $table->integer('coffeePreferenceActivity')->default(0);
            $table->string('coffeeTemperature');
            $table->string('coffeeSweetness');
            $table->string('coffeeMilkness');
            $table->string('coffeeCheapness');
            $table->string('coffeeMilkType');
            $table->string('coffeeDrinkType');
            $table->string('coffeeAcidityLevel');
            $table->string('coffeeStrengthLevel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
