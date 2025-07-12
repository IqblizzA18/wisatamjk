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

    // Query UTAMA untuk statistik dan chart (TIDAK dipengaruhi pencarian)
    $allWisata = Wisata::with(['jenisWisata', 'images'])->get();

    // Hitung skor CBF untuk SEMUA
    $scoredWisata = $allWisata->map(function ($wisata) {
        $score = (0.6 * $wisata->rating) + (0.4 * log(1 + $wisata->visit_count));
        $wisata->score = $score;
        return $wisata;
    });

    $sorted = $scoredWisata->sortByDesc('score')->values();
    $threshold = round($sorted->count() * 0.4);
    $wisataRekomendasi = $sorted->slice(0, $threshold);
    $wisataNonRekomendasi = $sorted->slice($threshold);

    // Filter hanya list wisata yang ditampilkan jika ada pencarian
    if ($search) {
        $wisataRekomendasi = $wisataRekomendasi->filter(function ($item) use ($search) {
            return stripos($item->title, $search) !== false;
        })->values();

        $wisataNonRekomendasi = $wisataNonRekomendasi->filter(function ($item) use ($search) {
            return stripos($item->title, $search) !== false;
        })->values();
    }

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

    // Statistik tetap dari data penuh (tidak ikut filter)
    $totalWisata = $scoredWisata->count();
    $totalRekomendasi = $threshold;
    $totalNonRekomendasi = $scoredWisata->count() - $threshold;

    // Pie Chart dari semua jenis wisata
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
