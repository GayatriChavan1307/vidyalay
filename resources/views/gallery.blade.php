@include('layout.header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Gallery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Gallery</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">आमच्या आठवणी</h6>
                <h1 class="mb-5">फोटो आणि व्हिडिओ गॅलरी</h1>
            </div>

            <!-- Tabs -->
            <ul class="nav nav-pills mb-5 justify-content-center wow fadeInUp" data-wow-delay="0.1s">
                <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="pill" href="#photos">फोटो गॅलरी</button>
                </li>
                <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="pill" href="#videos">व्हिडिओ गॅलरी</button>
                </li>
            </ul>

            <div class="tab-content">

                <!-- Photos Tab -->
                <div id="photos" class="tab-pane fade show active">
                    <div class="row g-3">
                        <!-- यहाँ आप जितने भी फोटो चाहें डाल सकते हैं -->
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/1.jpg" data-lightbox="school" data-title="प्रजासत्ताक दिन">
                                <img src="img/gallery/1.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/2.jpg" data-lightbox="school" data-title="वार्षिक क्रीडा स्पर्धा">
                                <img src="img/gallery/2.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/3.jpg" data-lightbox="school" data-title="सांस्कृतिक कार्यक्रम">
                                <img src="img/gallery/3.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/4.jpg" data-lightbox="school" data-title="विज्ञान प्रदर्शन">
                                <img src="img/gallery/4.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt="">
                            </a>
                        </div>
                        <!-- और फोटो यहाँ जोड़ते रहें... -->
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/5.jpg" data-lightbox="school"><img src="img/gallery/5.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/6.jpg" data-lightbox="school"><img src="img/gallery/6.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/7.jpg" data-lightbox="school"><img src="img/gallery/7.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt=""></a>
                        </div>
                        <div class="col-lg-3 col-md-4 col-6">
                            <a href="img/gallery/8.jpg" data-lightbox="school"><img src="img/gallery/8.jpg" class="img-fluid rounded w-100" style="height: 220px; object-fit: cover;" alt=""></a>
                        </div>
                        <!-- आप 50+ फोटो भी डाल सकते हैं, बस इसी तरह कॉपी-पेस्ट करें -->
                    </div>
                </div>

                <!-- Videos Tab -->
                <div id="videos" class="tab-pane fade">
                    <div class="row g-4">
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                            <a href="https://www.youtube.com/watch?v=ABCDEFG1234" data-lightbox="video" data-title="वार्षिक सांस्कृतिक महोत्सव 2025">
                                <div class="position-relative overflow-hidden rounded">
                                    <img src="img/video-thumb-1.jpg" class="img-fluid w-100" style="height: 300px; object-fit: cover;" alt="">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa fa-play-circle text-white fa-5x"></i>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-center">वार्षिक सांस्कृतिक महोत्सव 2025</h5>
                            </a>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                            <a href="https://www.youtube.com/watch?v=XYZ12345678" data-lightbox="video" data-title="प्रजासत्ताक दिन संचलन">
                                <div class="position-relative overflow-hidden rounded">
                                    <img src="img/video-thumb-2.jpg" class="img-fluid w-100" style="height: 300px; object-fit: cover;" alt="">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa fa-play-circle text-white fa-5x"></i>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-center">प्रजासत्ताक दिन संचलन 2025</h5>
                            </a>
                        </div>

                        <!-- और व्हिडिओ यहाँ डालें -->
                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                            <a href="https://www.youtube.com/watch?v=LMN98765432" data-lightbox="video" data-title="खेळ स्पर्धा हायलाइट्स">
                                <div class="position-relative overflow-hidden rounded">
                                    <img src="img/video-thumb-3.jpg" class="img-fluid w-100" style="height: 300px; object-fit: cover;" alt="">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa fa-play-circle text-white fa-5x"></i>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-center">वार्षिक क्रीडा स्पर्धा 2024</h5>
                            </a>
                        </div>

                        <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.7s">
                            <a href="https://www.youtube.com/watch?v=PQR11223344" data-lightbox="video" data-title="शाळेची ओळख">
                                <div class="position-relative overflow-hidden rounded">
                                    <img src="img/video-thumb-4.jpg" class="img-fluid w-100" style="height: 300px; object-fit: cover;" alt="">
                                    <div class="position-absolute top-50 start-50 translate-middle">
                                        <i class="fa fa-play-circle text-white fa-5x"></i>
                                    </div>
                                </div>
                                <h5 class="mt-3 text-center">भारत विद्यालय - एक झलक</h5>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Gallery End -->
@include('layout.footer')