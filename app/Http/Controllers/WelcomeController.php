<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function show(){
    return view('welcome'); //link to welcome.blade.php
    }
}
