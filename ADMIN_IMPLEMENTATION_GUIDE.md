# Admin Dashboard Implementation Guide

## Overview
This document outlines the dynamic admin dashboard system created for Bharat Vidyalay website. The system allows you to manage all website content through a web-based admin panel.

## What Has Been Created

### 1. Database Structure
- ✅ **Sliders Table** - For homepage carousel/slider management
- ✅ **Services Table** - For homepage service/feature cards
- ✅ **Gallery Items Table** - For photo and video gallery
- ✅ **Team Members Table** - For team/management members
- ✅ **Faculty Members Table** - For teaching and non-teaching staff
- ✅ **Testimonials Table** - For alumni/student testimonials
- ✅ **Pages Table** - For dynamic page content
- ✅ **Contact Info Table** - For contact information management

### 2. Models
All Eloquent models have been created with proper fillable fields and casts.

### 3. Admin Authentication
- Login system implemented
- Admin routes protected with authentication middleware
- Login page created at `/admin/login`

### 4. Admin Dashboard
- Dashboard overview with statistics
- Sidebar navigation
- Admin layout template

### 5. Admin Controllers
- ✅ **SliderController** - Fully implemented with CRUD operations
- ⚠️ **Other Controllers** - Need similar implementation (see template below)

### 6. Frontend Updates
- HomeController updated to fetch data from database
- Index page updated to use dynamic sliders and services
- Other pages need similar updates

## Accessing the Admin Panel

1. **Create an Admin User** (if not exists):
   ```bash
   php artisan tinker
   ```
   Then run:
   ```php
   \App\Models\User::create([
       'name' => 'Admin',
       'email' => 'admin@example.com',
       'password' => bcrypt('password'),
   ]);
   ```

2. **Login**: Navigate to `/admin/login` and use your credentials

3. **Dashboard**: After login, you'll be redirected to `/admin/dashboard`

## Implementing Remaining Controllers

Use the SliderController as a template. Here's the pattern:

### Controller Structure
```php
<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\[ModelName];
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class [ControllerName] extends Controller
{
    public function index()
    {
        $items = [ModelName]::orderBy('order')->get();
        return view('admin.[view-folder].index', compact('items'));
    }

    public function create()
    {
        return view('admin.[view-folder].create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Add validation rules
        ]);

        // Handle file uploads if needed
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('[folder]', 'public');
        }

        [ModelName]::create($validated);
        return redirect()->route('admin.[route].index')->with('success', 'Created successfully!');
    }

    public function edit([ModelName] $item)
    {
        return view('admin.[view-folder].edit', compact('item'));
    }

    public function update(Request $request, [ModelName] $item)
    {
        $validated = $request->validate([
            // Add validation rules
        ]);

        // Handle file uploads if needed
        if ($request->hasFile('image')) {
            if ($item->image) {
                Storage::disk('public')->delete($item->image);
            }
            $validated['image'] = $request->file('image')->store('[folder]', 'public');
        }

        $item->update($validated);
        return redirect()->route('admin.[route].index')->with('success', 'Updated successfully!');
    }

    public function destroy([ModelName] $item)
    {
        if ($item->image) {
            Storage::disk('public')->delete($item->image);
        }
        $item->delete();
        return redirect()->route('admin.[route].index')->with('success', 'Deleted successfully!');
    }
}
```

### View Structure
Create three views for each resource:
1. `index.blade.php` - List all items
2. `create.blade.php` - Create new item form
3. `edit.blade.php` - Edit existing item form

Use the slider views as templates.

## Updating Frontend Views

Update the following views to use dynamic data:

1. **gallery.blade.php** - Use `$photos` and `$videos` variables
2. **team.blade.php** - Use `$teamMembers` variable
3. **testimonial.blade.php** - Use `$testimonials` variable
4. **faculty.blade.php** - Use `$principal` and `$faculty` variables

Example update pattern:
```blade
@forelse($items as $item)
    <!-- Display item -->
@empty
    <!-- Fallback content -->
@endforelse
```

## File Storage

- Images are stored in `storage/app/public/[folder]`
- Make sure to run: `php artisan storage:link` to create symbolic link
- Access images via: `asset('storage/' . $item->image)`

## Next Steps

1. Implement remaining controllers (Service, Gallery, Team, Faculty, Testimonial, Page, ContactInfo)
2. Create admin views for each controller
3. Update all frontend views to use database data
4. Test file uploads and ensure storage link is created
5. Add validation and error handling
6. Consider adding image optimization/resizing

## Routes

All admin routes are prefixed with `/admin` and protected by authentication:
- `/admin/dashboard` - Dashboard
- `/admin/sliders` - Slider management
- `/admin/services` - Service management
- `/admin/gallery` - Gallery management
- `/admin/team` - Team management
- `/admin/faculty` - Faculty management
- `/admin/testimonials` - Testimonial management
- `/admin/pages` - Page management
- `/admin/contact-info` - Contact info management

## Notes

- All controllers follow RESTful resource routing
- File uploads use Laravel's Storage facade
- Images are stored in public disk
- Remember to create storage link: `php artisan storage:link`
- Admin authentication uses Laravel's built-in auth system

