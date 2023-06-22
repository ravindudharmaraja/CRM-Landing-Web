@extends('layouts.app')

<!-- ====== start community ====== -->
<section class="community section-padding pt-0 style-4">
            <div class="container">
                <div class="section-head text-center style-4">
                    <small class="title_small">Rilawacrm Community</small>
                    <h2 class="mb-30"> Join Into <span> Our Hub </span> </h2>
                </div>
                <div class="content">
                    <a href="#" class="commun-card">
                        <div class="icon">
                            <i class="fab fa-facebook"></i>
                        </div>
                        <div class="inf">
                            <h5>Facebook</h5>
                            <p>Latest News & Update</p>
                        </div>
                    </a>
                    <a href="#" class="commun-card">
                        <div class="icon">
                            <i class="fab fa-twitter"></i>
                        </div>
                        <div class="inf">
                            <h5>Twitter</h5>
                            <p>Latest News & Update</p>
                        </div>
                    </a>
                    <a href="#" class="commun-card">
                        <div class="icon">
                            <i class="fab fa-instagram"></i>
                        </div>
                        <div class="inf">
                            <h5>Instagram</h5>
                            <p>Latest News & Update</p>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!-- ====== end community ====== -->
        

  <!-- ====== start footer ====== -->
  <footer class="style-4">
        <div class="container">
            <div class="section-head text-center style-4">
                <h2 class="mb-10"> Ready To <span> Download </span> </h2>
                <p>Discover your new favorite spaces, from Sao Paulo to Seoul. Download from App Store or Google Play.</p>
                <div class="d-flex align-items-center justify-content-center mt-50">
                    <a href="https://www.apple.com/app-store/" class="btn rounded-pill bg-blue4 fw-bold text-white me-4" target="_blank">
                        <small> <i class="fab fa-apple me-2 pe-2 border-end"></i> Download On App Store </small>
                    </a>
                    <a href="https://play.google.com/store/apps" class="btn rounded-pill hover-blue4 fw-bold border-blue4" target="_blank">
                        <small> <i class="fab fa-google-play me-2 pe-2 border-end"></i> Download On Google Play </small>
                    </a>
                </div>
            </div>
            <div class="foot mt-80">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo">
                            <img src="assets/img/logo_lgr.png" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <ul class="links">
                            
                            <li>
                                <a href="{{route('/feature')}}">Features</a>
                            </li>
                            <li>
                                <a href="{{route('/pricing')}}">Pricing</a>
                            </li>
                            <li>
                                <a href="">Terms of Use</a>
                            </li>
                            <li>
                                <a href="">Privacy Policy</a>
                            </li>
                            </li>
                            <li>
                                <a href="{{route('/contact')}}">contact</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2">
                        <div class="dropdown">
                            <button class="icon-25 dropdown-toggle p-0 border-0 bg-transparent rounded-circle img-cover" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="assets/img/lang.png" alt="" class="me-2">
                                <small>English</small>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copywrite text-center">
                <small class="small">
                    © 2022 Copyrights  <a href="#" class="fw-bold text-decoration-underline"> </a> All Rights Reserved.</a>
                </small>
            </div>
        </div>
        <img src="assets/img/footer/footer_4_wave.png" alt="" class="wave">
    </footer>
    <!-- ====== end footer ====== -->

    <!-- ====== start to top button ====== -->
    <a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
        <i class="bi bi-chevron-up fs-6 text-dark"></i>
    </a>
    <!-- ====== end to top button ====== -->