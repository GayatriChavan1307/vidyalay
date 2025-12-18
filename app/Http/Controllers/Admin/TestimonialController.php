<?php

namespace App\Http\Controllers\Admin;
use App\Models\Testimonial;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('is_active', 'desc') // Active first
                                   ->orderBy('order')
                                   ->get();

        return view('admin.testimonial.index', compact('testimonials'));
    }

    /**
     * Show the form for editing the specified testimonial.
     */
    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonial.edit', compact('testimonial'));
    }

    /**
     * Update the specified testimonial in storage.
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        $validated = $request->validate([
            'name'        => 'required|string|max:255',
            'profession'  => 'nullable|string|max:255',
            'testimonial' => 'nullable|string',
            'image'       => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'order'       => 'nullable|integer|min:0',
            'is_active'   => 'sometimes|boolean',
        ]);

        // Handle image upload/replacement
        if ($request->hasFile('image')) {
            // Delete old image
            if ($testimonial->image && file_exists(public_path($testimonial->image))) {
                @unlink(public_path($testimonial->image));
            }

            $file = $request->file('image');
            $filename = Str::slug($validated['name']) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/alumni'), $filename);

            $validated['image'] = 'assets/img/alumni/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        $testimonial->update($validated);

        return redirect()
            ->route('admin.testimonial.index')
            ->with('success', 'Alumni testimonial updated successfully!');
    }

    /**
     * Remove the specified testimonial from storage.
     */
    public function destroy(Testimonial $testimonial)
    {
        if ($testimonial->image && file_exists(public_path($testimonial->image))) {
            @unlink(public_path($testimonial->image));
        }

        $testimonial->delete();

        return redirect()
            ->route('admin.testimonial.index')
            ->with('success', 'Alumni testimonial deleted successfully!');
    }
}
