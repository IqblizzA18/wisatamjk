<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Background;
use App\Models\Wisata;

class HomepageController extends Controller
{
    public function index()
    {
        $backgrounds = Background::all();

        // Ambil semua wisata beserta gambar dan jenisnya
        $wisatas = Wisata::with(['images', 'jenisWisata'])->get();

        // Hitung skor CBF berdasarkan rating dan visit_count
        $scoredWisatas = $wisatas->map(function ($wisata) {
            // Bobot bisa disesuaikan. Tidak perlu pakai jenis_wisata_id karena itu bukan skala nilai.
            $ratingWeight = 0.6;
            $visitWeight = 0.4;

            $score = ($ratingWeight * $wisata->rating) +
                     ($visitWeight * log(1 + $wisata->visit_count));

            $wisata->cbf_score = $score;
            return $wisata;
        });

        // Urutkan dari skor tertinggi, ambil 6 teratas
        $recommendedWisatas = $scoredWisatas
            ->sortByDesc('cbf_score')
            ->take(6);

        return view('frontend.homepage', compact(
            'backgrounds',
            'recommendedWisatas'
        ));
    }
}
