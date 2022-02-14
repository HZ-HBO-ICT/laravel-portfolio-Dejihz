<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function show(){
    return view('welcome'); //link to welcome.blade.php
    }
}
