<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function preference()
    {
        return $this->belongsTo(Preference::class);
    }
}
