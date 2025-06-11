<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WisataRequest;
use App\Models\Wisata;
use App\Models\JenisWisata;
use App\Models\WisataImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WisataController extends Controller
{
    public function index()
    {
        $wisatas = Wisata::with('jenisWisata', 'images')->latest()->get();
        return view('admin.wisata.index', compact('wisatas'));
    }

    public function create()
    {
        $jenisWisatas = JenisWisata::all();
        return view('admin.wisata.create', compact('jenisWisatas'));
    }

    public function store(WisataRequest $request)
    {
        $data = $request->validated();

        // Generate unique slug jika kosong
        if (empty($data['slug'])) {
            $data['slug'] = $this->generateUniqueSlug($data['title']);
        }

        DB::transaction(function () use ($data, $request) {
            $wisata = Wisata::create($data);

            if ($request->hasFile('images')) {
                $this->uploadImages($wisata, $request->file('images'));
            }
        });

        return redirect()->route('admin.wisata.index')->with('success', 'Data wisata berhasil ditambahkan.');
    }

    public function edit(Wisata $wisata)
    {
        $jenisWisatas = JenisWisata::all();
        $wisata->load('images');
        return view('admin.wisata.edit', compact('wisata', 'jenisWisatas'));
    }

    public function update(WisataRequest $request, Wisata $wisata)
{
    $data = $request->validated();

    if (empty($data['slug'])) {
        $data['slug'] = $this->generateUniqueSlug($data['title'], $wisata->id);
    }

    DB::transaction(function () use ($data, $request, $wisata) {
        $wisata->update($data);

        // === Tambahan: Hapus gambar yang dicentang ===
        if ($request->has('delete_images')) {
            $deleteIds = $request->input('delete_images');
            $imagesToDelete = WisataImage::whereIn('id', $deleteIds)->where('wisata_id', $wisata->id)->get();

            foreach ($imagesToDelete as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }
        }

        // Upload gambar baru
        if ($request->hasFile('images')) {
            $this->uploadImages($wisata, $request->file('images'));
        }
    });

    return redirect()->route('admin.wisata.index')->with('success', 'Data wisata berhasil diperbarui.');
}


    public function destroy(Wisata $wisata)
    {
        DB::transaction(function () use ($wisata) {
            foreach ($wisata->images as $image) {
                Storage::disk('public')->delete($image->image_path);
                $image->delete();
            }

            $wisata->delete();
        });

        return redirect()->route('admin.wisata.index')->with('success', 'Data wisata berhasil dihapus.');
    }

    private function uploadImages(Wisata $wisata, array $images)
    {
        foreach ($images as $image) {
            $path = $image->store('wisata-images', 'public');
            WisataImage::create([
                'wisata_id' => $wisata->id,
                'image_path' => $path,
            ]);
        }
    }

    private function generateUniqueSlug(string $title, int $ignoreId = null): string
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (Wisata::where('slug', $slug)
            ->when($ignoreId, fn($query) => $query->where('id', '!=', $ignoreId))
            ->exists()) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }
}
