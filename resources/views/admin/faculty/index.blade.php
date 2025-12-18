@extends('admin.layout')

@section('title', 'Manage Faculty')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Faculty</h3>
    <a href="{{ route('admin.faculty.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add New Faculty
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
    <tr>
        <th>Name</th>
        <th>Designation</th>
        <th>Image</th>
        <th>Order</th>
        <th>Education</th> <!-- Qualification -->
        <th>Standard</th> <!-- Subject -->
        <th>Status</th> <!-- Add this to match common pattern -->
        <th>Actions</th>
    </tr>
</thead>
<tbody>
    @forelse($faculties as $faculty)
        <tr>
            <td>{{ $faculty->name }}</td>
            <td>{{ Str::limit($faculty->designation, 50) }}</td>
            <td>
                @if($faculty->image)
    <img src="{{ asset($faculty->image) }}" 
         alt="{{ $faculty->name }}" 
         class="img-thumbnail" 
         style="width: 80px; height: 80px; object-fit: cover;">
@else
    <span class="text-muted">No Image</span>
@endif
            </td>
            <td>{{ $faculty->order ?? 'N/A' }}</td>
            <td>{{ $faculty->qualification ?? 'N/A' }}</td>
            <td>{{ $faculty->subject ?? 'N/A' }}</td>
            <td>
                <span class="badge {{ $faculty->is_active ? 'bg-success' : 'bg-secondary' }}">
                    {{ $faculty->is_active ? 'Active' : 'Inactive' }}
                </span>
            </td>
            <td>
                <a href="{{ route('admin.faculty.edit', $faculty) }}" class="btn btn-sm btn-primary">
                    <i class="bi bi-pencil"></i> Edit
                </a>
                <form action="{{ route('admin.faculty.destroy', $faculty) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
            <td colspan="8" class="text-center">No faculty found. <a href="{{ route('admin.faculty.create') }}">Create one</a></td>
        </tr>
    @endforelse
</tbody>
    </table>
</div>
@endsection