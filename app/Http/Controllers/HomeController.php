<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\GalleryItem;
use App\Models\TeamMember;
use App\Models\Testimonial;
use App\Models\Page;
use App\Models\FacultyMember;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::where('is_active', true)->orderBy('order')->get();
        $services = Service::where('is_active', true)->orderBy('order')->get();
        $galleryItems = GalleryItem::where('is_active', true)->where('type', 'photo')->orderBy('order')->limit(4)->get();
        $teamMembers = TeamMember::where('is_active', true)->orderBy('order')->limit(4)->get();
        $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
        
        return view('index', compact('sliders', 'services', 'galleryItems', 'teamMembers', 'testimonials'));
    }

    public function campus()
    {
        return view('campus');
    }

    public function history()
    {
        return view('history');
    }

   public function alumni()
    {
        $approvedAlumni = Testimonial::where('is_active', true)
                                     ->orderBy('order')
                                     ->get();

        return view('alumini', compact('approvedAlumni'));
    }

    public function alumniStore(Request $request)
    {
        $validated = $request->validate([
            'fullName'     => 'required|string|max:255',
            'email'        => 'required|email|unique:testimonials,email',
            'whatsapp'     => 'required|digits:10',
            'passingYear'  => 'required|integer|min:1950|max:' . (date('Y') + 1),
            'category'     => 'required|in:SSC,HSC,HSC-Commerce',
            'location'     => 'nullable|string|max:255',
            'designation'  => 'nullable|string|max:255',
            'profilePhoto' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
            'testimonial'  => 'nullable|string',
        ]);

        $alumni = new Testimonial();
        $alumni->name         = $validated['fullName'];
        $alumni->email        = $validated['email'];
        $alumni->whatsapp     = $validated['whatsapp'];
        $alumni->passing_year = $validated['passingYear'];
        $alumni->category     = $validated['category'];
        $alumni->location     = $validated['location'] ?? null;
        $alumni->profession   = $validated['designation'] ?? 'Alumni';
        $alumni->testimonial  = $validated['testimonial'] ?? 'माजी विद्यार्थी';
        $alumni->order        = 999;
        $alumni->is_active    = false; // Pending approval

        if ($request->hasFile('profilePhoto')) {
            $file = $request->file('profilePhoto');
            $filename = Str::slug($validated['fullName'] . '-' . time()) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('assets/img/alumni'), $filename);
            $alumni->image = 'assets/img/alumni/' . $filename;
        }

        $alumni->save();

        return back()->with('success', 'धन्यवाद! आपली नोंदणी यशस्वी झाली. प्रशासकाच्या मंजुरीनंतर ती प्रदर्शित होईल.');
    }

    public function admissions()
    {
        return view('admissions');
    }

    public function gallery()
    {
        $photos = GalleryItem::where('is_active', true)->where('type', 'photo')->orderBy('order')->get();
        $videos = GalleryItem::where('is_active', true)->where('type', 'video')->orderBy('order')->get();
        return view('gallery', compact('photos', 'videos'));
    }

     public function studentcare()
    {
        return view('studentcare');
    }

    public function activities()
    {
        return view('activities');
    }

    public function academics()
    {
        return view('academics');
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }

    public function team()
    {
        $teamMembers = TeamMember::where('is_active', true)->orderBy('order')->get();
        return view('team', compact('teamMembers'));
    }

    // public function testimonial()
    // {
    //     $testimonials = Testimonial::where('is_active', true)->orderBy('order')->get();
    //     return view('testimonial', compact('testimonials'));
    // }
    
    public function faculty()
{
    // 1. Principal (प्राचार्य) – only one, active
    $principal = FacultyMember::where('category', 'principal')
                              ->where('is_active', true)
                              ->first();

    // 2. All Teaching Staff (excluding principal & non-teaching)
    $teachingFaculty = FacultyMember::where('is_active', true)
                                    ->whereIn('category', ['primary', 'upper-primary', 'junior-college'])
                                    ->orderBy('order')
                                    ->get()
                                    ->groupBy('category');

    // 3. Non-Teaching Staff (सहाय्यक कर्मचारी)
    $nonTeaching = FacultyMember::where('category', 'non-teaching')
                                ->where('is_active', true)
                                ->orderBy('order')
                                ->get();

    // 4. Friendly Marathi names for teaching categories
    $categoryNames = [
        'primary'        => 'इयत्ता १ ली ते ५ वी (प्राथमिक विभाग)',
        'upper-primary'  => 'इयत्ता ६ वी ते १० वी (उच्च प्राथमिक व माध्यमिक)',
        'junior-college' => 'इयत्ता ११ वी व १२ वी (कनिष्ठ महाविद्यालय)',
    ];

    return view('faculty', compact(
        'principal',
        'teachingFaculty',
        'nonTeaching',
        'categoryNames'
    ));
}
public function getFacultyByCategory($category)
{
    $validCategories = ['primary', 'upper-primary', 'junior-college'];

    if (!in_array($category, $validCategories)) {
        return response()->json(['error' => 'Invalid category'], 404);
    }

    $faculty = FacultyMember::where('category', $category)
                            ->where('is_active', true)
                            ->orderBy('order')
                            ->get(['name', 'designation', 'subject', 'qualification', 'image']);

    return response()->json($faculty);
}
}
