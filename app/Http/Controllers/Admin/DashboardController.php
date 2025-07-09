<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\JenisWisata;
use Illuminate\Pagination\LengthAwarePaginator;

class DashboardController extends Controller
{
    public function index()
    {
        $search = request('search');

        $query = Wisata::with(['jenisWisata', 'images']);

        if ($search) {
            $query->where('title', 'like', '%' . $search . '%');
        }

        $allWisata = $query->get();

        // Hitung skor CBF
        $scoredWisata = $allWisata->map(function ($wisata) {
            $score = (0.6 * $wisata->rating) +
                     (0.4 * log(1 + $wisata->visit_count));
            $wisata->score = $score;
            return $wisata;
        });

        // Urutkan berdasarkan skor tertinggi
        $sorted = $scoredWisata->sortByDesc('score')->values();

        // Top 40% sebagai rekomendasi
        $threshold = round(count($sorted) * 0.4);
        $wisataRekomendasi = $sorted->slice(0, $threshold);
        $wisataNonRekomendasi = $sorted->slice($threshold);

        // Pagination manual
        $perPage = 5;

        $page = request('rekomendasi', 1);
        $wisataRekomendasiPaginated = new LengthAwarePaginator(
            $wisataRekomendasi->slice(($page - 1) * $perPage, $perPage),
            $wisataRekomendasi->count(),
            $perPage,
            $page,
            ['pageName' => 'rekomendasi']
        );

        $page2 = request('nonrekomendasi', 1);
        $wisataNonRekomendasiPaginated = new LengthAwarePaginator(
            $wisataNonRekomendasi->slice(($page2 - 1) * $perPage, $perPage),
            $wisataNonRekomendasi->count(),
            $perPage,
            $page2,
            ['pageName' => 'nonrekomendasi']
        );

        // Statistik
        $totalWisata = $scoredWisata->count();
        $totalRekomendasi = $wisataRekomendasi->count();
        $totalNonRekomendasi = $wisataNonRekomendasi->count();

        // Data Pie Chart
        $jenisWisata = JenisWisata::withCount('wisatas')->get();
        $jenisLabels = $jenisWisata->pluck('name')->toArray();
        $jenisCounts = $jenisWisata->pluck('wisatas_count')->toArray();

        return view('home', compact(
            'wisataRekomendasiPaginated',
            'wisataNonRekomendasiPaginated',
            'totalWisata',
            'totalRekomendasi',
            'totalNonRekomendasi',
            'jenisLabels',
            'jenisCounts'
        ));
    }
}
