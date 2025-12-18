<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Bharat Vidyalaya, Kanishtha Mahavidyalaya - Nhavi</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.ico') }}">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link rel="stylesheet" href="{{ asset('lib/animate/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}">

    <!-- Bootstrap Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- Template Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

<!-- Spinner Start -->
<div id="spinner"
     class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->

<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ url('/') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h3 class="m-0 text-primary">
            <i class="fa fa-book me-3"></i>
            भारत विद्यालय व कनिष्ठ महाविद्यालय
        </h3>
    </a>

    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
            <a href="{{ route('about')}}" class="nav-item nav-link">About</a>
            <a href="{{ route('campus') }}" class="nav-item nav-link">Campus</a>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('academics') }}" class="dropdown-item">Academics</a>
                    <a href="{{ route('activities') }}" class="dropdown-item">Activities</a>
                    <a href="{{ route('gallery') }}" class="dropdown-item">Gallery</a>
                    <a href="{{ route('history') }}" class="dropdown-item">History</a>
                    <a href="{{ route('faculty') }}" class="dropdown-item">Faculty</a>
                    <a href="{{ url('/studentcare') }}" class="dropdown-item">Student Care</a>
                </div>
            </div>

            <a href="{{ url('/admissions') }}" class="nav-item nav-link">Admissions</a>
            <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
        </div>

        <a href="{{ route('alumni') }}" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">
            Alumini <i class="fa fa-arrow-right ms-3"></i>
        </a>
    </div>
</nav>
<!-- Navbar End -->
