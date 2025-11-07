<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

class Meal extends Model
{
    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
