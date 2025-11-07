<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\Exercise;

class Activity extends Model
{
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

class Activity extends Model
{
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
}

