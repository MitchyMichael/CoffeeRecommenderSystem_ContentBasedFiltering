<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cafeId')->constrained('cafes')->nullable();
            $table->string('coffeeName');
            $table->text('coffeeDescription');
            $table->string('coffeePhoto')->nullable();
            $table->string('coffeePrice');
            $table->boolean('coffeeIsBestSeller')->default(false);

            // Preference
            $table->integer('coffeePreferenceMood')->default(0);
            $table->integer('coffeePreferenceActivity')->default(0);
            $table->integer('coffeeTemperature')->default(0);
            $table->integer('coffeeSweetness')->default(0);
            $table->integer('coffeeMilkness')->default(0);
            $table->integer('coffeeCheapness')->default(0);
            $table->integer('coffeeAcidityLevel')->default(0);
            $table->integer('coffeeStrengthLevel')->default(0);

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
