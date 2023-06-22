@extends('layouts.app')

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    @include('components.navbar')
    <!-- ====== start header ====== -->
    

    <!--Contents-->
    <main>

        <!-- ====== start features ====== -->
        <section class="features pt-70 pb-70 style-4">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small bg-white">Rilawacrm - All in One CRM Solution</small>
                    <h2 class="mb-70">Awesome <span> Features </span> </h2>
                </div>
                <div class="content">
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe1.png" alt="">
                        </div>
                        <div>
                        <h6>Track Project</h6>
                        </div>
                       
                    </div>
                    
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe2.png" alt="">
                        </div>
                        <div>
                        <h6>Add Member</h6>
                        </div>
                       
                    </div>
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe3.png" alt="">
                        </div>
                        <div>
                        <h6>Assign Tasks</h6>
                        </div>
                       
                    </div>
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe4.png" alt="">
                        </div>
                        <div>
                        <h6>Estimates</h6>
                        </div>
                       
                    </div>
                    
                   
                    
                </div>
                <br>
                <div class="content">
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe5.png" alt="">
                        </div>
                        <div>
                        <h6>Payments </h6>
                        </div>
                       
                    </div>
                    
                    
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe6.png" alt="">
                        </div>
                        <div>
                        <h6>Tickets</h6>
                        </div>
                       
                    </div>
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe7.png" alt="">
                        </div>
                        <div>
                        <h6>Invoices</h6>
                        </div>
                       
                    </div>
                    <div class="features-card">
                        <div class="icon img-contain">
                            <img src="assets/img/icons/fe8.png" alt="">
                        </div>
                        <div>
                        <h6>Attendance</h6>
                        </div>
                       
                    </div>
                    
                </div>
            </div>
            <img src="assets/img/feat_circle.png" alt="" class="img-circle">
        </section>
        <!-- ====== end features ====== -->

        <!-- ====== start about ====== -->
        <section class="about section-padding style-4">
            <div class="content frs-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="img mb-30 mb-lg-0">
                                <img src="assets/img/about/ipad.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Rilawacrm - All in One CRM Solution</small>
                                    <h2 class="mb-30">The Rilawacrm For <span> Creatives </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    Stay focused and productive with a clean and clutter-free note <br> space. The flexible ways to organize your notes: hashtags, nested notebooks, pinning notes to the top of the note list, etc
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-tag"></i>
                                        </small>
                                        <h6 class="fw-bold">Filtering notes using matched keywords</h6>
                                    </li>
                                    <li class="d-flex align-items-center mb-3">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-sync"></i>
                                        </small>
                                        <h6 class="fw-bold">Automatically sync in real time</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <small class="icon-30 bg-gray rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                            <i class="fas fa-text-width"></i>
                                        </small>
                                        <h6 class="fw-bold">Complete note editor with rich text options</h6>
                                    </li>
                                </ul>
                                <a href="page-contact-5.html" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Free Register </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/about_s4_lines.png" alt="" class="lines">
                <img src="assets/img/about/about_s4_bubble.png" alt="" class="bubble">
            </div>
            <div class="content sec-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-5 order-2 order-lg-0">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Better Note Management</small>
                                    <h2 class="mb-30">Your work <span> Security </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    Automatically syncs across all your devices. You can also access and write notes without internet connection.
                                </p>
                                <div class="faq style-3 style-4">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading1">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                                    Create and Save your notes with multi-media
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading2">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                                    Web Clipper Extension
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="heading3">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                                    Protect your note with lock
                                                </button>
                                            </h2>
                                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    Images, videos, PDFs and audio files are supported. Create math expressions and diagrams directly from the app. Take photos with the mobile app and save them to a note.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="https://chrome.google.com/webstore/category/extensions" class="btn btn-img mt-40 rounded-pill" target="_blank">
                                    <div class="icon img-contain">
                                        <img src="assets/img/icons/chrome_icon.png" alt="">
                                    </div>
                                    <div class="inf">
                                        <small> Available in the </small>
                                        <h6>Chrome Web Store</h6>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="img mb-30 mb-lg-0">
                                <img src="assets/img/about/2mobiles.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/about_s4_bubble2.png" alt="" class="bubble2">
            </div>
            <div class="content trd-content">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-lg-6">
                            <div class="img mb-30 mb-lg-0">
                                <img src="assets/img/about/about_s4_img3.png" alt="">
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="section-head style-4">
                                    <small class="title_small">Beautiful Themes</small>
                                    <h2 class="mb-30">Focus More With <span> Dark Theme </span> </h2>
                                </div>
                                <p class="text mb-40">
                                    Apply Notero’s elegant themes to your taste. Dark themes work excellently for those who prefer distraction-free mode.
                                </p>
                                <ul>
                                    <li class="d-flex align-items-center op-4">
                                        <i class="bi bi-dot fs-2 me-2 lh-1 color-blue4"></i>
                                        <h6 class="fw-bold">Filtering notes using matched keywords</h6>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <i class="bi bi-dot fs-2 me-2 lh-1 color-blue4"></i>
                                        <h6 class="fw-bold">8 Beautiful themes for you select</h6>
                                    </li>
                                    <li class="d-flex align-items-center op-4">
                                        <i class="bi bi-dot fs-2 me-2 lh-1 color-blue4"></i>
                                        <h6 class="fw-bold">Save energy for your device</h6>
                                    </li>
                                    <li class="d-flex align-items-center op-4">
                                        <i class="bi bi-dot fs-2 me-2 lh-1 color-blue4"></i>
                                        <h6 class="fw-bold">Easy to switch between light and dark mode</h6>
                                    </li>
                                </ul>
                                <a href="page-services-5.html" class="btn rounded-pill bg-blue4 fw-bold text-white mt-50">
                                    <small> Discovery Now </small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/about_s4_bubble.png" alt="" class="bubble">
            </div>
            <div class="integration pt-60">
                <div class="section-head text-center style-4">
                    <small class="title_small">One-Time Payment</small>
                    <h2 class="mb-20">Integration With <span> Popular Apps </span> </h2>
                    <p>Notero intergrate with popular apps. Help you easy to connect and collaboration</p>
                </div>
                <div class="container">
                    <div class="content">
                        <div class="img">
                            <img src="assets/img/about/intg1.png" alt="" class="mt-30">
                        </div>
                        <div class="img">
                            <img src="assets/img/about/intg5.png" alt="" class="mt-60">
                        </div>
                        <div class="img">
                            <img src="assets/img/about/intg4.png" alt="" class="mt-20">
                        </div>
                        <div class="img">
                            <img src="assets/img/about/intg3.png" alt="" class="mt-80">
                        </div>
                        <div class="img">
                            <img src="assets/img/about/intg2.png" alt="">
                        </div>
                    </div>
                </div>
                <img src="assets/img/about/intg_back.png" alt="" class="intg-back">
            </div>
            <img src="assets/img/about/about_s4_wave.png" alt="" class="top-wave">
            <img src="assets/img/about/about_s4_wave.png" alt="" class="bottom-wave">
        </section>
        <!-- ====== end about ====== -->

        <!-- ====== start screenshots  ====== -->
        <div class="screenshots style-4">
            <div class="screenshots-slider style-4">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="assets/img/screenshots/1.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="assets/img/screenshots/2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="assets/img/screenshots/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="assets/img/screenshots/4.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="img">
                                <img src="assets/img/screenshots/5.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/img/screenshots/hand.png" alt="" class="mob-hand">
        </div>
        <!-- ====== end screenshots  ====== -->

       

        

        

        
    </main>
    <!--End-Contents-->

    @include('components.footer')

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->