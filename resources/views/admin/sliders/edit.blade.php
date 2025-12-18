@extends('admin.layout')

@section('title', 'Edit Slider')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Edit Slider</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.sliders.update', $slider) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $slider->title) }}">
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ old('subtitle', $slider->subtitle) }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $slider->description) }}</textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                @if($slider->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $slider->image) }}" alt="Current image" style="max-width: 200px;">
                    </div>
                @endif
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <small class="text-muted">Leave empty to keep current image</small>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="button1_text" class="form-label">Button 1 Text</label>
                    <input type="text" class="form-control" id="button1_text" name="button1_text" value="{{ old('button1_text', $slider->button1_text) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="button1_link" class="form-label">Button 1 Link</label>
                    <input type="text" class="form-control" id="button1_link" name="button1_link" value="{{ old('button1_link', $slider->button1_link) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="button2_text" class="form-label">Button 2 Text</label>
                    <input type="text" class="form-control" id="button2_text" name="button2_text" value="{{ old('button2_text', $slider->button2_text) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <label for="button2_link" class="form-label">Button 2 Link</label>
                    <input type="text" class="form-control" id="button2_link" name="button2_link" value="{{ old('button2_link', $slider->button2_link) }}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', $slider->order) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', $slider->is_active) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update Slider</button>
            <a href="{{ route('admin.sliders.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

