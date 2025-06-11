<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use App\Http\Requests\Admin\TestimonialRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the testimonials.
     */
    public function index(): View
    {
        $testimonials = Testimonial::latest()->get();

        return view('admin.testimonials.index', compact('testimonials'));
    }

    /**
     * Show the form for creating a new testimonial.
     */
    public function create(): View
    {
        return view('admin.testimonials.create');
    }

    /**
     * Store a newly created testimonial in storage.
     */
    public function store(TestimonialRequest $request): RedirectResponse
    {
        Testimonial::create($request->validated());

        return redirect()->route('admin.testimonials.index')->with([
            'message' => 'Testimonial successfully created!',
            'alert-type' => 'success',
        ]);
    }

    /**
     * Display the specified testimonial.
     */

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial): View
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(TestimonialRequest $request, Testimonial $testimonial): RedirectResponse
    {
        $testimonial->update($request->validated());

        return redirect()->route('admin.testimonials.index')->with([
            'message' => 'Testimonial successfully updated!',
            'alert-type' => 'info',
        ]);
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial): RedirectResponse
    {
        $testimonial->delete();

        return back()->with([
            'message' => 'Testimonial successfully deleted!',
            'alert-type' => 'danger',
        ]);
    }
}
