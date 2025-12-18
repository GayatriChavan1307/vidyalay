@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <h5 class="card-title">Sliders</h5>
                <h2>{{ $stats['sliders'] }}</h2>
                <a href="{{ route('admin.sliders.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-success">
            <div class="card-body">
                <h5 class="card-title">Services</h5>
                <h2>{{ $stats['services'] }}</h2>
                <a href="{{ route('admin.services.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-info">
            <div class="card-body">
                <h5 class="card-title">Gallery Items</h5>
                <h2>{{ $stats['gallery_items'] }}</h2>
                <a href="{{ route('admin.gallery.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <h5 class="card-title">Team Members</h5>
                <h2>{{ $stats['team_members'] }}</h2>
                <a href="{{ route('admin.team.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-danger">
            <div class="card-body">
                <h5 class="card-title">Faculty Members</h5>
                <h2>{{ $stats['faculty_members'] }}</h2>
                <a href="{{ route('admin.faculty.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-secondary">
            <div class="card-body">
                <h5 class="card-title">Testimonials</h5>
                <h2>{{ $stats['testimonials'] }}</h2>
                <a href="{{ route('admin.testimonials.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 mb-4">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title">Pages</h5>
                <h2>{{ $stats['pages'] }}</h2>
                <a href="{{ route('admin.pages.index') }}" class="text-white">Manage →</a>
            </div>
        </div>
    </div>
</div>
@endsection

