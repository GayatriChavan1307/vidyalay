<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Service;
use App\Models\GalleryItem;
use App\Models\TeamMember;
use App\Models\FacultyMember;
use App\Models\Testimonial;
use App\Models\Page;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'sliders' => Slider::count(),
            'services' => Service::count(),
            'gallery_items' => GalleryItem::count(),
            'team_members' => TeamMember::count(),
            'faculty_members' => FacultyMember::count(),
            'testimonials' => Testimonial::count(),
            'pages' => Page::count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }
}
