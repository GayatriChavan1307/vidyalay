@extends('admin.layout')

@section('title', 'Manage Services')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h3>Services</h3>
    <a href="{{ route('admin.services.create') }}" class="btn btn-primary">
        <i class="bi bi-plus-circle"></i> Add New Service
    </a>
</div>

<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Order</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($services as $service)
                <tr>
                    <td>{{ $service->title }}</td>
                    <td>{{ Str::limit($service->description, 50) }}</td>
                    <td>{{ $service->icon ?? 'N/A' }}</td>
                    <td>{{ $service->order }}</td>
                    <td>
                        <span class="badge {{ $service->is_active ? 'bg-success' : 'bg-secondary' }}">
                            {{ $service->is_active ? 'Active' : 'Inactive' }}
                        </span>
                    </td>
                    <td>
                        <a href="{{ route('admin.services.edit', $service) }}" class="btn btn-sm btn-primary">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                        <form action="{{ route('admin.services.destroy', $service) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?')">
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
                    <td colspan="6" class="text-center">No services found. <a href="{{ route('admin.services.create') }}">Create one</a></td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

