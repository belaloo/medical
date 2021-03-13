@include('user.static.header')

<!-- HERO-4
        ============================================= -->
<section id="hero-4" class="bg-fixed hero-section division">
    <div class="container">
        <div class="row d-flex align-items-center">
            <!-- HERO TEXT -->
            <div class="col-lg-7 col-xl-7">
                <div class="hero-txt mb-40">
                    <!-- Title -->
                    <h5 class="blue-color">Welcome to MedService</h5>
                    <h2 class="steelblue-color">
                        World class medical treatment for your family
                    </h2>

                    <!-- CONTENT BOX #1 -->
                    <div class="box-list">
                        <div class="box-list-icon">
                            <i class="fas fa-genderless"></i>
                        </div>
                        <p>
                            Fringilla risus nec, luctus mauris orci auctor purus euismod
                            pretium purus at pretium ligula rutrum tempor sapien at
                            pretium luctus ligula luctus risus
                        </p>
                    </div>

                    <!-- CONTENT BOX #2 -->
                    <div class="box-list">
                        <div class="box-list-icon">
                            <i class="fas fa-genderless"></i>
                        </div>
                        <p>
                            Quaerat sodales sapien undo euismod purus a blandit pretium
                            ultrice
                        </p>
                    </div>

                    <!-- CONTENT BOX #3 -->
                    <div class="box-list">
                        <div class="box-list-icon">
                            <i class="fas fa-genderless"></i>
                        </div>
                        <p>
                            Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
                            sodales sapien undo pretium purus feugiat dolor impedit
                            magna purus pretium
                        </p>
                    </div>
                </div>
            </div>
            <!-- END HERO TEXT -->

            <!-- HERO APPOINTMENT FORM -->
            <div class="col-lg-5 col-xl-5">
                <div id="hero-section-form" class="text-center mb-40">
                    <form name="heroForm" class="row hero-form bg-blue">

                        <!-- Contact Form Input -->

                        <div id="input-email" class="col-lg-12">
                            <input type="text" name="email" class="form-control email"
                                   placeholder="Enter Your Email*" required=""/>
                        </div>

                        <div id="input-pass" class="col-lg-12">
                            <input type="password" name="password" class="form-control phone"
                                   placeholder="Enter Your Password Please*" required=""/>
                        </div>

                        <!-- Contact Form Button -->
                        <div class="col-lg-12 form-btn">
                            <button type="submit" class="btn btn-orange tra-white-hover submit">
                                Log In
                            </button>
                        </div>

                        <!-- Contact Form Message -->
                        <div class="col-lg-12 hero-form-msg text-center">
                            <div class="sending-msg"><span class="loading"></span></div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END HERO APPOINTMENT FORM -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- END HERO-4 -->

<!-- Clinc Cards
    ============================================= -->
<section id="services-7" class="wide-70 servicess-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">
                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">Open Clinics</h3>

                <!-- Text -->
                <p>You can find open clinics and call them directly</p>
            </div>
        </div>

        <div class="row">
            <!-- SERVICE BOXES -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- SERVICE BOX #1 -->
                    @foreach($open_clinics as $clinic)
                        <div class="col-md-4">
                            <div class="sbox-7 icon-xs wow fadeInUp" data-wow-delay="0.4s">
                                <a href="service-1.html">
                                    <!-- Icon -->
                                    <span class="flaticon-083-stethoscope blue-color"></span>
                                    <!-- Text -->
                                    <div class="sbox-7-txt">
                                        <!-- Title -->
                                        <h5 class="h5-sm steelblue-color">{{$clinic->location}}</h5>

                                        <!-- Text -->
                                        <p class="p-sm">
                                            {{$clinic->desc}}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                @endforeach
                <!-- END SERVICE BOX #1 -->

                </div>
            </div>
            <!-- END SERVICE BOXES -->
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</section>
<!-- END Clinc Cards -->


<!-- STATISTIC-1
    ============================================= -->
<div id="statistic-2" class="bg-lightgrey statistic-section division">
    <div class="container">
        <div class="row">
            <!-- STATISTIC BLOCK #1 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-sm wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name:
								fadeInUp;">
                    <!-- Icon  -->
                    <span class="flaticon-062-cardiogram-3 blue-color"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">
                        9,<span class="count-element">632</span>
                    </h5>
                    <p class="txt-400">Happy Patients</p>
                </div>
            </div>

            <!-- STATISTIC BLOCK #2 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-sm wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name:
								fadeInUp;">
                    <!-- Icon  -->
                    <span class="flaticon-137-doctor blue-color"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">
                        <span class="count-element">178</span>
                    </h5>
                    <p class="txt-400">Qualified Doctors</p>
                </div>
            </div>

            <!-- STATISTIC BLOCK #3 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-sm wow fadeInUp" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name:
								fadeInUp;">
                    <!-- Icon  -->
                    <span class="flaticon-065-hospital-bed blue-color"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">
                        <span class="count-element">864</span>
                    </h5>
                    <p class="txt-400">Clinic Rooms</p>
                </div>
            </div>

            <!-- STATISTIC BLOCK #4 -->
            <div class="col-md-6 col-lg-3">
                <div class="statistic-block icon-sm wow fadeInUp" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name:
								fadeInUp;">
                    <!-- Icon  -->
                    <span class="flaticon-040-placeholder blue-color"></span>

                    <!-- Text -->
                    <h5 class="statistic-number">
                        <span class="count-element">473</span>
                    </h5>
                    <p class="txt-400">Local Partners</p>
                </div>
            </div>
        </div>
        <!-- End row -->
    </div>
    <!-- End container -->
</div>
<!-- END STATISTIC-1 -->

<!-- Top 10 Doctors
    ============================================= -->
<section id="top-4" class="wide-40 doctors-section division" style="padding-top: 50px;">
    <div class="container" ;
    ">


    <!-- SECTION TITLE -->
    <div class="row" style="margin-bottom: 10px;">
        <div class="col-lg-10 offset-lg-1 section-title" style="margin-bottom: 10px;">

            <!-- Title 	-->
            <h3 class="h3-md steelblue-color">Top Four Doctors</h3>

        </div>
    </div> <!-- END SECTION TITLE -->


    <div class="row">


        <!-- DOCTOR #1 -->
        <div class="col-md-6 col-lg-3">
            <div class="doctor-1">

                <!-- Doctor Photo -->
                <div class="hover-overlay text-center">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{asset('assets/medService/images/doctor-1.jpg')}}"
                         alt="doctor-foto">
                    <div class="item-overlay"></div>

                    <!-- Profile Link -->
                    <div class="profile-link">
                        <a class="btn btn-sm btn-tra-white black-hover" href="profile-doctor.html"
                           title="">View More Info</a>
                    </div>

                </div>

                <!-- Doctor Meta -->
                <div class="doctor-meta">

                    <h5 class="h5-sm steelblue-color">Jonathan Barnes D.M.</h5>
                    <span class="blue-color">Chief Medical Officer</span>

                    <p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus
                        porta, mauris sed
                        augue luctus magna dolor luctus ipsum neque
                    </p>

                </div>

            </div>
        </div> <!-- END DOCTOR #1 -->


        <!-- DOCTOR #2 -->
        <div class="col-md-6 col-lg-3">
            <div class="doctor-1">

                <!-- Doctor Photo -->
                <div class="hover-overlay text-center">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{asset('assets/medService/images/doctor-2.jpg')}}"
                         alt="doctor-foto">
                    <div class="item-overlay"></div>

                    <!-- Profile Link -->
                    <div class="profile-link">
                        <a class="btn btn-sm btn-tra-white black-hover" href="profile-doctor.html"
                           title="">View More Info</a>
                    </div>

                </div>

                <!-- Doctor Meta -->
                <div class="doctor-meta">

                    <h5 class="h5-sm steelblue-color">Hannah Harper D.M.</h5>
                    <span class="blue-color">Anesthesiologist</span>

                    <p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus
                        porta, mauris sed
                        augue luctus magna dolor luctus ipsum neque
                    </p>

                </div>

            </div>
        </div> <!-- END DOCTOR #2 -->


        <!-- DOCTOR #3 -->
        <div class="col-md-6 col-lg-3">
            <div class="doctor-1">

                <!-- Doctor Photo -->
                <div class="hover-overlay text-center">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{asset('assets/medService/images/doctor-3.jpg')}}"
                         alt="doctor-foto">
                    <div class="item-overlay"></div>

                    <!-- Profile Link -->
                    <div class="profile-link">
                        <a class="btn btn-sm btn-tra-white black-hover" href="profile-doctor.html"
                           title="">View More Info</a>
                    </div>

                </div>

                <!-- Doctor Meta -->
                <div class="doctor-meta">

                    <h5 class="h5-sm steelblue-color">Matthew Anderson D.M.</h5>
                    <span class="blue-color">Cardiology</span>

                    <p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus
                        porta, mauris sed
                        augue luctus magna dolor luctus ipsum neque
                    </p>

                </div>

            </div>
        </div> <!-- END DOCTOR #3 -->


        <!-- DOCTOR #4 -->
        <div class="col-md-6 col-lg-3">
            <div class="doctor-1">

                <!-- Doctor Photo -->
                <div class="hover-overlay text-center">

                    <!-- Photo -->
                    <img class="img-fluid" src="{{asset('assets/medService/images/doctor-4.jpg')}}"
                         alt="doctor-foto">
                    <div class="item-overlay"></div>

                    <!-- Profile Link -->
                    <div class="profile-link">
                        <a class="btn btn-sm btn-tra-white black-hover" href="profile-doctor.html"
                           title="">View More Info</a>
                    </div>

                </div>

                <!-- Doctor Meta -->
                <div class="doctor-meta">

                    <h5 class="h5-sm steelblue-color">Megan Coleman D.M.</h5>
                    <span class="blue-color">Neurosurgeon</span>

                    <p class="p-sm grey-color">Donec vel sapien augue integer turpis cursus
                        porta, mauris sed
                        augue luctus magna dolor luctus ipsum neque
                    </p>

                </div>

            </div>
        </div> <!-- END DOCTOR #4 -->


    </div> <!-- End row -->


    <!-- ALL DOCTORS BUTTON -->
    <div class="row">
        <div class="col-md-12 text-center">
            <div class="all-doctors mb-40">
                <a href="all-doctors.html" class="btn btn-blue blue-hover">Show All
                    Doctors</a>
            </div>
        </div>
    </div>


    </div>
    <!-- End container -->
</section>
<!-- Top 10 Doctors -->

<!-- Top 1 Doctor
    ============================================= -->
<section id="banner-2" class="pt-80 banner-section division">
    <div class="bg-scroll bg-inner bg-image division">
        <div class="container white-color">
            <div class="row d-flex align-items-center">


                <!-- CALL TO ACTION IMAGE -->
                <div class="col-lg-5">
                    <div class="banner-2-img">
                        <img class="img-fluid" src="{{asset('assets/medService/images/image-05.png')}}"
                             alt="banner-image">
                    </div>
                </div>


                <!-- BANNER TEXT -->
                <div class="col-lg-6 offset-lg-1">
                    <div class="banner-txt pc-30 wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name:
									fadeInUp;">

                        <!-- Section ID -->
                        <span class="section-id id-color">Qualified Doctors</span>

                        <!-- Title  -->
                        <h3 class="h3-lg">Group of Certified and Experienced Doctors</h3>

                        <!-- Text -->
                        <p>Egestas magna egestas magna ipsum vitae purus ipsum primis in
                            cubilia laoreet augue
                            egestas suscipit lectus mauris lectus laoreet gestas neque undo luctus
                            feugiat.
                            Aliquam a augue suscipit
                        </p>

                        <!-- Button -->
                        <a href="all-doctors.html" class="btn btn-tra-white blue-hover">View
                            Doctor Profile</a>

                    </div>
                </div>
                <!-- END BANNER TEXT -->


            </div>
            <!-- End row -->
        </div>
        <!-- End container -->
    </div>
    <!-- End Inner Background -->
</section>
<!-- Top 1 Doctor -->


<!-- TESTIMONIALS-2
    ============================================= -->
<section id="reviews-2" class="bg-lightgrey wide-100 reviews-section
				division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title">

                <!-- Title 	-->
                <h3 class="h3-md steelblue-color">What Our Patients Say</h3>

                <!-- Text -->
                <p>Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis
                    libero at tempus,
                    blandit posuere ligula varius congue cursus porta feugiat
                </p>

            </div>
        </div> <!-- END SECTION TITLE -->


        <!-- TESTIMONIALS CONTENT -->
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme reviews-holder">


                    <!-- TESTIMONIAL #1 -->
                    <div class="review-2">
                        <div class="review-txt text-center">
                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-1.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Etiam sapien sem at sagittis congue an augue massa varius egestas a
                                suscipit
                                magna undo tempus aliquet porta vitae

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Scott Boxer</h5>
                                <span>Programmer</span>
                            </div>

                        </div>
                    </div>
                    <!--END  TESTIMONIAL #1 -->


                    <!-- TESTIMONIAL #2 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-2.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Mauris donec ociis magnisa a sapien etiam sapien congue augue
                                egestas et ultrice
                                vitae purus diam integer congue magna ligula egestas

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Penelopa Peterson</h5>
                                <span>Project Manager</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #2 -->


                    <!-- TESTIMONIAL #3 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-3.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>At sagittis congue augue an egestas magna ipsum vitae purus ipsum
                                primis undo cubilia
                                laoreet augue

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">M.Scanlon</h5>
                                <span>Photographer</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #3 -->


                    <!-- TESTIMONIAL #4 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-4.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Mauris donec ociis magnis sapien etiam sapien congue augue pretium
                                ligula
                                a lectus aenean magna mauris

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Jeremy Kruse</h5>
                                <span>Graphic Designer</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #4 -->


                    <!-- TESTIMONIAL #5 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-5.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>An augue in cubilia laoreet magna suscipit egestas magna ipsum at
                                purus ipsum
                                primis in augue ulta ligula egestas

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Evelyn Martinez</h5>
                                <span>Senior UX/UI Designer</span>
                            </div>

                        </div>
                    </div>
                    <!-- END TESTIMONIAL #5 -->


                    <!-- TESTIMONIAL #6 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-6.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>An augue cubilia laoreet undo magna at risus suscipit egestas magna
                                an ipsum ligula
                                vitae and purus ipsum primis

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Dan Hodges</h5>
                                <span>Internet Surfer</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #6 -->


                    <!-- TESTIMONIAL #7 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-7.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Augue egestas volutpat egestas augue in cubilia laoreet magna
                                suscipit luctus
                                and dolor blandit vitae

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Isabel M.</h5>
                                <span>SEO Manager</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #7 -->


                    <!-- TESTIMONIAL #8 -->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-8.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Augue egestas volutpat egestas augue in cubilia laoreet magna
                                suscipit luctus
                                and dolor blandit vitae

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Alex Ross</h5>
                                <span>Patient</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #8 -->


                    <!-- TESTIMONIAL #9-->
                    <div class="review-2">
                        <div class="review-txt text-center">

                            <!-- Quote -->
                            <div class="quote"><img src="{{asset('assets/medService/images/quote.png')}}"
                                                    alt="quote-img"></div>
                            <!-- Author Avatar -->
                            <div class="testimonial-avatar">
                                <img src="{{asset('assets/medService/images/review-author-9.jpg')}}"
                                     alt="testimonial-avatar">
                            </div>

                            <!-- Testimonial Text -->
                            <p>Augue egestas volutpat egestas augue in cubilia laoreet magna
                                suscipit luctus
                                magna dolor neque vitae

                            <p><a href="service-1.html" class="btn btn-blue blue-hover mt-30">View
                                    More Details</a>
                            </p>
                            </p>

                            <!-- Testimonial Author -->
                            <div class="review-author">
                                <h5 class="h5-sm">Alisa Milano</h5>
                                <span>Housewife</span>
                            </div>

                        </div>
                    </div> <!-- END TESTIMONIAL #9 -->


                </div>
            </div>
        </div> <!-- END TESTIMONIALS CONTENT -->


    </div> <!-- End container -->
</section>
<!-- END TESTIMONIALS-2 -->


@include('user.static.helpInfoSection')
@include('user.static.footer')
