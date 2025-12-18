@include('layout.header')
    <!-- Page Header Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">माजी विद्यार्थी</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="index.html">मुख्यपृष्ठ</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">माजी विद्यार्थी</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Alumni Intro Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">माजी विद्यार्थी नोंदणी</h6>
                <h1 class="mb-4">आमच्या यशस्वी माजी विद्यार्थ्यांचा भाग बना</h1>
                <p class="mb-5 fs-5">भारत विद्यालयाचे माजी विद्यार्थी आज देश-विदेशात विविध क्षेत्रात यशस्वी आहेत.<br>आपली माहिती नोंदवा आणि आमच्या कुटुंबाशी जोडले जा!</p>
            </div>
        </div>
    </div>
    <!-- Alumni Intro End -->

    <!-- Alumni Registration Form Start -->
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white rounded shadow p-5">
                        <h3 class="text-center mb-5 text-primary">माजी विद्यार्थी नोंदणी फॉर्म</h3>
                        <form id="alumniForm" action="submit_alumni.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <label for="fullName" class="form-label">पूर्ण नाव <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="fullName" name="fullName" required>
                                </div>

                                <!-- Email -->
                                <div class="col-md-6">
                                    <label for="email" class="form-label">ई-मेल <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <!-- WhatsApp Number -->
                                <div class="col-md-6">
                                    <label for="whatsapp" class="form-label">व्हॉट्सअॅप नंबर <span class="text-danger">*</span></label>
                                    <input type="tel" class="form-control" id="whatsapp" name="whatsapp" pattern="[0-9]{10}" placeholder="10 अंकी मोबाईल नंबर" required>
                                </div>

                                <!-- Passing Year -->
                                <div class="col-md-6">
                                    <label for="passingYear" class="form-label">उत्तीर्ण वर्ष <span class="text-danger">*</span></label>
                                    <select class="form-select" id="passingYear" name="passingYear" required>
                                        <option value="">वर्ष निवडा</option>
                                        <!-- Adjust years as needed -->
                                        <script>
                                            for(let year = new Date().getFullYear(); year >= 1980; year--) {
                                                document.write(`<option value="${year}">${year}</option>`);
                                            }
                                        </script>
                                    </select>
                                </div>

                                <!-- Category -->
                                <div class="col-md-6">
                                    <label for="category" class="form-label">श्रेणी <span class="text-danger">*</span></label>
                                    <select class="form-select" id="category" name="category" required>
                                        <option value="">निवडा</option>
                                        <option value="SSC">इयत्ता १० वी (SSC)</option>
                                        <option value="HSC">इयत्ता १२ वी (HSC - विज्ञान)</option>
                                        <option value="HSC-Commerce">इयत्ता १२ वी (HSC - वाणिज्य)</option>
                                    </select>
                                </div>

                                <!-- Current Location -->
                                <div class="col-md-6">
                                    <label for="location" class="form-label">सध्याची लोकेशन</label>
                                    <input type="text" class="form-control" id="location" name="location" placeholder="उदा. मुंबई, पुणे, अमेरिका">
                                </div>

                                <!-- Designation -->
                                <div class="col-md-12">
                                    <label for="designation" class="form-label">सध्याची पदवी / व्यवसाय</label>
                                    <input type="text" class="form-control" id="designation" name="designation" placeholder="उदा. सॉफ्टवेअर इंजिनिअर, डॉक्टर, व्यवसायिक">
                                </div>

                                <!-- Profile Photo -->
                                <div class="col-md-12">
                                    <label for="profilePhoto" class="form-label">प्रोफाईल फोटो (JPEG/PNG, max 2MB)</label>
                                    <input type="file" class="form-control" id="profilePhoto" name="profilePhoto" accept="image/jpeg,image/png">
                                    <small class="text-muted">आपला अलीकडील फोटो अपलोड करा (पर्यायी पण शिफारस केलेला)</small>
                                </div>

                                <!-- Testimonial -->
                                <div class="col-12">
                                    <label for="testimonial" class="form-label">आपली शुभेच्छा / अनुभव (Testimonial)</label>
                                    <textarea class="form-control" id="testimonial" name="testimonial" rows="5" placeholder="शाळेतील आठवणी, यशाचे श्रेय, शुभेच्छा..."></textarea>
                                </div>

                                <!-- Submit Button -->
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-primary btn-lg px-5 py-3">
                                        <i class="fa fa-user-graduate me-2"></i>नोंदणी करा
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Alumni Registration Form End -->

    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-primary rounded text-center p-5 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="text-white mb-4">आपल्या यशाची कहाणी आम्हाला सांगा!</h3>
                <p class="text-white mb-4 fs-5">माजी विद्यार्थ्यांच्या यशामुळे आम्हाला प्रेरणा मिळते.</p>
                <a href="gallery.html" class="btn btn-light px-4 py-2">गॅलरी पहा</a>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->
@include('layout.footer')