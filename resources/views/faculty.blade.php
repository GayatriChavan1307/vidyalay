@include('layout.header')

<!-- Page Header Start -->
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">आमचे शिक्षक व कर्मचारी</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">मुख्यपृष्ठ</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">शिक्षक व कर्मचारी</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Principal Section -->
<!-- Principal Section Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">प्राचार्य</h6>
            <h1 class="mb-5">प्राचार्य</h1>
        </div>

        @if($principal)
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-7 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item bg-light rounded overflow-hidden shadow text-center">
                        <div class="position-relative">
                            <img class="img-fluid" 
                                 src="{{ $principal->image ? asset($principal->image) : asset('img/default-principal.jpg') }}" 
                                 alt="{{ $principal->name }}" 
                                 style="height: 450px; object-fit: cover; width: 100%;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="fw-bold mb-0">{{ $principal->name }}</h5>
                            <small class="text-primary">{{ $principal->designation }}</small>
                            <p class="mt-2">{{ $principal->qualification }}</p>
                            @if($principal->description)
                                <p class="text-muted small">{!! nl2br(e($principal->description)) !!}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center py-5">
                <p class="text-muted fs-5">प्राचार्याची माहिती सध्या उपलब्ध नाही.</p>
            </div>
        @endif
    </div>
</div>
<!-- Principal Section End -->

<!-- Teaching Staff Categories -->
<div class="container-xxl py-5 bg-light">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">शिक्षक वर्ग</h6>
            <h1 class="mb-5">शिक्षक विभागनिहाय</h1>
        </div>

        <!-- Category Buttons -->
        <div class="row g-4 mb-5 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="category-card text-center p-5 bg-white rounded shadow wow fadeInUp cursor-pointer" data-target="primary">
                    <i class="fa fa-child fa-4x text-primary mb-4"></i>
                    <h4>इयत्ता १ ली ते ५ वी</h4>
                    <p>प्राथमिक विभाग शिक्षक</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card text-center p-5 bg-white rounded shadow wow fadeInUp cursor-pointer" data-target="upper-primary">
                    <i class="fa fa-book-reader fa-4x text-primary mb-4"></i>
                    <h4>इयत्ता ६ वी ते १० वी</h4>
                    <p>उच्च प्राथमिक व माध्यमिक शिक्षक</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="category-card text-center p-5 bg-white rounded shadow wow fadeInUp cursor-pointer" data-target="junior-college">
                    <i class="fa fa-graduation-cap fa-4x text-primary mb-4"></i>
                    <h4>इयत्ता ११ वी व १२ वी</h4>
                    <p>कनिष्ठ महाविद्यालय शिक्षक</p>
                </div>
            </div>
        </div>

        <!-- Dynamic Staff Display -->
        <div id="staff-container" class="row g-4">
            <div class="col-12 text-center">
                <p class="text-muted fs-4">वरील कोणताही विभाग निवडा</p>
            </div>
        </div>
    </div>
</div>

<!-- Non-Teaching Staff (Static) -->
<!-- Non-Teaching Staff Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">सहाय्यक कर्मचारी</h6>
            <h1 class="mb-5">सहाय्यक कर्मचारी</h1>
        </div>

        @if($nonTeaching->count() > 0)
            <div class="row g-4 justify-content-center">
                @foreach($nonTeaching as $staff)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.{{ $loop->iteration }}s">
                        <div class="team-item bg-light text-center rounded shadow p-4">
                            <img class="rounded-circle mb-4" 
                                 src="{{ $staff->image ? asset($staff->image) : asset('img/default-staff.jpg') }}" 
                                 alt="{{ $staff->name }}"
                                 style="width: 140px; height: 140px; object-fit: cover;">
                            <h5 class="mb-1">{{ $staff->name }}</h5>
                            <small class="text-primary">{{ $staff->designation }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-5">
                <p class="text-muted fs-5">सहाय्यक कर्मचारी यांची माहिती सध्या उपलब्ध नाही.</p>
            </div>
        @endif
    </div>
</div>
<!-- Non-Teaching Staff End -->

<!-- AJAX Script -->
<script>
document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.category-card').forEach(card => {
        card.addEventListener('click', function () {
            // Reset active styles
            document.querySelectorAll('.category-card').forEach(c => {
                c.classList.remove('border-primary', 'shadow-lg');
                c.style.transform = 'scale(1)';
            });

            // Highlight clicked card
            this.classList.add('border-primary', 'shadow-lg');
            this.style.transform = 'scale(1.05)';

            const category = this.getAttribute('data-target');
            const staffContainer = document.getElementById('staff-container');

            // Show loading spinner
            staffContainer.innerHTML = `
                <div class="col-12 text-center">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">लोड होत आहे...</span>
                    </div>
                </div>
            `;

            // Fetch data from server
            fetch(`/faculty-members/${category}`)
                .then(response => {
                    if (!response.ok) throw new Error('Network error');
                    return response.json();
                })
                .then(data => {
                    staffContainer.innerHTML = '';

                    if (data.length === 0) {
                        staffContainer.innerHTML = `
                            <div class="col-12 text-center">
                                <p class="text-muted fs-4">या विभागात सध्या शिक्षकांची माहिती उपलब्ध नाही.</p>
                            </div>
                        `;
                        return;
                    }

                    data.forEach((teacher, index) => {
                        const col = document.createElement('div');
                        col.className = 'col-lg-3 col-md-6 wow fadeInUp';
                        col.setAttribute('data-wow-delay', (0.1 + index * 0.1) + 's');

                        const imageUrl = teacher.image 
                            ? '{{ asset("") }}' + teacher.image 
                            : '{{ asset("img/default-teacher.jpg") }}'; // fallback image

                        col.innerHTML = `
                            <div class="team-item bg-white text-center rounded shadow p-4">
                                <img class="rounded-circle mb-4" 
                                     src="${imageUrl}" 
                                     alt="${teacher.name}"
                                     style="width: 150px; height: 150px; object-fit: cover;">
                                <h5 class="mb-1">${teacher.name}</h5>
                                <small class="text-primary d-block">${teacher.designation || ''}</small>
                                ${teacher.subject ? `<small class="text-muted d-block">विषय: ${teacher.subject}</small>` : ''}
                                <p class="mb-0 text-muted small">${teacher.qualification || ''}</p>
                            </div>
                        `;
                        staffContainer.appendChild(col);
                    });

                    // Re-init WOW.js animation if you're using it
                    if (typeof WOW !== 'undefined') {
                        new WOW().init();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    staffContainer.innerHTML = `
                        <div class="col-12 text-center text-danger">
                            <p>डेटा लोड करण्यात त्रुटी आली. कृपया पुन्हा प्रयत्न करा.</p>
                        </div>
                    `;
                });
        });

        // Hover effects
        card.addEventListener('mouseenter', () => this.style.transform = 'scale(1.05)');
        card.addEventListener('mouseleave', () => {
            if (!this.classList.contains('border-primary')) {
                this.style.transform = 'scale(1)';
            }
        });
    });
});
</script>

<style>
    .cursor-pointer { cursor: pointer; }
    .border-primary { border: 4px solid #007bff !important; }
</style>
@include('layout.footer')