<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;

class AboutController extends Controller
{
    public function index(){
          $backgrounds = Background::get();
    return view('frontend.aboutpage', compact('backgrounds'));
        
    }
}
