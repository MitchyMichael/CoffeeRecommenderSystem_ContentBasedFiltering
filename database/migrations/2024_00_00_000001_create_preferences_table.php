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
            $table->integer('preferenceMood')->default(0);
            $table->integer('preferenceActivity')->default(0);
            $table->integer('preferenceCoffeeTemperature')->default(0);
            $table->integer('preferenceCoffeeSweetness')->default(0);
            $table->integer('preferenceCoffeeMilkness')->default(0);
            $table->integer('preferenceCoffeePrice')->default(0);
            $table->integer('preferenceCoffeeAcidityLevel')->default(0);
            $table->integer('preferenceCoffeeStrengthLevel')->default(0);
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
