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
        Schema::create('choises', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('isLike')->nullable();

            // Migrate customers table first
            $table->foreignId('customer_id')->constrained('customers');

            // Migrate coffees table first
            $table->foreignId('coffee_id')->constrained('coffees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('choise');
    }
};
