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
            $table->string('preferenceMood');
            $table->string('preferenceActivity');
            $table->string('preferenceCoffeeTemperature');
            $table->string('preferenceCoffeeSweetness');
            $table->string('preferenceCoffeeMilkness');
            $table->string('preferenceCoffeePhoto')->nullable();
            $table->integer('preferenceCoffeePrice');
            $table->string('preferenceCoffeeBeanType');
            $table->string('preferenceCoffeeMilkType');
            $table->string('preferenceCoffeeProcess');
            $table->string('preferenceCoffeeDrinkType');
            $table->string('preferenceCoffeeAcidityLevel');
            $table->string('preferenceCoffeeStrengthLevel');
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
