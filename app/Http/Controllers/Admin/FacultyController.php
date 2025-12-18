<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\FacultyMember;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faculties = FacultyMember::orderBy('order')->get();
        return view('admin.faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'designation'  => 'required|string|max:255',
            'subject'      => 'nullable|string|max:255',
            'qualification'=> 'nullable|string|max:255',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description'  => 'nullable|string',
            'order'        => 'nullable|integer|min:0',
            'is_active'    => 'sometimes|boolean',
            'category' => 'required|in:primary,upper-primary,junior-college,principal,non-teaching',
        ]);

        // Handle Image Upload to public/assets/img/faculty
        if ($request->hasFile('image')) {
            $file = $request->file('image');

            // Generate a clean, unique filename
            $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                        . '-' . time() . '.' . $file->getClientOriginalExtension();

            // Move file directly to public/assets/img/faculty
            $file->move(public_path('assets/img/faculty'), $filename);

            $validated['image'] = 'assets/img/faculty/' . $filename;
        }

        $validated['is_active'] = $request->has('is_active');

        FacultyMember::create($validated);

        return redirect()
            ->route('admin.faculty.index')
            ->with('success', 'Faculty member created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FacultyMember $faculty)
    {
         return view('admin.faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FacultyMember $faculty)
    {
        $validated = $request->validate([
            'name'         => 'required|string|max:255',
            'designation'  => 'required|string|max:255',
            'subject'      => 'nullable|string|max:255',
            'qualification'=> 'nullable|string|max:255',
            'image'        => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description'  => 'nullable|string',
            'order'        => 'nullable|integer|min:0',
            'is_active'    => 'sometimes|boolean',
            'category' => 'required|in:primary,upper-primary,junior-college,principal,non-teaching',
        ]);

        // Handle Image Replacement
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($faculty->image && file_exists(public_path($faculty->image))) {
                @unlink(public_path($faculty->image));
            }

            $file = $request->file('image');
            $filename = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME))
                        . '-' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('assets/img/faculty'), $filename);

            $validated['image'] = 'assets/img/faculty/' . $filename;
        }
        // If no new image → keep old one (don't overwrite)

        $validated['is_active'] = $request->has('is_active');

        $faculty->update($validated);

        return redirect()
            ->route('admin.faculty.index')
            ->with('success', 'Faculty member updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
   public function destroy(FacultyMember $faculty)
    {
        if ($faculty->image && file_exists(public_path($faculty->image))) {
            @unlink(public_path($faculty->image));
        }

        $faculty->delete();

        return redirect()
            ->route('admin.faculty.index')
            ->with('success', 'Faculty member deleted successfully!');
    }
}
