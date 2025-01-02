<?php if ($page_id == "") { ?>
    <!-- start slider section -->
    <section class="p-0 position-relative overflow-visible wow animate__fadeIn">
        <div class="swiper full-screen white-move md-landscape-h-580px sm-h-500px" data-slider-options='{ "loop": true, "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
            <div class="swiper-wrapper">
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('<?php echo $this->config->item('front_assets'); ?>images/01 slider.jpg');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">Unleash the Beat</div>
                                <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">Elevating Events, One Beat at a Time</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('<?php echo $this->config->item('front_assets'); ?>images/02 slider.jpg');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">Party Time, All the Time</div>
                                <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">Good Vibes Only, Great Beats Always</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
                <!-- start slider item -->
                <div class="swiper-slide cover-background" style="background-image:url('<?php echo $this->config->item('front_assets'); ?>images/03 slider.jpg');">
                    <div class="container h-100">
                        <div class="row h-100">
                            <div class="col-12 d-flex justify-content-center flex-column text-center">
                                <div class="alt-font text-white-2 font-weight-700 title-large margin-two-bottom w-60 mx-auto lg-w-80 md-margin-four-bottom sm-w-90 sm-margin-15px-bottom sm-letter-spacing-0">Premium DJ Services</div>
                                <h6 class="text-white-2 opacity6 padding-ten-lr font-weight-300 margin-four-bottom md-margin-four-bottom sm-margin-20px-bottom">Join the Party - Contact Us</h6>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- end slider item -->
            </div>
            <div class="swiper-button-next-nav swiper-button-next arrow-light arrow-big slider-navigation-style-01"><i class="fa-solid fa-angle-right"></i></div>
            <div class="swiper-button-previous-nav swiper-button-prev arrow-light arrow-big slider-navigation-style-01"><i class="fa-solid fa-angle-left"></i></div>
            <!-- end slider navigation -->
        </div>
    </section>
    <!-- end slider section -->
<?php } else { ?>
    <!-- Begin:: Slider Section -->
    <?php if ($banner) {
        foreach ($banner as $key => $value) { ?>

            <section class="p-0 one-third-screen position-relative wow animate__fadeIn">
                <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
                <div class="container position-relative">
                    <div class="row align-items-center">
                        <div class="col-12 one-third-screen d-flex flex-column justify-content-center page-title-large text-center">
                            <!-- start sub title -->
                            <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font"><?php echo $value->BannerTitle; ?></span>
                            <!-- end sub title -->
                            <h1 class="alt-font text-white-2 font-weight-600 w-55 md-w-80 sm-w-100 mx-auto mb-0"><?php echo ($value->SubTitle1) ? $value->SubTitle1 : ''; ?></h1>
                            <!-- start page title -->
                            <h1 class="alt-font text-white-2 font-weight-600 w-55 md-w-80 sm-w-100 mx-auto mb-0"><?php echo ($value->SubTitle2) ? $value->SubTitle2 : ''; ?> - <?php echo $value->SubTitle3; ?></h1>
                            <!-- end page title -->
                        </div>
                        <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                    </div>
                </div>
                <div class="swiper z-index-minus2 position-absolute top-0 h-100" data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
                    <div class="swiper-wrapper">
                        <!-- start slider item -->
                        <div class="swiper-slide cover-background" style="background-image:url('<?php echo base_url() . $value->Image; ?>images/03 <?php echo base_url() . $value->Image; ?>');"></div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide cover-background" style="background-image:url('<?php echo base_url() . $value->Image; ?>images/04 <?php echo base_url() . $value->Image; ?>');"></div>
                        <!-- end slider item -->
                        <!-- start slider item -->
                        <div class="swiper-slide cover-background" style="background-image:url('<?php echo base_url() . $value->Image; ?>images/05 <?php echo base_url() . $value->Image; ?>');"></div>
                        <!-- end slider item -->
                    </div>
                    <!-- <div class="swiper-pagination swiper-pagination-01 swiper-pagination-white"></div> -->
                </div>
            </section>
    <?php }
    } ?>
    <!-- End:: Slider Section -->
<?php } ?>

<?php if ($page_id == "") { ?>
    <!-- start about section -->
    <section id="about" class="wow animate__fadeIn bg-deep-pink">
        <?php echo isset($home[0]) ? $home[0]->Content : '' ?>
    </section>
    <!-- end about section -->
    <!-- start our services box -->
    <section class="wow animate__fadeIn">
        <?php echo isset($home[1]) ? $home[1]->Content : '' ?>
    </section>
    <!-- end our services box -->

    <!-- start portfolio section -->
    <section class="wow animate__fadeIn no-padding-bottom">
        <?php echo isset($home[2]) ? $home[2]->Content : '' ?>
    </section>
    <!-- end portfolio section -->

    <!-- Portfolio Start -->
    <section class="wow animate__fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-7 col-sm-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-15px-bottom text-uppercase text-small">Latest Blogs</div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Publish what you think, don't put it on social media</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-12 blog-content">
                    <ul class="blog-grid blog-wrapper grid grid-loading grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col hover-option4 blog-post-style3 gutter-extra-large">
                        <li class="grid-sizer"></li>
                        <!-- start blog post item -->
                        <?php if (isset($firstThreeElements)) {
                            foreach ($firstThreeElements as $key => $values) { ?>
                                <?php if ($key == 0) { ?>
                                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp">
                                        <div class="blog-post bg-light-gray">
                                            <div class="blog-post-images overflow-hidden position-relative">
                                                <a href="">
                                                    <img src="<?php echo $this->config->item('front_assets'); ?>images/blog-img74.jpg" alt="">
                                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                                </a>
                                            </div>
                                            <div class="post-details padding-40px-all md-padding-20px-all">
                                                <a href="<?php echo base_url('/blog/' . strtolower(str_replace(' ', '-', $values->BlogTitle))) ?>" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom"><?php echo substr($values->BlogTitle, 0, 50) ?></a>
                                                <p><?php echo substr($values->Content, 0, 100) ?></p>
                                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                                <div class="author">
                                                    <span class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by <a href="#" class="text-medium-gray"><?php echo $values->AuthorName ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo date('d M Y', strtotime($values->PublishedDate)) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($key == 1) { ?>
                                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.2s">
                                        <div class="blog-post bg-light-gray">
                                            <div class="blog-post-images overflow-hidden position-relative">
                                                <a href="">
                                                    <img src="<?php echo $this->config->item('front_assets'); ?>images/blog-img79.jpg" alt="">
                                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                                </a>
                                            </div>
                                            <div class="post-details padding-40px-all md-padding-20px-all">
                                                <a href="<?php echo base_url('/blog/' . strtolower(str_replace(' ', '-', $values->BlogTitle))) ?>" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom"><?php echo substr($values->BlogTitle, 0, 50) ?></a>
                                                <p><?php echo substr($values->Content, 0, 100) ?></p>
                                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                                <div class="author">
                                                    <span class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by <a href="#" class="text-medium-gray"><?php echo $values->AuthorName ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo date('d M Y', strtotime($values->PublishedDate)) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                <?php if ($key == 2) { ?>
                                    <li class="grid-item last-paragraph-no-margin text-center text-sm-start wow animate__fadeInUp" data-wow-delay="0.4s">
                                        <div class="blog-post bg-light-gray">
                                            <div class="blog-post-images overflow-hidden position-relative">
                                                <a href="">
                                                    <img src="<?php echo $this->config->item('front_assets'); ?>images/blog-img74.jpg" alt="">
                                                    <div class="blog-hover-icon"><span class="text-extra-large font-weight-300">+</span></div>
                                                </a>
                                            </div>
                                            <div class="post-details padding-40px-all md-padding-20px-all">
                                                <a href="<?php echo base_url('/blog/' . strtolower(str_replace(' ', '-', $values->BlogTitle))) ?>" class="alt-font post-title text-medium text-extra-dark-gray w-100 d-block lg-w-100 margin-15px-bottom"><?php echo substr($values->BlogTitle, 0, 50) ?></a>
                                                <p><?php echo substr($values->Content, 0, 100) ?></p>
                                                <div class="separator-line-horrizontal-full bg-medium-gray margin-20px-tb"></div>
                                                <div class="author">
                                                    <span class="text-medium-gray text-uppercase text-extra-small d-xl-inline-block d-block md-margin-10px-top">by <a href="#" class="text-medium-gray"><?php echo $values->AuthorName ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo date('d M Y', strtotime($values->PublishedDate)) ?></span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio End -->
    <!-- Client Logo Start -->
    <section class="border-top border-color-extra-light-gray wow animate__fadeIn bg-light-gray">
        <div class="container text-center">
            <div class="row">
                <div class="swiper black-move" data-slider-options='{ "slidesPerView": "1", "loop":true, "allowTouchMove":true, "autoplay": { "delay": 3000, "disableOnInteraction": false}, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-03", "clickable": true }, "breakpoints": { "1200":{ "slidesPerView":"4" }, "992": { "slidesPerView":"3" }, "768": { "slidesPerView":"3" } } }'>
                    <div class="swiper-wrapper">
                        <?php if ($brandList) {
                            foreach ($brandList as $key => $value) {
                                if (isset($value->LogoFilePath) && $value->LogoFilePath != "" && (file_exists(str_replace(array('\\', '/system'), array('/', ''), BASEPATH) . BRAND_UPLOAD_PATH . $value->LogoFilePath))) {
                                    $path = base_url() . BRAND_UPLOAD_PATH . $value->LogoFilePath;
                                    $cross = "";
                                } else {
                                    $cross = "hide";
                                    $path =  $this->config->item('admin_assets') . 'img/noimage.gif';
                                }
                        ?>
                                <div class="swiper-slide text-center" style="padding:10px;"><img src="<?php echo $path ?>" alt=""></div>
                            <?php }
                        } else { ?>
                            <div class="swiper-slide text-center" style="padding:10px;"><img src="<?php echo $this->config->item('admin_assets') ?>img/noimage.gif" alt=""></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Client Logo End -->
    <!-- start contact section -->
    <section class="wow animate__fadeIn bg-extra-dark-gray">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-2 justify-content-center">
                <div class="col padding-ten-right lg-padding-five-right md-padding-15px-right md-margin-five-bottom wow animate__fadeIn">
                    <p class="alt-font text-medium margin-15px-bottom">Reach Out to Our Team</p>
                    <h5 class="alt-font text-white-2 margin-20px-bottom">Book Your Dream DJ Entertainment Today</h5>
                    <p>Take the first step to unforgettable events! Contact us for expert DJ services and customized quotes.</p>
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-map icon-medium text-deep-pink padding-5px-top"></i>
                            <div class="alt-font text-white-2">Postal Address</div>
                            <p>17 Arjun Tower CP Nagar Road, Ghatlodiya, Ahmedabad, Gujarat - 380052.</p>
                        </div>
                    </div>
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-envelope icon-medium text-deep-pink padding-5px-top"></i>
                            <div class="alt-font text-white-2">General Enquiries</div>
                            <p><a href="mailto:info@djparth.com"> info@djparth.com</a> / <a href="mailto:sales@djparth.com">sales@djparth.com</a></p>
                        </div>
                    </div>
                    <div class="icon-box d-table w-100 mx-auto mx-lg-0 last-paragraph-no-margin">
                        <div class="icon-box-holder align-middle d-table-cell position-relative">
                            <i class="icon-chat icon-medium text-deep-pink padding-5px-top"></i>
                            <div class="alt-font text-white-2">Business Phone</div>
                            <p>+91 798 4008 988 / +91 848 7072 522</p>
                        </div>
                    </div>
                </div>
                <div class="col wow animate__fadeIn">
                    <form id="contact-form-3" action="email-templates/contact-form.php" method="post">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="padding-fifteen-all bg-white border-radius-6 lg-padding-seven-all">
                                    <div class="text-extra-dark-gray alt-font text-large font-weight-600 margin-30px-bottom">Looking for an excellent DJ Services?</div>
                                    <div>
                                        <div class="form-results d-none"></div>
                                        <input type="text" name="name" id="name" placeholder="Name*" class="input-bg required">
                                        <input type="email" name="email" id="email" placeholder="E-mail*" class="input-bg required">
                                        <input type="text" name="subject" id="subject" placeholder="Subject" class="input-bg">
                                        <textarea name="comment" id="comment" placeholder="Your Message" class="input-bg"></textarea>
                                        <button id="contact-us-button-3" type="submit" class="btn btn-small border-radius-4 btn-black submit">send message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- start contact section -->
<?php } else if ($page_id == 3) { ?>
    <!-- Blog Start -->
    <section id="blog" class="wow animate__fadeIn bg-light-gray half-section last-paragraph-no-margin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 blog-content">
                    <ul class="blog-masonry blog-wrapper grid grid-loading grid-5col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col blog-post-style5 gutter-large">
                        <li class="grid-sizer"></li>
                        <?php
                        if ($blog) {
                            foreach ($blog as $key => $value) {
                                $image = ($key == 0 || ($key % 2 == 0 && $key != 0)) ? 'images/blog-img79.jpg' : 'images/blog-img74.jpg';
                        ?>
                                <li class="grid-item last-paragraph-no-margin wow animate__fadeInUp">
                                    <div class="blog-post">
                                        <div class="blog-post-images overflow-hidden">
                                            <a href="<?php echo base_url('blogs/detail/' . $value->BlogID) ?>">
                                                <img src="<?php echo $this->config->item('front_assets') . $image; ?>" alt="">
                                            </a>
                                            <div class="blog-categories bg-white text-uppercase text-extra-small alt-font"><a href="#">Technology</a></div>
                                        </div>
                                        <div class="post-details padding-35px-all bg-white md-padding-20px-all">
                                            <div class="blog-hover-color"></div>
                                            <a href="<?php echo base_url('blogs/detail/' . $value->BlogID) ?>" class="alt-font post-title text-medium text-extra-dark-gray w-90 d-block lg-w-100 margin-5px-bottom"><?php echo substr($value->BlogTitle, 0, 100) ?></a>
                                            <div class="author">
                                                <span class="text-medium-gray text-uppercase text-extra-small d-inline-block">by <a href="#" class="text-medium-gray"><?php echo $value->AuthorName ?></a>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo date('d M Y', strtotime($value->PublishedDate)) ?></span>
                                            </div>
                                            <div class="separator-line-horrizontal-full bg-medium-gray margin-seven-tb lg-margin-four-tb"></div>
                                            <p><?php echo substr($value->Content, 0, 100) ?></p>
                                        </div>
                                    </div>
                                </li>
                        <?php }
                        } ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->
<?php } else { ?>

    <?php echo isset($cms[0]) ? $cms[0]->Content : ''; ?>
    <?php if ($page_id == 2) { ?>
        <!-- About Us Page -->
        <!-- start parallax testimonial section -->
        <section class="parallax wow animate__fadeIn" data-parallax-background-ratio="0.5" style="background-image: url('<?php echo $this->config->item('front_assets'); ?>images/testimonial-parallax-img.jpg')">
            <div class="opacity-medium bg-extra-dark-gray"></div>
            <div class="container">
                <div class="row xs-no-margin-lr">
                    <div class="swiper white-move" data-slider-options='{ "slidesPerView": "1", "allowTouchMove":true, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination", "clickable": true } }'>
                        <div class="swiper-wrapper">
                            <?php if ($testimonial) {
                                foreach ($testimonial as $key => $value) { ?>
                                    <!-- start testimonial slide item -->
                                    <div class="swiper-slide">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7 col-md-10">
                                                <div class="media d-block d-md-flex text-center text-md-start align-items-center padding-30px-lr lg-padding-15px-lr w-100">
                                                    <img src="<?php echo $this->config->item('front_assets'); ?>images/avtar-07.jpg" alt="" class="rounded-circle w-130px margin-50px-right lg-w-100px md-w-120px sm-w-100px sm-no-margin-right sm-margin-15px-bottom" />
                                                    <div class="media-body last-paragraph-no-margin">
                                                        <p class="text-extra-light-gray"><?php echo $value->Content ?></p>
                                                        <span class="text-white-2 alt-font d-inline-block text-uppercase text-small margin-15px-top">- <?php echo $value->Author ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- start testimonial slide item -->
                            <?php }
                            } ?>

                        </div>
                        <div class="swiper-button-next arrow-light end-0"><i class="ti-arrow-right icon-small"></i></div>
                        <div class="swiper-button-prev arrow-light start-0"><i class="ti-arrow-left icon-small"></i></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end parallax testimonial section -->

        <!-- start clients carousel slider section -->
        <section class="border-top border-color-extra-light-gray wow animate__fadeIn bg-light-gray">
            <div class="container text-center">
                <div class="row">
                    <div class="swiper black-move" data-slider-options='{ "slidesPerView": "1", "loop":true, "allowTouchMove":true, "autoplay": { "delay": 3000, "disableOnInteraction": false}, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-03", "clickable": true }, "breakpoints": { "1200":{ "slidesPerView":"4" }, "992": { "slidesPerView":"3" }, "768": { "slidesPerView":"3" } } }'>
                        <div class="swiper-wrapper">
                            <?php if ($brandList) {
                                foreach ($brandList as $key => $value) {
                                    if (isset($value->LogoFilePath) && $value->LogoFilePath != "" && (file_exists(str_replace(array('\\', '/system'), array('/', ''), BASEPATH) . BRAND_UPLOAD_PATH . $value->LogoFilePath))) {
                                        $path = base_url() . BRAND_UPLOAD_PATH . $value->LogoFilePath;
                                        $cross = "";
                                    } else {
                                        $cross = "hide";
                                        $path =  $this->config->item('admin_assets') . 'img/noimage.gif';
                                    }
                            ?>
                                    <div class="swiper-slide text-center" style="padding:10px;"><img src="<?php echo $path ?>" alt=""></div>
                                <?php }
                            } else { ?>
                                <div class="swiper-slide text-center" style="padding:10px;"><img src="<?php echo $this->config->item('admin_assets') ?>img/noimage.gif" alt=""></div>
                            <?php } ?>
                        </div>
                        <!-- start swiper pagination -->
                        <!-- <div class="swiper-pagination swiper-pagination-03"></div> -->
                        <!-- end swiper pagination -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end clients slider section -->
    <?php } ?>
<?php } ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>