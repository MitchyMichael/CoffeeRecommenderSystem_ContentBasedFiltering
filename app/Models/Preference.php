<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    protected $fillable = [
        'mood',
        'activity',
        'coffee_temperature',
        'coffee_sweetness',
        'coffee_milkness',
        'coffee_price',
        'coffee_drink_type',
        'coffee_acidity_level',
        'coffee_strength_level',
    ];

    public function customer()
    {
        return $this->hasOne(Customer::class);
    }
}
