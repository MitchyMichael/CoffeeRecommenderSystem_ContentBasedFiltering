<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choise extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'coffee_id',
        'isLike',
        'sortId'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function coffee()
    {
        return $this->belongsTo(Coffee::class);
    }
}
