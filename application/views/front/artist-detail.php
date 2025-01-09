<!-- Begin:: Slider Section -->
<!-- <section class="p-0 one-third-screen position-relative wow animate__fadeIn">
    <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 one-third-screen d-flex flex-column justify-content-center page-title-large text-center">
                <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font"><?php echo $Blog[0]->BlogTitle ?></span>
            </div>
            <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
        </div>
    </div>
    <div class="swiper z-index-minus2 position-absolute top-0 h-100" data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
        <div class="swiper-wrapper">
            <div class="swiper-slide cover-background" style="background-image:url('<?php echo $this->config->item('front_assets'); ?>assets/front/images/01 blogs.jpg');"></div>
        </div>
    </div>
</section> -->
<section class="p-0 one-third-screen position-relative wow animate__fadeIn">
    <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div
                class="col-12 one-third-screen d-flex flex-column justify-content-center page-title-large text-center">
                <!-- start sub title -->
                <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">Elevate Your Event</span>
                <!-- end sub title -->
                <!-- start page title -->
                <h1 class="alt-font text-white-2 font-weight-600 w-55 md-w-80 sm-w-100 mx-auto mb-0">Expert DJ
                    Services for Unforgettable Parties and Celebrations</h1>
                <!-- end page title -->
            </div>
            <div class="down-section text-center"><a href="#about" class="inner-link"><i
                        class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a>
            </div>
        </div>
    </div>
    <div class="swiper z-index-minus2 position-absolute top-0 h-100"
        data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('assets/front/images/01 aboutslider.jpg');">
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('assets/front/images/02 aboutslider.jpg');">
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide cover-background" style="background-image:url('assets/front/images/03 slider.jpg');"></div>
            <!-- end slider item -->
        </div>
        <!-- <div class="swiper-pagination swiper-pagination-01 swiper-pagination-white"></div> -->
    </div>
</section>
<!-- End:: Slider Section -->

<!-- Artist Start -->

<!-- end page title section -->
<!-- <section class="wow animate__fadeIn">
    <div class="container">
        <?php //echo $Blog[0]->Content 
        ?>
    </div>
</section> -->
<!-- Start Artist Details Section -->
<section class="artist-details bg-light-gray padding-80px-tb sm-padding-50px-tb">
    <div class="container">
        <div class="row align-items-center">
            <!-- Artist Profile Picture -->
            <div class="col-md-5 text-center sm-margin-30px-bottom">
                <img src="assets/uploads/artist/<?php echo $artist[0]->Image ?>" alt="Artist Name" class="rounded-circle w-75">
            </div>
            <!-- Artist Information -->
            <div class="col-md-7">
                <h2 class="alt-font text-extra-dark-gray font-weight-600"><?php echo $artist[0]->DisplayName ?></h2>
                <!-- <p class="text-medium-gray margin-20px-bottom">Category: DJ / Standup Comedian / Anchor</p> -->
                <p class="text-medium"><?php echo $artist[0]->AboutArtist ?></p>
                <p><strong>Email-Id:</strong> <?php echo $artist[0]->EmailID ?></p>
                <p><strong>Location:</strong> <?php echo $artist[0]->Address ?></p>
                <p><strong>Skills:</strong> <?php echo $artist[0]->Skills ?></p>
                <p><strong>Open To Travel:</strong> <?php echo ($artist[0]->IsOpenToTravel == 0) ? 'No' : 'Yes' ?></p>
                <a href="#booking-section" class="btn btn-medium btn-deep-pink text-white margin-20px-top">Book
                    Now</a>
            </div>
        </div>
    </div>
</section>
<!-- End Artist Details Section -->

<!-- Start Artist Gallery Section -->
<section class="artist-gallery padding-80px-tb sm-padding-50px-tb">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="alt-font text-extra-dark-gray font-weight-600">Gallery</h3>
                <p class="text-medium-gray">Explore moments captured during performances</p>
            </div>
        </div>
        <div class="row margin-50px-top">
            <!-- Gallery Items -->
            <?php if ($gallry) {
                foreach ($gallry as $key => $value) { ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 margin-30px-bottom">
                        <img src="../assets/uploads/gallery/<?php echo $value->DocumentURL ?>" alt="<?php echo $value->Title ?>" class="rounded w-100">
                    </div>
            <?php }
            } ?>
            <!-- <div class="col-lg-3 col-md-4 col-sm-6 margin-30px-bottom">
                <img src="assets/front/images/portfolio-item181.jpg" alt="Gallery Image" class="rounded w-100">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 margin-30px-bottom">
                <img src="assets/front/images/portfolio-item181.jpg" alt="Gallery Image" class="rounded w-100">
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 margin-30px-bottom">
                <img src="assets/front/images/portfolio-item181.jpg" alt="Gallery Image" class="rounded w-100">
            </div> -->
        </div>
    </div>
</section>
<!-- End Artist Gallery Section -->

<!-- Video Gallery Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="alt-font text-extra-dark-gray font-weight-600">Video Gallery</h3>
                <p class="text-medium-gray">Watch performances and more</p>
            </div>
        </div>
        <!-- Main Video -->
        <div class="row margin-50px-top">
            <div class="col-12">
                <div class="ratio ratio-16x9" id="main-video-container">
                    <iframe id="main-video" src="../assets/uploads/video/<?php echo $artist[0]->VideoFileURL ?>" title="Main Video"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- Thumbnail Videos -->
        <!-- <div class="row margin-30px-top">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="video-thumbnail">
                    <img src="assets/front/images/video1.png" alt="Video Thumbnail 1" class="img-fluid cursor-pointer"
                        onclick="updateMainVideo('https://www.youtube.com/embed/samplevideo1')">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="video-thumbnail">
                    <img src="assets/front/images/video1.png" alt="Video Thumbnail 2" class="img-fluid cursor-pointer"
                        onclick="updateMainVideo('https://www.youtube.com/embed/samplevideo2')">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="video-thumbnail">
                    <img src="assets/front/images/video1.png" alt="Video Thumbnail 3" class="img-fluid cursor-pointer"
                        onclick="updateMainVideo('https://www.youtube.com/embed/samplevideo3')">
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="video-thumbnail">
                    <img src="assets/front/images/video1.png" alt="Video Thumbnail 4" class="img-fluid cursor-pointer"
                        onclick="updateMainVideo('https://www.youtube.com/embed/samplevideo4')">
                </div>
            </div>
        </div> -->
    </div>
</section>
<!-- END Video Gallery Section -->


<!-- Start Booking Section -->
<section id="booking-section" class="booking bg-extra-dark-gray padding-80px-tb sm-padding-50px-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center margin-40px-bottom">
                <h3 class="alt-font text-white font-weight-600">Book the Artist</h3>
                <p class="text-white-2">Fill out the form to request a booking</p>
            </div>
            <div class="col-lg-8 col-md-10">
                <form>
                    <div class="row">
                        <div class="col-md-6 margin-20px-bottom">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 margin-20px-bottom">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6 margin-20px-bottom">
                            <input type="text" class="form-control" placeholder="Event Type" required>
                        </div>
                        <div class="col-md-6 margin-20px-bottom">
                            <input type="date" class="form-control" placeholder="Event Date" required>
                        </div>
                        <div class="col-12 margin-20px-bottom">
                            <textarea class="form-control" rows="5" placeholder="Additional Information"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-large btn-deep-pink text-white">Submit Booking
                                Request</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Booking Section -->

<!-- Artist End -->