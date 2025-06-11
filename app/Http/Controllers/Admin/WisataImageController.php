<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Wisata;
use App\Models\WisataImage;
use Illuminate\Support\Facades\Storage;

class WisataImageController extends Controller
{
    public function index(Wisata $wisata)
    {
        $images = $wisata->images;
        return view('admin.wisata.image.index', compact('wisata', 'images'));
    }

    public function store(Request $request, Wisata $wisata)
{
    $request->validate([
        'images.*' => 'required|image|max:2048',
    ]);

    if ($request->hasFile('images')) {
        foreach ($request->file('images') as $file) {
            $path = $file->store('wisata-images', 'public');
            WisataImage::create([
                'wisata_id' => $wisata->id,
                'image_path' => $path,
            ]);
        }
    }

    return back()->with('success', 'Gambar berhasil ditambahkan.');
}


    public function destroy(WisataImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Gambar dihapus.');
    }
}
