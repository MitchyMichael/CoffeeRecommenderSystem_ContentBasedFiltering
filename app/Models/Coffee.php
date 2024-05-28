<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    use HasFactory;

    protected $fillable = [
        'cafeId',
        'coffeeName',
        'coffeeDescription',
        'coffeePhoto',
        'coffeePrice',
        'coffeeIsBestSeller',

        'coffeePreferenceMood',
        'coffeePreferenceActivity',
        'coffeeTemperature',
        'coffeeSweetness',
        'coffeeMilkness',
        'coffeeCheapness',
        'coffeeAcidityLevel',
        'coffeeStrengthLevel',
    ];
}
