@extends('admin.layout')

@section('title', 'Edit Faculty')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Faculty Member: {{ $faculty->name }}</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.faculty.update', $faculty) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                name="name" value="{{ old('name', $faculty->name) }}" required>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="designation" class="form-label">Designation <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('designation') is-invalid @enderror"
                                id="designation" name="designation" value="{{ old('designation', $faculty->designation) }}"
                                required>
                            @error('designation')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="qualification" class="form-label">Education / Qualification</label>
                            <input type="text" class="form-control" id="qualification" name="qualification"
                                value="{{ old('qualification', $faculty->qualification) }}">
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label">Standard / Subject</label>
                            <input type="text" class="form-control" id="subject" name="subject"
                                value="{{ old('subject', $faculty->subject) }}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Department / Category <span
                                    class="text-danger">*</span></label>
                            <select class="form-control @error('category') is-invalid @enderror" id="category"
                                name="category" required>
                                <option value="">-- Select Category --</option>
                                <option value="principal" {{ old('category', $faculty->category ?? '') == 'principal' ? 'selected' : '' }}>
                                    प्राचार्य (Principal)
                                </option>
                                <option value="non-teaching" {{ old('category', $faculty->category ?? '') == 'non-teaching' ? 'selected' : '' }}>
                                    सहाय्यक कर्मचारी (Non-Teaching Staff)
                                </option>

                                <option value="primary" {{ old('category', $faculty->category ?? '') == 'primary' ? 'selected' : '' }}>
                                    इयत्ता १ ली ते ५ वी (Primary)
                                </option>
                                <option value="upper-primary" {{ old('category', $faculty->category ?? '') == 'upper-primary' ? 'selected' : '' }}>
                                    इयत्ता ६ वी ते १० वी (Upper Primary)
                                </option>
                                <option value="junior-college" {{ old('category', $faculty->category ?? '') == 'junior-college' ? 'selected' : '' }}>
                                    इयत्ता ११ वी व १२ वी (Junior College)
                                </option>
                            </select>
                            @error('category')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="image" class="form-label">Faculty Image</label>
                            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image"
                                name="image" accept="image/*">
                            <small class="text-muted">Leave empty to keep current image</small>
                            @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                            @if($faculty->image)
                                <div class="mt-3">
                                    <p><strong>Current Image:</strong></p>
                                    <img src="{{ asset('storage/' . $faculty->image) }}" alt="Current faculty image"
                                        class="img-thumbnail" style="max-height: 200px;">
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description / Bio</label>
                            <textarea class="form-control" id="description" name="description"
                                rows="6">{{ old('description', $faculty->description) }}</textarea>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="mb-3">
                                    <label for="order" class="form-label">Display Order</label>
                                    <input type="number" class="form-control" id="order" name="order"
                                        value="{{ old('order', $faculty->order ?? 0) }}" min="0">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check mt-4">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active"
                                        value="1" {{ old('is_active', $faculty->is_active) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="is_active">Active (Visible on frontend)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Faculty Member</button>
                    <a href="{{ route('admin.faculty.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
@endsection