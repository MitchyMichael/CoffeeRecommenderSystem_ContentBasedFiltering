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
            $table->string('coffeeTemperature');
            $table->string('coffeeSweetness');
            $table->string('coffeeMilkness');
            $table->string('coffeePhoto')->nullable();
            $table->integer('coffeePrice');
            $table->string('coffeeBeanType');
            $table->string('coffeeMilkType');
            $table->string('coffeeProcess');
            $table->string('coffeeDrinkType');
            $table->string('coffeeAcidityLevel');
            $table->string('coffeeStrengthLevel');
            $table->boolean('coffeeIsBestSeller')->default(false);
            $table->boolean('coffeeIsPromo')->default(false);
            $table->double('coffeeRating', 8, 2)->default(0.0);
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
