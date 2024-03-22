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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->integer('preferenceMood')->default(0); // 0 -> sad, 1 -> happy
            $table->integer('preferenceActivity')->default(0); // 0 -> chilling, 1 -> working
            $table->integer('preferenceCoffeeTemperature')->default(0); // 0 -> cold, 1 -> hot
            $table->integer('preferenceCoffeeSweetness')->default(0); // 0 -> not sweet, 1 -> sweet, stepper
            $table->integer('preferenceCoffeeMilkness')->default(0); // 0 -> no milk, 1 -> with milk
            $table->integer('preferenceCoffeePrice')->default(0); // 0 -> cheap, 1 -> pricy
            $table->integer('preferenceCoffeeMilkType')->default(0); // 0 -> almond milk, 1 -> cow milk
            $table->integer('preferenceCoffeeDrinkType')->default(0); // 0 -> pure coffee, 1 -> variant coffee
            $table->integer('preferenceCoffeeAcidityLevel')->default(0); // 0 -> not acid,  1 -> acid
            $table->integer('preferenceCoffeeStrengthLevel')->default(0); // 0 -> not strong, 1 -> strong
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preferences');
    }
};
