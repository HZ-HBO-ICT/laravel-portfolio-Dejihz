<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //add
use App\Models\Faq; //add


class FaqController extends Controller
{
    public function show(){
        $faqs = Faq::all();
        return view('faq', ['faqs'=> $faqs] ); //link to welcome.blade.php
    }
}
