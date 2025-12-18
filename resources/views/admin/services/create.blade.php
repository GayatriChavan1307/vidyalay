@extends('admin.layout')

@section('title', 'Create Service')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Create New Service</h4>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.services.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
            </div>
            <div class="mb-3">
                <label for="icon" class="form-label">Icon Class (e.g., fa fa-graduation-cap)</label>
                <input type="text" class="form-control" id="icon" name="icon" value="{{ old('icon') }}" placeholder="fa fa-star">
                <small class="text-muted">Font Awesome icon class</small>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="order" class="form-label">Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ old('order', 0) }}">
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-check mt-4">
                        <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active">Active</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create Service</button>
            <a href="{{ route('admin.services.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>
@endsection

