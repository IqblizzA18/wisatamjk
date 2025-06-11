<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Wisata;
use App\Models\JenisWisata;

class DashboardController extends Controller
{
    public function index()
{
    $search = request('search');

    $query = Wisata::with(['jenisWisata', 'images']);

    if ($search) {
        $query->where('title', 'like', '%' . $search . '%');
    }

    // Clone query untuk masing-masing kategori
    $rekomendasiQuery = (clone $query)->where('is_recommended', 1);
    $nonRekomendasiQuery = (clone $query)->where('is_recommended', 0);

    $wisataRekomendasi = $rekomendasiQuery->latest()->paginate(5, ['*'], 'rekomendasi');
    $wisataNonRekomendasi = $nonRekomendasiQuery->latest()->paginate(5, ['*'], 'nonrekomendasi');

    // Statistik dasar
    $totalWisata = Wisata::count();
    $totalRekomendasi = Wisata::where('is_recommended', true)->count();
    $totalNonRekomendasi = Wisata::where('is_recommended', false)->count();

    // Pie Chart: Distribusi jenis wisata
    $jenisWisata = JenisWisata::withCount('wisatas')->get();
    $jenisLabels = $jenisWisata->pluck('name')->toArray();
    $jenisCounts = $jenisWisata->pluck('wisatas_count')->toArray();

    return view('home', compact(
        'wisataRekomendasi',
        'wisataNonRekomendasi',
        'totalWisata',
        'totalRekomendasi',
        'totalNonRekomendasi',
        'jenisLabels',
        'jenisCounts'
    ));
}

}
