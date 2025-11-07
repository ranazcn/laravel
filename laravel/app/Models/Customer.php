<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function meals()
    {
        return $this->hasMany(Meal::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }
}
