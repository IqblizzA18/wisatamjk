<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Testimonial;
use App\Models\Wisata;

class HomepageController extends Controller
{
    public function index(){
    $backgrounds = Background::get();
    $testimonials = Testimonial::get();

    // Ambil wisata yang direkomendasikan (misalnya limit 6)
   $recommendedWisatas = Wisata::with(['images', 'jenisWisata'])
                            ->where('is_recommended', true)
                            ->get();

    return view('frontend.homepage', compact('backgrounds', 'testimonials', 'recommendedWisatas'));
}

}
