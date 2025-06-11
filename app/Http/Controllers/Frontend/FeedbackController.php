<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Testimonial;

class FeedbackController extends Controller
{
    public function index(){
        $backgrounds = Background::get();
        $testimonials = Testimonial::get();
    return view('frontend.feedbackpage', compact('backgrounds','testimonials'));
    }
}
