<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function hotels()
    {
        return view('hotels');
    }
    public function packages()
    {
        return view('packages');
    }
}
