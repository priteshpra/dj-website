 <!-- Begin:: Slider Section -->
 <?php if ($banner) {
        foreach ($banner as $key => $value) { ?>
         <section class="p-0 one-third-screen position-relative wow animate__fadeIn">
             <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
             <div class="container position-relative">
                 <div class="row align-items-center">
                     <div class="col-12 one-third-screen d-flex flex-column justify-content-center page-title-large text-center">
                         <!-- start sub title -->
                         <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font"><?php echo $value->SubTitle1; ?></span>
                         <!-- start page title -->
                         <h1 class="alt-font text-white-2 font-weight-600 w-55 md-w-80 sm-w-100 mx-auto mb-0"><?php echo ($value->SubTitle2) ? $value->SubTitle2 : ''; ?></h1>
                         <!-- end page title -->
                     </div>
                     <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
                 </div>
             </div>
             <div class="swiper z-index-minus2 position-absolute top-0 h-100" data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
                 <div class="swiper-wrapper">
                     <!-- start slider item -->
                     <div class="swiper-slide cover-background" style="background-image:url('<?php echo base_url() . $value->Image; ?>');"></div>
                     <!-- end slider item -->
                 </div>
             </div>
         </section>
 <?php }
    } ?>
 <!-- End:: Slider Section -->

 <!-- Service Detailss Start -->
 <?php echo isset($cms[0]) ? $cms[0]->Content : ''; ?>
 <!-- Related Service End -->