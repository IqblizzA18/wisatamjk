<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JenisWisata;
use Illuminate\Support\Str;
use App\Http\Requests\Admin\JenisWisataRequest;


class JenisWisataController extends Controller
{
    public function index()
    {
        $jenis = JenisWisata::all();
        return view('admin.jenis.index', compact('jenis'));
    }

    public function create()
    {
        return view('admin.jenis.create');
    }

    public function store(JenisWisataRequest $request)
    {
        $request->validate(['name' => 'required']);
        JenisWisata::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.jenis.index')->with('success', 'Jenis wisata ditambahkan.');
    }

    public function edit($id)
    {
        $jenis = JenisWisata::findOrFail($id);
        return view('admin.jenis.edit', compact('jenis'));
    }

    public function update(JenisWisataRequest $request, $id)
    {
        $jenis = JenisWisata::findOrFail($id);
        $jenis->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
        ]);
        return redirect()->route('admin.jenis.index')->with('success', 'Jenis wisata diperbarui.');
    }

    public function destroy($id)
    {
        JenisWisata::destroy($id);
        return back()->with('success', 'Jenis wisata dihapus.');
    }
}
