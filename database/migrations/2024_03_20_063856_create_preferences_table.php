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
        Schema::create('preferences', function (Blueprint $table) {
            $table->id();
            $table->double('preferenceMood', 8, 2)->default(0.0); // 0 -> sad, 1 -> happy
            $table->double('preferenceActivity', 8, 2)->default(0.0); // 0 -> chilling, 1 -> working
            $table->double('preferenceCoffeeTemperature', 8, 2)->default(0.0); // 0 -> cold, 1 -> hot
            $table->double('preferenceCoffeeSweetness', 8, 2)->default(0.0); // 0 -> not sweet, 1 -> sweet
            $table->double('preferenceCoffeeMilkness', 8, 2)->default(0.0); // 0 -> no milk, 1 -> with milk
            $table->double('preferenceCoffeePrice', 8, 2)->default(0.0); // 0 -> cheap, 1 -> pricy
            $table->double('preferenceCoffeeMilkType', 8, 2)->default(0.0); // 0 -> almond milk, 1 -> cow milk
            $table->double('preferenceCoffeeDrinkType', 8, 2)->default(0.0); // 0 -> pure coffee, 1 -> variant coffee
            $table->double('preferenceCoffeeAcidityLevel', 8, 2)->default(0.0); // 0 -> not acid,  1 -> acid
            $table->double('preferenceCoffeeStrengthLevel', 8, 2)->default(0.0); // 0 -> not strong, 1 -> strong
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
