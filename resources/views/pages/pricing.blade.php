@extends('layouts.app')

    <!-- ====== start loading page ====== -->
    <div id="preloader">
    </div>
    <!-- ====== end loading page ====== -->

    @include('components.navbar')
    <!-- ====== start header ====== -->

    <!--Contents-->
    <main>

        <!-- ====== start pricing ====== -->
        <section class="pricing section-padding style-4 pb-50">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">Pricing Plan</small>
                    <h2 class="mb-30"> Start With <span> Affordable Price </span> </h2>
                </div>
                <div class="content">
                    <div class="toggle_switch d-flex align-items-center justify-content-center mb-40">
                        <div class="form-check form-switch p-0">
                            <label class="form-check-label" for="flexSwitchCheckDefault"><small>Billed
                                    monthly</small></label>
                            <input class="form-check-input float-none bg-blue4" type="checkbox"
                                id="flexSwitchCheckDefault" checked>
                            <label class="form-check-label" for="flexSwitchCheckDefault"><small>Billed
                                    annually</small></label>
                        </div>
                    </div>
                    <div class="row gx-0">
                        <div class="col-lg-6">
                            <div class="price-card">
                                <div class="price-header pb-4">
                                    <h6> <img src="assets/img/icons/price_s4_1.png" alt="" class="icon"> basic Plan </h6>
                                    <h2>Free <small> / month</small></h2>
                                    <p>Free 14 days trial, you can use over 20 basic features</p>
                                </div>
                                <div class="price-body py-4">
                                    <ul>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="far fa-sticky-note"></i>
                                            </small>
                                            <p class="fw-bold">Write 5 Notes On Only iOS & Android</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-paperclip"></i>
                                            </small>
                                            <p class="fw-bold">Add Attachments, Tables, Codes and More To Your Notes</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3 op-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-lock"></i>
                                            </small>
                                            <p class="fw-bold">Protect Your Notes and Notebooks With Lock</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3 op-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-undo"></i>
                                            </small>
                                            <p class="fw-bold">Focus Mode and Dark Theme</p>
                                        </li>
                                        <li class="d-flex align-items-center op-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-download"></i>
                                            </small>
                                            <p class="fw-bold">Export to Text, PDF, HTML and Markdown formats</p>
                                        </li>
                                    </ul>
                                    <a href="page-contact-5.html" class="btn rounded-pill hover-blue4 fw-bold mt-50 px-5 border-blue4">
                                        <small>Register Now </small>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="price-card">
                                <div class="price-header pb-4">
                                    <h6> <img src="assets/img/icons/price_s4_2.png" alt="" class="icon"> premium Plan </h6>
                                    <h2>$29 <small> / month</small></h2>
                                    <p>Experience all premium features and only one-time payment</p>
                                </div>
                                <div class="price-body py-4">
                                    <ul>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="far fa-sticky-note"></i>
                                            </small>
                                            <p class="fw-bold">Write 5 Notes On Only iOS & Android</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-paperclip"></i>
                                            </small>
                                            <p class="fw-bold">Add Attachments, Tables, Codes and More To Your Notes</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-lock"></i>
                                            </small>
                                            <p class="fw-bold">Protect Your Notes and Notebooks With Lock</p>
                                        </li>
                                        <li class="d-flex align-items-center mb-3">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-undo"></i>
                                            </small>
                                            <p class="fw-bold">Focus Mode and Dark Theme</p>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <small class="icon-30 bg-blue4 rounded-circle text-white d-inline-flex align-items-center justify-content-center me-3 flex-shrink-0">
                                                <i class="fas fa-download"></i>
                                            </small>
                                            <p class="fw-bold">Export to Text, PDF, HTML and Markdown formats</p>
                                        </li>
                                    </ul>
                                    <a href="page-contact-5.html" class="btn rounded-pill bg-blue4 fw-bold text-white px-5 mt-50">
                                        <small>Register Now </small>
                                    </a>
                                </div>
                                <div class="off">
                                    <span>
                                        20% <br> off
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end pricing ====== -->

        <!-- ====== start faq ====== -->
        <section class="faq section-padding style-4 pt-50">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">Frequently Asked Question</small>
                    <h2 class="mb-30"> Need A <span> Support? </span> </h2>
                </div>
                <div class="center">
                    <div class="faq style-3 style-4">
                        <div class="accordion" id="accordionSt4">
                            <div class="row gx-5">
                                <!-- <div class="col-lg-4"> -->
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading11">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                                Can I see demo?
                                            </button>
                                        </h2>
                                        <div id="collapse11" class="accordion-collapse collapse rounded-0" aria-labelledby="heading11" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                            Yes, definitely. We would be happy to demonstrate you Worksuite through a web conference at your convenience. Please submit a query on our contact us page or drop a mail to our mail id worksuite@froiden.com.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading12">
                                            <button class="accordion-button py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                                How can I update app?
                                            </button>
                                        </h2>
                                        <div id="collapse12" class="accordion-collapse collapse show rounded-0" aria-labelledby="heading12" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                            Yes, definitely. We would be happy to demonstrate you Worksuite through a web conference at your convenience. Please submit a query on our contact us page or drop a mail to our mail id worksuite@froiden.com.
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading13">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                                How Long For A Standard Project
                                            </button>
                                        </h2>
                                        <div id="collapse13" class="accordion-collapse collapse rounded-0" aria-labelledby="heading13" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0 rounded-0">
                                        <h2 class="accordion-header" id="heading4">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                                How About Data Security & NDA Agreement
                                            </button>
                                        </h2>
                                        <div id="collapse4" class="accordion-collapse collapse rounded-0" aria-labelledby="heading4" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div> -->
                                <!-- </div> -->
                                <!-- <div class="col-lg-6">
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading5">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                                How Does Notero Store My Data?
                                            </button>
                                        </h2>
                                        <div id="collapse5" class="accordion-collapse collapse rounded-0" aria-labelledby="heading5" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading6">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                                Does Notero Support Storing Data on iCloud?
                                            </button>
                                        </h2>
                                        <div id="collapse6" class="accordion-collapse collapse rounded-0" aria-labelledby="heading6" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading7">
                                            <button class="accordion-button collapsed py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                                How Do I Change My Email or Password?
                                            </button>
                                        </h2>
                                        <div id="collapse7" class="accordion-collapse collapse rounded-0" aria-labelledby="heading7" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-bottom rounded-0">
                                        <h2 class="accordion-header" id="heading8">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                                Can My Premium License Be Used For All Devices?
                                            </button>
                                        </h2>
                                        <div id="collapse8" class="accordion-collapse collapse rounded-0" aria-labelledby="heading8" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item border-0 rounded-0">
                                        <h2 class="accordion-header" id="heading9">
                                            <button class="accordion-button collapsed rounded-0 py-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                                Can I Lock My Note App?
                                            </button>
                                        </h2>
                                        <div id="collapse9" class="accordion-collapse collapse rounded-0" aria-labelledby="heading9" data-bs-parent="#accordionSt4">
                                            <div class="accordion-body">
                                                Through the collaboration with customers in discussing needs and demand, we're able to attain <br> mutual understanding, gain customer trust to offer appropriate advice
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== end faq ====== -->

        
    </main>
    <!--End-Contents-->

    @include('components.footer')

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->