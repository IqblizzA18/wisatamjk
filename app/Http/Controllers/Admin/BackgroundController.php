<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Background;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\BackgroundRequest;


class BackgroundController extends Controller
{
   
    public function index(): View
{
    $background = Background::first(); // singular
    return view('admin.backgrounds.index', compact('background'));
}


    public function create(): View
{
    $background = Background::first();
    return view('admin.backgrounds.create', compact('background')); // <-- tambahkan ini
}


    public function store(BackgroundRequest $request): RedirectResponse
    {
        // upload file
        $path = $request->file('background_image')->store('backgrounds', 'public');

        $background = Background::first();
        if ($background) {
            // hapus file lama
            \Storage::disk('public')->delete($background->background_image);
            $background->update(['background_image' => $path]);
        } else {
            Background::create(['background_image' => $path]);
        }

        return redirect()->route('admin.backgrounds.index')->with([
            'message' => 'Successfully saved!',
            'alert-type' => 'success'
        ]);
    }

public function edit(): View
{
    $background = Background::first();
    return view('admin.backgrounds.edit', compact('background'));
}

public function update(BackgroundRequest $request): RedirectResponse
{
    $background = Background::first();
    
    // Tambahkan pengecekan jika background tidak ditemukan
    if (!$background) {
        return redirect()->route('admin.backgrounds.index')->with([
            'message' => 'Background not found!',
            'alert-type' => 'danger'
        ]);
    }

    $path = $request->file('background_image')->store('backgrounds', 'public');

    \Storage::disk('public')->delete($background->background_image);

    $background->update(['background_image' => $path]);

    return redirect()->route('admin.backgrounds.index')->with([
        'message' => 'Successfully updated!',
        'alert-type' => 'info'
    ]);
}
public function destroy(): RedirectResponse
{
    $background = Background::first();

    if ($background) {
        \Storage::disk('public')->delete($background->background_image);
        $background->delete();

        return back()->with([
            'message' => 'Successfully deleted!',
            'alert-type' => 'danger'
        ]);
    }

    return back()->with([
        'message' => 'No background to delete.',
        'alert-type' => 'warning'
    ]);
}

}