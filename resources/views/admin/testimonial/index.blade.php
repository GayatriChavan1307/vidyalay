@extends('admin.layout')

@section('title', 'Manage Alumni Testimonials')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h4>Alumni Testimonials</h4>
    </div>
    <div class="card-body">
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-light">
                    <tr>
                        <th>Photo</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>WhatsApp</th>
                        <th>Passing Year</th>
                        <th>Category</th>
                        <th>Location</th>
                        <th>Profession</th>
                        <th>Testimonial</th>
                        <th>Status</th>
                        <th>Order</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($testimonials as $item)
                        <tr>
                            <td>
                                @if($item->image)
                                    <img src="{{ asset($item->image) }}" 
                                         alt="{{ $item->name }}" 
                                         class="rounded" 
                                         style="width: 60px; height: 60px; object-fit: cover;">
                                @else
                                    <div class="bg-light border rounded d-flex align-items-center justify-content-center" 
                                         style="width: 60px; height: 60px;">
                                        <small class="text-muted">No Image</small>
                                    </div>
                                @endif
                            </td>
                            <td><strong>{{ $item->name }}</strong></td>
                            <td>{{ $item->email ?? '-' }}</td>
                            <td>{{ $item->whatsapp ?? '-' }}</td>
                            <td>{{ $item->passing_year ?? '-' }}</td>
                            <td>
                                <span class="badge bg-info">
                                    {{ $item->category ?? '-' }}
                                </span>
                            </td>
                            <td>{{ $item->location ?? '-' }}</td>
                            <td>{{ $item->profession ?? '-' }}</td>
                            <td>{{ Str::limit($item->testimonial, 40) }}</td>
                            <td>
                                <span class="badge {{ $item->is_active ? 'bg-success' : 'bg-warning text-dark' }}">
                                    {{ $item->is_active ? 'Approved' : 'Pending' }}
                                </span>
                            </td>
                            <td>{{ $item->order }}</td>
                            <td>
                                <a href="{{ route('admin.testimonial.edit', $item) }}" 
                                   class="btn btn-sm btn-primary">
                                    <i class="bi bi-pencil"></i> Edit
                                </a>
                                <form action="{{ route('admin.testimonial.destroy', $item) }}" 
                                      method="POST" class="d-inline"
                                      onsubmit="return confirm('Are you sure you want to delete this entry?')">
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
                            <td colspan="12" class="text-center text-muted py-4">
                                No alumni registrations found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection