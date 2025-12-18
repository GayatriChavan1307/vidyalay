@extends('admin.layout')

@section('title', 'Manage Team')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Team</h3>
    <a href="{{ route('admin.team.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add New Team Member
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($faculties as $faculty)
                <tr>
                    <td>{{ $faculty->title }}</td>
                    <td>{{ Str::limit($faculty->description, 50) }}</td>
                    <td>{{ $faculty->image ?? 'N/A' }}</td>
                    <td>{{ $faculty->order }}</td>
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
                    <td colspan="6" class="text-center">No faculty found. <a href="{{ route('admin.faculty.create') }}">Create one</a></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection