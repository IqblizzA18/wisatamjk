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

        // Ambil semua data wisata
        $query = Wisata::with(['jenisWisata', 'images']);

        // Filter judul wisata (search)
        if ($request->filled('judul')) {
            $query->where('title', 'like', '%' . $request->judul . '%');
        }

        // Filter jenis wisata (berdasarkan nama jenis wisata)
        if ($request->filled('jenis')) {
            $query->whereHas('jenisWisata', function ($q) use ($request) {
                $q->whereIn('name', $request->jenis);
            });
        }

        // Filter berdasarkan rating (range 1–5)
        if ($request->filled('rating')) {
            $query->where(function ($q) use ($request) {
                foreach ($request->rating as $rate) {
                    $min = (float) $rate;
                    $max = $min + 1;
                    $q->orWhere(function ($sub) use ($min, $max) {
                        $sub->where('rating', '>=', $min)
                            ->where('rating', '<', $max);
                    });
                }
            });
        }

        // Tambahkan skor CBF ke query: hanya 2 fitur: rating dan visit_count
        $query->selectRaw('*, (0.6 * rating + 0.4 * LOG(1 + visit_count)) as cbf_score');

        // Sorting: default pakai CBF
        $sort = $request->input('sort');
        if ($sort === 'a-z') {
            $query->orderBy('title', 'asc');
        } else {
            // default atau sort=recommended
            $query->orderByDesc('cbf_score');
        }

        // Paginate hasil
        $wisatas = $query->paginate(8)->withQueryString();

        return view('frontend.explore.index', compact('backgrounds', 'wisatas', 'jenisWisatas'));
    }

    public function show($slug)
    {
        $wisata = Wisata::with(['jenisWisata', 'images'])->where('slug', $slug)->firstOrFail();

        // CBF: tingkatkan visit count (tanpa login)
        $wisata->incrementVisitCount();

        return view('frontend.explore.single', compact('wisata'));
    }
}
