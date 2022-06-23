<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hotels()
    {
        return view('hotels');
    }
    public function packages()
    {
        return view('packages');
    }
}
