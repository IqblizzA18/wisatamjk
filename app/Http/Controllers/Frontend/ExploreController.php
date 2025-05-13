<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function index(){
        return view('frontend.explore.index');
    }
    public function show(){
        return view ('frontend.explore.single');
    }
}
