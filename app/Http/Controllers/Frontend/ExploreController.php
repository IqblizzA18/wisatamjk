<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\Background;
use App\Models\JenisWisata;


class ExploreController extends Controller
{
    public function index(Request $request)
    {
        $backgrounds = Background::all();
        $jenisWisatas = JenisWisata::all();

        $query = Wisata::with(['jenisWisata', 'images']);

        // Filter judul
        if ($request->filled('judul')) {
            $query->where('title', 'like', '%' . $request->judul . '%');
        }

        // Filter jenis wisata
        if ($request->filled('jenis')) {
            $query->whereHas('jenisWisata', function ($q) use ($request) {
                $q->whereIn('name', $request->jenis);
            });
        }

        // Filter rating
        if ($request->filled('rating')) {
    $query->where(function ($q) use ($request) {
        foreach ($request->rating as $rate) {
            $min = (float) $rate;
            $max = $min + 1;
            $q->orWhere(function ($subQuery) use ($min, $max) {
                $subQuery->where('rating', '>=', $min)
                         ->where('rating', '<', $max);
            });
        }
    });
}

// Sort atau Filter Khusus
if ($request->filled('sort')) {
    switch ($request->sort) {
        case 'terbaru':
            $query->orderBy('created_at', 'desc');
            break;

        case 'recommended':
            $query->where('is_recommended', true);
            break;

        case 'a-z':
            $query->orderBy('title', 'asc');
            break;
    }
}




        $wisatas = $query->paginate(8);

        return view('frontend.explore.index', compact('backgrounds', 'wisatas','jenisWisatas'));
    }

    public function show($slug)
    {
        $wisata = Wisata::with(['jenisWisata', 'images'])->where('slug', $slug)->firstOrFail();
        return view('frontend.explore.single', compact('wisata'));
    }
}
