<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Meal;

class Food extends Model
{
    public function meal()
    {
        return $this->belongsTo(Meal::class);
    }
}
