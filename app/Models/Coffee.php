<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coffee extends Model
{
    protected $fillable = [
        'coffeeName',
        'coffeeDescription',
        'coffeePhoto',
        'coffeePrice',
        'coffeeIsBestSeller',
        'coffeeIsPromo',
        'numberChosen',
        'coffeePreferenceMood',
        'coffeePreferenceActivity',
        'coffeeTemperature',
        'coffeeSweetness',
        'coffeeMilkness',
        'coffeeCheapness',
        'coffeeDrinkType',
        'coffeeAcidityLevel',
        'coffeeStrengthLevel',
    ];
}
