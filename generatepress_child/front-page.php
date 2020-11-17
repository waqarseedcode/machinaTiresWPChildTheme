<?php 
  if (!defined('ABSPATH')) exit;
  get_header('main'); 
?>	
 <!--home-page-template-->
	<!--<main id="main" class="site-main" role="main">	
			 <div class="container">
				<?php
				while ( have_posts() ) : the_post();
				endwhile;
				?>
			</div> 
			
		</main>
			-->
			<!--------------------------------------------------------------------HERO CONTAINER---------------------------------------------------------------------------->
    <div class="container-fluid hero-container bg-dark-black" id="hero-container-div" name="hero-container-div">
        <video id="video_background" autoplay muted preload="none">
            <source src="<?php echo get_stylesheet_directory_uri() ?>/images/header-bg/video.mp4" type="video/mp4" />
        </video>
    	<script>
	document.getElementById('video_background').play();
	</script>

        <div class="container hero-text-box align-items-center" id="hero-container-content"
            name="hero-container-content">
            <div class="row text-center">
                <div class="col-md-12">
                    <h3 id="movetxt">
                        <span class="animated fadeIn delay-2">It’s</span>
                        <span class="animated fadeIn delay-3">time</span>
                        <span class="animated fadeIn delay-4">to</span>
                        <span class="animated fadeIn delay-5">get</span>
                        <span class="animated fadeIn delay-6">a</span>
                        <span class="animated fadeIn delay-7">tire </span>
                        <span class="animated fadeIn delay-8">change.</span>
                    </h3>

                    <h3><span id="typed"></span></h3>
                    <!-- animated fadeInDown slower delay-15 -->
                    <h3 class="mobile-switch animated fadeInDown slow delay-15">
                        Stay home this year –
                    </h3>
                    <h3 class="animated fadeIn delay-3s mobile-switch">
                        we’ll come to you.
                    </h3>

                    <h3 class="animated fadeIn delay-10 toggle">
                        Stay home this year – we’ll come to you.
                    </h3>
                </div>
            </div>

            <div class="row text-center mt-md-4 sub-text animated fadeIn delay-4s">
                <div class="col-md-12">
                    <h4>
                        We are a fully mobile tire change provider in the GTA & Vaughan.
                        <br />
                        Book a time slot with our friendly technicians who will make this
                        the easiest tire change of your life.
                    </h4>
                </div>
            </div>

            <!-- inp box -->
            <div class="container inp-box pb-0 animated fadeInUp mobile-switch">
                <div class="row search-box">
                    <div class="col-md-5">
                        <div class="row" style="padding-left: 30px;">
                            <div class="col-md-2 col-sm-2 col-3" style="padding-top: 35px;">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/search.svg" id="search-icon" class="img-fluid" />
                            </div>
                            <div class="col-md-10 col-sm-10 col-9 d-flex justify-content-start" style="padding: 0px;">
                                <div class="form-group">
                                    <div class="autocomplete">
                                        <input type="text" class="form-control search" name="addr" id="addrBig"
                                            placeholder="Enter your address" style="border: 0;" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-4" style="background: #ffffff;">
                        <div class="row">
                            <div class="col-md-2 col-sm-2 col-3" style="padding-top: 35px; padding-right: 0px;">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/pin-round.svg" id="search-locicon" />
                            </div>
                            <div class="col-md-10 col-sm-10 col-9" style="padding-left: 0px; padding-top: 30px;">
                                <div class="dropdown">
                                    <button type="button" class="dropdown-toggle" data-toggle="dropdown">Greater Toronto Area, Canada
                                        <a href="javascript:void(0);" class="icon"> </a>
                                    </button>

                                    <!-- <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#"> Greater Toronto Area, Canada </a>
                                        <a class="dropdown-item" href="#"> Greater Toronto Area, Canada </a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3 button btn-request">
                        <!-- <p id="request-tire-button" onclick="togglemap1()">Request a Tire Service</p> -->
                        <button class="btn" id="request-tire-button" onclick="requestServiceButtonClick()">
                            Request a Tire Service
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 d-flex justify-content-center mb-0">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/map.png" id="map-image" style="display: none; width: auto; height: auto;" />
                    </div>
                </div>
            </div>

            <!-- Inp box phone -->

            <div class="container toggle search-container">
                <div class="row text-center">
                    <div class="col-md-12 d-inline-flex justify-content-center">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/pin-round-mobile.svg" alt="location" class="img-fluid mr-3" />
                        <div class="dropdown dropdown-transparent">
                            <button type="button" class="dropdown-toggle dropdown-transparent" data-toggle="dropdown">
                                Greater Toronto Area, Canada

                                <a href="javascript:void(0);" class="icon ml-2">
                                    <i style="padding-left: 15px;" class="fa fa-chevron-down"></i>
                                </a>
                            </button>

                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">
                                    Greater Toronto Area, Canada
                                </a>
                                <a class="dropdown-item" href="#">
                                    Greater Toronto Area, Canada
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row search-box-phone text-center">
                    <div class="col-12 d-inline-flex p-0 justify-content-center">
                        <div class="seach-img-box p-4">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/search.svg" alt="search" class="img-fluid" />
                        </div>
                        <div class="form-group">
                            <div class="autocomplete">
                                <input type="text" class="form-control search" name="addr" id="addrSmall"
                                    placeholder="Enter your address" style="border: 0;" />
                            </div>
                        </div>
                        <button class="btn btn-request" onclick="requestServiceButtonClick()">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/arrow-right.svg" alt="enter" class="img-fluid" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark-gray" id="map-phone" name="map-phone" style="display: none !important;">
        <div class="row d-flex">
            <div class="col-sm-1"></div>
            <div class="col-12 col-sm-10 justify-content-center my-2">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/map.png" class="img-fluid" />
            </div>
            <div class="col-sm"></div>
        </div>
    </div>

    <!--------------------------------------------------------------------HOW EASY--------------------------------------------------------------------------------->
    <div class="container-fluid bg-dark-gray">
        <div class="container">
            <div class="row text-center star-container">
                <div class="col-md-12">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/star.svg" alt="star" class="img-fluid" />
                </div>
            </div>

            <div class="row text-center steps-title-container mt-md-4">
                <div class="col-md-12">
                    <h3 class="mobile-switch">
                        Just how easy is your <br class="mobile-switch" />
                        tire change going to be?
                    </h3>
                    <h3 class="toggle">
                        Just how easy <br />
                        is your tire change <br />going to be?
                    </h3>
                </div>
            </div>

            <div class="row text-center steps-container mobile-switch">
                <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/phone.svg" alt="1" />
                    <h3 class="mt-md-2 text-white">Step 1</h3>
                    <h5 class="mt-md-3">
                        Book an appointment at your house, <br class="mobile-switch" />
                        condo or office.
                    </h5>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/disc.svg" alt="1" />
                    <h3 class="mt-md-2 text-white">Step 2</h3>
                    <h5 class="mt-md-3">
                        Have your wheels and lug-nut-key (if applicable) somewhere
                        accessible.
                    </h5>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/smile.svg" alt="1" />
                    <h3 class="mt-md-2 text-white">Step 3</h3>
                    <h5 class="mt-md-3">
                        Smile, because you just got a mobile <br class="mobile-switch" />
                        tire change.
                    </h5>
                </div>
            </div>

            <div id="carouselExampleIndicators" class="carousel slide toggle" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="container steps-container-mobile text-center">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/phone.svg" alt="1" class="img-fluid" />
                            <h3 class="mt-4">Step 1</h3>
                            <h5 class="mt-4">
                                Book an appointment at your house,
                                <br />
                                condo or office.
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container steps-container-mobile text-center">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/disc.svg" alt="2" class="img-fluid" />
                            <h3 class="mt-4">Step 2</h3>
                            <h5 class="mt-4">
                                Have your wheels and lug-nut-key (if applicable) somewhere
                                accessible.
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container steps-container-mobile text-center">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/smile.svg" alt="3" class="img-fluid" />
                            <h3 class="mt-4">Step 3</h3>
                            <h5 class="mt-4">
                                Smile, because you just got a mobile
                                <br />
                                tire change.
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------PROMOTION--------------------------------------------------------------------------------->

    <div class="container-fluid promotion-container" id="pricing">
        <div class="container promotion-box">
            <div class="row mobile-align">
                <div class="col-md-6 col-sm-12 car-bg-box">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/car.png" alt="car" class="img-fluid" />
                </div>
                <div class="col-md-6 col-sm-12 promotion-text-box">
                    <h5>
                        <span class="badge badge-secondary badge-promotion">end of season promotion</span>
                    </h5>
                    <h3 class="mt-lg-4">
                        <span class="big-number">$49</span> <br class="toggle" />
                        end of season promotion <br />
                        for the first vehicle
                    </h3>
                    <h3 class="mt-lg-4">
                        <span class="big-number">$44</span> <br class="toggle" />
                        for each additional vehicle
                    </h3>
                    <h6 class="mt-lg-4">
                        Service includes lug nuts torqued to OEM specs, air pressure
                        <br class="mobile-switch" />
                        top-up, hub treatment with wire brush & anti-seize compound,
                        <br class="mobile-switch" />
                        and tread depth check.
                    </h6>
                </div>
            </div>
        </div>
        <br />
        <br />
    </div>

    <!--------------------------------------------------------------------EXPERIENCE BADGES--------------------------------------------------------------------------------->

    <div class="container-fluid bg-dark-gray badge-experience-box">
        <div class="row mobile-align">
            <div class="col-md-6 col-sm-12 text-md-right">
                <h5>
                    <span class="badge badge-secondary badge-experience pt-2">Technicians With 10+ Years <br
                            class="toggle-mobile" />
                        of Experience</span>
                </h5>
            </div>
            <div class="col-md-6 col-sm-12 text-md-left">
                <h5>
                    <span class="badge badge-secondary badge-experience pt-2">Machina Tires is Fully Insured</span>
                </h5>
            </div>
        </div>
        <br />
        <br />
    </div>

    <!--------------------------------------------------------------------TESTIMONIALS--------------------------------------------------------------------------------->

    <div class="container-fluid bg-dark-gray customer-box" id="reviews">
        <div class="row text-center">
            <div class="col-md-12 customer-star-box">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/heart.svg" alt="heart" class="img-fluid" />
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 customer-text-box">
                <h3>
                    Testimonials from customers <br />
                    loving Machina Tires
                </h3>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-dark-gray">
        <div class="owl-carousel owl-theme">
            <div class="card card-body item" style="width: 342px;">
                <div class="row card-text-mobile justify-content-center">
                    <div class="col-md-6 my-auto">
                        <h3 class="text-center">Lui Panzini</h3>
                        <div class="d-flex justify-content-center rating-star">
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                        </div>
                    </div>
                </div>

                <div class="row text-center mt-md-2 p-4">
                    <h3 class="show-read-more">
                        <b>Great Service</b> <br /><br />
                        "Thnx, great service, see you in November!"
                    </h3>
                </div>
            </div>

            <div class="card card-body item" style="width: 342px;">
                <div class="row card-text-mobile justify-content-center">
                    <div class="col-md-6 my-auto">
                        <h3 class="text-center">Mark</h3>
                        <div class="d-flex justify-content-center rating-star">
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-md-2 p-4">
                    <h3 class="show-read-more">
                        <b>On time, reliable and easy</b> <br /><br />
                        "Great job with the tire swap. Professional guys took time when
                        removing and replacing, wire brushed drums, tire pressure
                        check...excellent"
                    </h3>
                </div>
            </div>

            <div class="card card-body item" style="width: 342px;">
                <div class="row card-text-mobile justify-content-center">
                    <div class="col-md-6 my-auto p-0">
                        <h3 class="text-center">W.H.</h3>
                        <div class="d-flex justify-content-center rating-star">
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-md-2 p-4">
                    <h3 class="show-read-more">
                        <b>Great Service at a terrific price</b> <br /><br />
                        "My call was returned quickly and I was able to get an appointment
                        on short notice. The Machina team arrived promptly and executed
                        the work expertly and efficiently. The team was quite polite and
                        pleasant, which made for a very positive customer experience.
                        Would not hesitate to recommend their services and will call them
                        in the fall to put the winter tires on my Mercedes."
                    </h3>
                </div>
            </div>

            <div class="card card-body item" style="width: 342px;">
                <div class="row card-text-mobile justify-content-center">
                    <div class="col-md-6 my-auto p-0">
                        <h3 class="text-center">Marianne Broome</h3>
                        <div class="d-flex justify-content-center rating-star">
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-md-2 p-4">
                    <h3 class="show-read-more"> 
                        <b>Tire Change</b> <br /><br />
                        "This was an excellent experience from start to finish. Great
                        customer service and knowledgeable staff. Chris responded to my
                        call right away and sent a mechanic to change my tires. The
                        service was efficient and courteous. I will definitely use Machina
                        Tires in the future."
                    </h3>
                </div>
            </div>

            <div class="card card-body item" style="width: 342px;">
                <div class="row card-text-mobile justify-content-center">
                    <div class="col-md-6 my-auto">
                        <h3 class="text-center">Lou</h3>
                        <div class="d-flex justify-content-center rating-star">
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="mr-1 mr-md-2" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                            <img class="" src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/rating_star.svg" alt="rating"
                                style="width: 15%; height: 15%;" />
                        </div>
                    </div>
                </div>
                <div class="row text-center mt-md-2 p-4">
                    <h3 class="show-read-more">
                        <b>Great service</b> <br />
                        <br />
                        "Great service and very excellent customer service. Easy to
                        correspond with and came out right away. Will definitely use
                        again. Thank you very much."
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------------------------------------------------FAQs--------------------------------------------------------------------------------->
    <div class="container-fluid bg-dark-gray faq-box" id="faq">
        <div class="row text-center">
            <div class="col-md-12 faq-img-box">
                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/assets/faq.png" alt="faq" class="img-fluid" />
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-12 faq-title-box">
                <h3>Frequently Asked Questions</h3>
            </div>
        </div>

        <div class="container mobile-switch flex-container">
            <div class="row text-center">
                <div class="col-md-12 p-0 row-scroll" id="row-scroll">
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">How do I book?</h5>
                        <h6 class="mt-4">
                            Online at <a href="">machinatires.com</a> <br />

                            Call/Text us at 416-414-3874 <br />

                            Email us at
                            <a href="hello@machinatires.com">hello@machinatires.com</a>
                        </h6>
                    </div>
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">What forms of payment do you accept?</h5>
                        <h6 class="mt-4">
                            We accept all major credit cards. Our technicians carry Square
                            terminals so you can tap or slide to pay. We can also send you
                            an invoice for a 100% contactless experience.
                        </h6>
                    </div>
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">Who performs the tire changes?</h5>
                        <h6 class="mt-4">
                            Our technicians are personable, experienced and high integrity.
                            They are thoroughly vetted and trained in best practices.
                        </h6>
                    </div>
                </div>
            </div>

            <div class="row text-center row-more">
                <div class="col-md-12 p-0 row-scroll" id="row-scroll">
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">Do you check tire pressure?</h5>
                        <h6 class="mt-4">
                            Yes, we ensure the tire pressure complies with the
                            specifications of the manufacturer. We also clean your wheel
                            hubs with a wire brush and apply an anti-seize compound. We'll
                            check your tread depth, too.
                        </h6>
                    </div>
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">How can I become a tire technician?</h5>
                        <h6 class="mt-4">
                            Firstly, you must have at least one year of related experiences.
                            Secondly, you can <a href="#!">Contact Us</a> and provide your
                            name, email address, and a brief message on your past
                            experiences in related fields.
                        </h6>
                    </div>
                    <div class="faq-question-box pb-3 m-2">
                        <h5 class="mt-3">Are you insured?</h5>
                        <h6 class="mt-4">
                            Machina Tires is fully insured with commercial general liability
                            and remote garage coverage.
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile Carousel -->
        <div id="carouselExampleIndicators1" class="carousel slide toggle" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="4"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="5"></li>
                <li data-target="#carouselExampleIndicators1" data-slide-to="6"></li>
            </ol>

            <div class="carousel-inner padding">
                <div class="carousel-item active">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">How do I book?</h5>
                        <h6 class="mt-4">
                            Online at <a href="">machinatires.com</a> <br />

                            Call/Text us at 416-414-3874 <br />

                            Email us at
                            <a href="hello@machinatires.com">hello@machinatires.com</a>
                        </h6>
                    </div>
                </div>
                <div class="carousel-item padding">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">What forms of payment do you accept?</h5>
                        <h6 class="mt-4">
                            We accept all major credit cards. Our technicians carry Square
                            terminals so you can tap or slide to pay. We can also send you
                            an invoice for a 100% contactless experience.
                        </h6>
                    </div>
                </div>
                <div class="carousel-item padding">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">Who performs the tire changes?</h5>
                        <h6 class="mt-4">
                            Our technicians are personable, experienced and high integrity.
                            They are thoroughly vetted and trained in best practices.
                        </h6>
                    </div>
                </div>      <div class="carousel-item padding">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">Do you check tire pressure?</h5>
                        <h6 class="mt-4">
                            Yes, we ensure the tire pressure complies with the
                            specifications of the manufacturer. We also clean your wheel
                            hubs with a wire brush and apply an anti-seize compound. We'll
                            check your tread depth, too.
                        </h6>
                    </div>
                </div>
                <div class="carousel-item padding">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">How can I become a tire technician?</h5>
                        <h6 class="mt-4">
                            Firstly, you must have at least one year of related experiences.
                            Secondly, you can <a href="#!">Contact Us</a> and provide your
                            name, email address, and a brief message on your past
                            experiences in related fields.
                        </h6>
                    </div>
                </div>
                <div class="carousel-item padding">
                    <div class="container faq-question-box-mobile text-center pb-4 pr-2 pl-2 pt-3">
                        <h5 class="mt-3">Are you insured?</h5>
                        <h6 class="mt-4">
                            Machina Tires is fully insured with commercial general liability
                            and remote garage coverage.
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <!-- FAQ button -->
        <div class="container mobile-switch">
            <div class="row text-center faq-button-box">
                <div class="col-md-12">
                    <button class="btn btn-read-faq" id="row-more">Read More</button>
                </div>
            </div>
        </div>
    </div>
    <!--------------------------------------------------------------------CAROUSEL--------------------------------------------------------------------------------->	
    
    
    <!-- JS Code for booking -->
    <script>

		// Bad logic being used
		var goodAddress = false;
		
		var addressBarBig = document.getElementById('addrBig');
		var addressBarSmall = document.getElementById('addrSmall');
		
			
		function initMap() {
			
			var options = {
				componentRestrictions: {country: "ca"}
			};
		
			var autocomplete = new google.maps.places.Autocomplete(addressBarBig, options);
			autocomplete.setTypes(['address']);
			
			autocomplete.addListener('place_changed', function() {
				var place = autocomplete.getPlace();
				if (place.geometry) {
					
					goodAddress = true;
					
				} else {
					// User entered the name of a Place that was not suggested and
					// pressed the Enter key, or the Place Details request failed.
					goodAddress = false;
					window.alert("No details available for input: '" + place.name + "'");
					return;
				}
			});
			
			var autocompleteSmallInput = new google.maps.places.Autocomplete(addressBarSmall, options);
			autocompleteSmallInput.setTypes(['address']);
			
			autocompleteSmallInput.addListener('place_changed', function() {
				var place = autocompleteSmallInput.getPlace();
				if (place.geometry) {
					goodAddress = true;
					//addressBarBig.style.background = "#00FF00";
				} else {
					// User entered the name of a Place that was not suggested and
					// pressed the Enter key, or the Place Details request failed.
					goodAddress = false;
					window.alert("No details available for input: '" + place.name + "'");
					return;
				}
			});
			
			
			addressBarBig.addEventListener('change', (event) => {
				console.log( "BIG: " +addressBarBig.value);
			});
			
			addressBarSmall.addEventListener('change', (event) => {
				console.log( "SMALL: " +addressBarSmall.value);
			});
			
		}
		
	
		function requestServiceButtonClick(){
			console.log( "SERVICE CLICK - BIG: "+addressBarBig.value+", SMALL: "+addressBarSmall.value);
			if(goodAddress){
				
				var input = ""
				
				if(addressBarBig.value.length > 1){
					input = addressBarBig.value;
				} else {
					input = addressBarSmall.value;
				}
				
				var encodedAddress = encodeURIComponent(input);
				
				window.location.href = "https://machinatires.com/custom-scripts/postalcode_to_latlng.php?bookingaddress=" + encodedAddress;
				
			} else {
				window.alert("Bad Address, Please Enter A Real Address");
			}
		}
		
	</script>
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD5gpGACdlAbacmALRIZLrg9LSIKs4ns2Y&libraries=places&callback=initMap"
    async defer></script>
    
    
<?php 
  if (!defined('ABSPATH')) exit;
  get_footer('main'); 
?>
