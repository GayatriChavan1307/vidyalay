@include('layout.header')
   
<style>
    .hover-shadow {
        transition: 0.3s;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .hover-shadow:hover {
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    /* Carousel image center vertically */
    .carousel-item img {
        object-fit: contain;
        max-height: 80vh;
    }
</style>

    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">आमची इतिहास</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">मुख्यपृष्ठ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">इतिहास</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- History Intro Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <img class="img-fluid rounded" src="img/aboutbanner.jpg" alt="शाळेची जुनी इमारत"
                        style="height: 450px; object-fit: cover;">
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">स्थापना</h6>
                    <h1 class="mb-4">भारत विद्यालयाची स्वातंत्र्योत्तर प्रेरणादायी सुरुवात</h1>
                    <p class="mb-4">भारत विद्यालय व कनिष्ठ महाविद्यालयाची स्थापना <strong>१९४७</strong> साली, भारताच्या
                        स्वातंत्र्य प्राप्तीनंतर लगेचच झाली. ग्रामीण भागातील मुलांना मराठी माध्यमातून दर्जेदार शिक्षण
                        मिळावे या उदात्त हेतूने काही देशभक्त समाजसेवकांनी ही शाळा सुरू केली.</p>
                    <p class="mb-4">स्वातंत्र्यलढ्यातील प्रेरणेने प्रेरित होऊन सुरुवातीला फक्त ४० विद्यार्थी आणि २
                        शिक्षकांसह एका छोट्याशा खोलीत शाळेची सुरुवात झाली. स्थानिक समाजाच्या पाठिंब्याने शाळा हळूहळू
                        वाढत गेली.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- History Intro End -->

    <!-- Timeline Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">वाटचाल</h6>
                <h1 class="mb-5">महत्त्वाचे टप्पे</h1>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="timeline-container position-relative">

                        <!-- Timeline Line -->
                        <div class="timeline-line"></div>

                        <!-- 1947 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="timeline-content-left order-2 order-md-1 text-md-end">
                                <div class="timeline-box">
                                    <h5>शाळेची स्थापना</h5>
                                    <p>स्वातंत्र्य प्राप्तीनंतर लगेचच बालवर्ग ते इयत्ता ४ थी पर्यंत शाळा सुरू. पहिले
                                        प्राचार्य श्री. बाबूराव पाटील.</p>
                                </div>
                            </div>
                            <div class="timeline-date-circle order-1 order-md-2">१९४७</div>
                            <div class="timeline-content-right order-3 d-none d-md-block"></div>
                        </div>

                        <!-- 1960 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="timeline-content-left order-2 d-none d-md-block"></div>
                            <div class="timeline-date-circle order-1 order-md-2">१९६०</div>
                            <div class="timeline-content-right order-3">
                                <div class="timeline-box">
                                    <h5>प्राथमिक विभाग पूर्ण</h5>
                                    <p>इयत्ता १ ली ते ७ वी पर्यंत विस्तार. विद्यार्थी संख्या ३०० पार.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 1975 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="timeline-content-left order-2 order-md-1 text-md-end">
                                <div class="timeline-box">
                                    <h5>माध्यमिक विभाग सुरू</h5>
                                    <p>इयत्ता ८ वी ते १० वी पर्यंत शाळा वाढली. पहिला SSC बॅच उत्कृष्ट निकाल.</p>
                                </div>
                            </div>
                            <div class="timeline-date-circle order-1 order-md-2">१९७५</div>
                            <div class="timeline-content-right order-3 d-none d-md-block"></div>
                        </div>

                        <!-- 1985 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.4s">
                            <div class="timeline-content-left order-2 d-none d-md-block"></div>
                            <div class="timeline-date-circle order-1 order-md-2">१९८५</div>
                            <div class="timeline-content-right order-3">
                                <div class="timeline-box">
                                    <h5>स्वतंत्र इमारत</h5>
                                    <p>नवी प्रशस्त इमारत व खेळाचे मैदान बांधले गेले.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 2000 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="timeline-content-left order-2 order-md-1 text-md-end">
                                <div class="timeline-box">
                                    <h5>कनिष्ठ महाविद्यालय सुरू</h5>
                                    <p>इयत्ता ११ वी व १२ वी (विज्ञान व वाणिज्य) शाखा सुरू. आधुनिक प्रयोगशाळा उभारल्या.
                                    </p>
                                </div>
                            </div>
                            <div class="timeline-date-circle order-1 order-md-2">२०००</div>
                            <div class="timeline-content-right order-3 d-none d-md-block"></div>
                        </div>

                        <!-- 2025 -->
                        <div class="timeline-row d-flex align-items-center mb-5 wow fadeInUp" data-wow-delay="0.6s">
                            <div class="timeline-content-left order-2 d-none d-md-block"></div>
                            <div class="timeline-date-circle order-1 order-md-2">२०२५</div>
                            <div class="timeline-content-right order-3">
                                <div class="timeline-box">
                                    <h5>आजची स्थिती</h5>
                                    <p>७८ वर्षांचा वारसा • १५००+ विद्यार्थी • ७०+ शिक्षक-कर्मचारी • स्मार्ट क्लासरूम •
                                        उत्कृष्ट प्रयोगशाळा • सलग अनेक वर्षे १००% निकाल.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Timeline End -->

    <!-- Vision & Legacy Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">वारसा</h6>
                    <h1 class="mb-4">आमचा गौरवशाली वारसा व भविष्यकाळ</h1>
                    <p class="mb-4">१९४७ पासून आजपर्यंत भारत विद्यालयाने हजारो विद्यार्थ्यांना शिक्षण दिले आहे. आमचे
                        माजी विद्यार्थी देश-विदेशात डॉक्टर, इंजिनिअर, अधिकारी, उद्योजक व समाजसेवक म्हणून यशस्वी आहेत.
                    </p>
                    <p class="mb-4">आमचे ध्येय कायम आहे – <strong>"विद्या विनयेन शोभते"</strong> – विद्या विनयाने
                        सुशोभित होते.</p>
                    <p>ग्रामीण भागातील मुला-मुलींना उज्ज्वल भविष्य देण्याची आमची परंपरा आजही सुरू आहे.</p>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <img class="img-fluid rounded" src="img/gallery3.jpg" alt="आजची शाळा"
                        style="height: 450px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
    <!-- Vision & Legacy End -->

    <!-- Founders & Contributors Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">महान व्यक्ती</h6>
                <h1 class="mb-5">शाळेच्या यशस्वी वाटचालीमागील व्यक्ती</h1>
                <p class="mb-5 fs-5">१९४७ पासून शाळेला दिशा देणाऱ्या आणि आजही प्रेरणा देणाऱ्या थोर व्यक्तींना विनम्र
                    अभिवादन.</p>
            </div>

            <div class="row g-4 justify-content-center">
                <!-- Founder 1 -->
                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="संस्थापक"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">स्व. श्री. विठ्ठलराव पाटील</h5>
                        <small class="text-primary">संस्थापक</small>
                    </div>
                </div>

                <!-- Founder 2 -->
                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="संस्थापक"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">स्व. श्री. बाबूराव जोशी</h5>
                        <small class="text-primary">संस्थापक सदस्य</small>
                    </div>
                </div>

                <!-- Contributor 1 -->
                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="योगदानकर्ते"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">स्व. श्री. रामचंद्र महाजन</h5>
                        <small class="text-primary">प्रमुख देणगीदार</small>
                    </div>
                </div>

                <!-- Contributor 2 -->
                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="योगदानकर्ते"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">स्व. सौ. लक्ष्मीबाई पवार</h5>
                        <small class="text-primary">समाजसेविका</small>
                    </div>
                </div>

                <!-- Add more as needed -->
                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="योगदानकर्ते"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">श्री. नारायणराव चौधरी</h5>
                        <small class="text-primary">माजी अध्यक्ष</small>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4 col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="text-center">
                        <img class="rounded-circle mb-3" src="img/team1.jpg" alt="योगदानकर्ते"
                            style="width: 180px; height: 180px; object-fit: cover; border: 4px solid #007bff;">
                        <h5 class="mb-0">स्व. श्री. गोविंदराव सोनवणे</h5>
                        <small class="text-primary">प्रथम प्राचार्य</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Founders & Contributors End -->

    <!-- Lightbox Gallery Start -->
    <div class="container-xxl py-5">
        <div class="container text-center">
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">छायाचित्र गॅलरी</h6>
                <h1 class="mb-4">शाळेच्या इतिहासातील आठवणी</h1>
                <p class="lead mb-5">क्लिक करून मोठ्या आकारात पहा</p>
            </div>

            <!-- Thumbnails Grid -->
            <div class="row g-4 justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="row g-3 justify-content-center">

                        <!-- Thumbnail 1 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="0" src="img/team3.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="१९४७ - शाळेची सुरुवात">
                        </a>

                        <!-- Thumbnail 2 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="1" src="img/gallery4.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="१९६० - जुनी इमारत">
                        </a>

                        <!-- Thumbnail 3 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="2" src="img/ground.avif"
                                class="img-fluid rounded shadow hover-shadow" alt="१९७५ - माध्यमिक विभाग">
                        </a>

                        <!-- Thumbnail 4 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="3" src="img/gallery1.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="२००० - नवीन इमारत">
                        </a>

                        <!-- Thumbnail 5 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="4" src="img/lab.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="स्मार्ट क्लासरूम">
                        </a>

                        <!-- Thumbnail 6 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="5" src="img/classroom.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="प्रयोगशाळा">
                        </a>

                        <!-- Thumbnail 7 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="6" src="img/team4.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="सुवर्ण महोत्सव">
                        </a>

                        <!-- Thumbnail 8 -->
                        <a href="#" class="col-6 col-sm-4 col-md-3" data-bs-toggle="modal"
                            data-bs-target="#historyLightbox">
                            <img data-bs-target="#historyCarousel" data-bs-slide-to="7" src="img/school.jpg"
                                class="img-fluid rounded shadow hover-shadow" alt="माजी विद्यार्थी भेट">
                        </a>

                        <!-- और thumbnails यहाँ जोड़ सकते हैं (data-bs-slide-to="8" से शुरू करें) -->

                    </div>
                </div>
            </div>

            <!-- Full Size Lightbox Modal -->
            <div class="modal fade" id="historyLightbox" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-xl modal-dialog-centered">
                    <div class="modal-content bg-dark">
                        <div class="modal-header border-0">
                            <h5 class="modal-title text-white">शाळेच्या इतिहासातील छायाचित्रे</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">
                            <div id="historyCarousel" class="carousel slide">
                                <div class="carousel-inner ratio ratio-21x9"> <!-- या ratio-16x9 बदल सकते हैं -->

                                    <!-- Slide 1 -->
                                    <div class="carousel-item active">
                                        <img src="img/history/old-1-full.jpg" class="d-block w-100"
                                            alt="१९४७ - शाळेची सुरुवात">
                                    </div>

                                    <!-- Slide 2 -->
                                    <div class="carousel-item">
                                        <img src="img/history/old-2-full.jpg" class="d-block w-100"
                                            alt="१९६० - जुनी इमारत">
                                    </div>

                                    <!-- Slide 3 -->
                                    <div class="carousel-item">
                                        <img src="img/history/old-3-full.jpg" class="d-block w-100"
                                            alt="१९७५ - माध्यमिक विभाग">
                                    </div>

                                    <!-- Slide 4 -->
                                    <div class="carousel-item">
                                        <img src="img/history/modern-1-full.jpg" class="d-block w-100"
                                            alt="२००० - नवीन इमारत">
                                    </div>

                                    <!-- Slide 5 -->
                                    <div class="carousel-item">
                                        <img src="img/history/modern-2-full.jpg" class="d-block w-100"
                                            alt="स्मार्ट क्लासरूम">
                                    </div>

                                    <!-- Slide 6 -->
                                    <div class="carousel-item">
                                        <img src="img/history/modern-3-full.jpg" class="d-block w-100" alt="प्रयोगशाळा">
                                    </div>

                                    <!-- Slide 7 -->
                                    <div class="carousel-item">
                                        <img src="img/history/event-1-full.jpg" class="d-block w-100"
                                            alt="सुवर्ण महोत्सव">
                                    </div>

                                    <!-- Slide 8 -->
                                    <div class="carousel-item">
                                        <img src="img/history/event-2-full.jpg" class="d-block w-100"
                                            alt="माजी विद्यार्थी भेट">
                                    </div>

                                </div>

                                <!-- Controls -->
                                <button class="carousel-control-prev" type="button" data-bs-target="#historyCarousel"
                                    data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">मागील</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#historyCarousel"
                                    data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">पुढील</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Lightbox Gallery End -->

    

    <!-- Timeline Custom CSS -->
    <style>
        .timeline-container {
            padding: 40px 0;
        }

        .timeline-line {
            position: absolute;
            width: 4px;
            background-color: var(--primary);
            top: 0;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
        }

        .timeline-row {
            position: relative;
        }

        .timeline-date-circle {
            width: 100px;
            height: 100px;
            background-color: var(--primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            flex-shrink: 0;
            z-index: 1;
            margin: 0 auto;
        }

        .timeline-content-left,
        .timeline-content-right {
            flex: 1;
            padding: 0 30px;
        }

        .timeline-box {
            background: white;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 400px;
        }

        .timeline-content-left .timeline-box {
            margin-left: auto;
        }

        .timeline-content-right .timeline-box {
            margin-right: auto;
        }

        /* Mobile View - सब right side */
        @media (max-width: 767px) {
            .timeline-line {
                left: 50px;
            }

            .timeline-date-circle {
                width: 80px;
                height: 80px;
                font-size: 1.2rem;
                margin-left: 10px;
            }

            .timeline-content-left {
                display: none !important;
            }

            .timeline-content-right {
                padding-left: 120px;
                padding-right: 20px;
            }

            .timeline-content-right .timeline-box {
                margin-left: 0;
                margin-right: 0;
                max-width: none;
            }
        }
    </style>

@include('layout.footer')