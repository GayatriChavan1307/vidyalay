@extends('admin.layout')

@section('title', 'Edit Alumni Testimonial')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Alumni Entry: {{ $testimonial->name }}</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.testimonial.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <!-- Name -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" 
                               id="name" name="name" value="{{ old('name', $testimonial->name) }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" 
                               id="email" name="email" value="{{ old('email', $testimonial->email) }}">
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- WhatsApp -->
                    <div class="mb-3">
                        <label for="whatsapp" class="form-label">WhatsApp Number</label>
                        <input type="text" class="form-control @error('whatsapp') is-invalid @enderror" 
                               id="whatsapp" name="whatsapp" value="{{ old('whatsapp', $testimonial->whatsapp) }}" 
                               placeholder="10-digit number">
                        @error('whatsapp') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>

                    <!-- Passing Year -->
                    <div class="mb-3">
                        <label for="passing_year" class="form-label">Passing Year</label>
                        <input type="number" class="form-control" 
                               id="passing_year" name="passing_year" 
                               value="{{ old('passing_year', $testimonial->passing_year) }}" 
                               min="1950" max="{{ date('Y') + 5 }}">
                    </div>

                    <!-- Category -->
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <select class="form-select" id="category" name="category">
                            <option value="">-- Select --</option>
                            <option value="SSC" {{ old('category', $testimonial->category) == 'SSC' ? 'selected' : '' }}>SSC (इयत्ता १० वी)</option>
                            <option value="HSC" {{ old('category', $testimonial->category) == 'HSC' ? 'selected' : '' }}>HSC - विज्ञान</option>
                            <option value="HSC-Commerce" {{ old('category', $testimonial->category) == 'HSC-Commerce' ? 'selected' : '' }}>HSC - वाणिज्य</option>
                        </select>
                    </div>

                    <!-- Location -->
                    <div class="mb-3">
                        <label for="location" class="form-label">Current Location</label>
                        <input type="text" class="form-control" 
                               id="location" name="location" 
                               value="{{ old('location', $testimonial->location) }}" 
                               placeholder="e.g., Mumbai, USA">
                    </div>

                    <!-- Profession -->
                    <div class="mb-3">
                        <label for="profession" class="form-label">Profession / Designation</label>
                        <input type="text" class="form-control" 
                               id="profession" name="profession" 
                               value="{{ old('profession', $testimonial->profession) }}" 
                               placeholder="e.g., Software Engineer">
                    </div>

                    <!-- Order -->
                    <div class="mb-3">
                        <label for="order" class="form-label">Display Order</label>
                        <input type="number" class="form-control" 
                               id="order" name="order" 
                               value="{{ old('order', $testimonial->order ?? 999) }}" min="0">
                    </div>

                    <!-- Approval Status -->
                    <div class="form-check mb-3">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1"
                               {{ old('is_active', $testimonial->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label fw-bold text-success" for="is_active">
                            Approved & Visible on Frontend
                        </label>
                    </div>
                </div>

                <div class="col-md-6">
                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Profile Photo</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" 
                               id="image" name="image" accept="image/*">
                        <small class="text-muted">Leave empty to keep current photo</small>
                        @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror

                        @if($testimonial->image)
                            <div class="mt-3">
                                <p><strong>Current Photo:</strong></p>
                                <img src="{{ asset($testimonial->image) }}" 
                                     alt="Current photo" class="img-thumbnail" style="max-height: 250px;">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Testimonial Message -->
            <div class="mb-4">
                <label for="testimonial" class="form-label">Testimonial / Message from Alumni</label>
                <textarea class="form-control" id="testimonial" name="testimonial" rows="6"
                          placeholder="Alumni's message or experience...">{{ old('testimonial', $testimonial->testimonial) }}</textarea>
            </div>

            <!-- Submit Buttons -->
            <div class="mt-4">
                <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-save"></i> Update Entry
                </button>
                <a href="{{ route('admin.testimonial.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection