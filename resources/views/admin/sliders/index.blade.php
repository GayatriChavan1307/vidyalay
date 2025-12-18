@extends('admin.layout')

@section('title', 'Manage Sliders')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Sliders</h3>
    <a href="{{ route('admin.sliders.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add New Slider
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Title</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($sliders as $slider)
                <tr>
                    <td>
                        @if($slider->image)
                            <img src="{{ asset('storage/' . $slider->image) }}" alt="{{ $slider->title }}" style="width: 100px; height: 60px; object-fit: cover;">
                        @else
                            <span class="text-muted">No image</span>
                        @endif
                    </td>
                    <td>{{ $slider->title ?? 'N/A' }}</td>
                    <td>{{ $slider->order }}</td>
                    <td>
                        <span class="badge {{ $slider->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $slider->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.sliders.edit', $slider) }}" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.sliders.destroy', $slider) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="bi bi-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">No sliders found. <a href="{{ route('admin.sliders.create') }}">Create one</a></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

