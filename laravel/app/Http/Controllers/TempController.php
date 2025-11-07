<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    public function tmpFunction()
    {
        return 'This is a temporary function response.';
    }
}