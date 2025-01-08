 <!-- Begin:: Slider Section -->
 <section class="p-0 one-third-screen position-relative wow animate__fadeIn">
     <div class="opacity-medium bg-extra-dark-gray z-index-0"></div>
     <div class="container position-relative">
         <div class="row align-items-center">
             <div class="col-12 one-third-screen d-flex flex-column justify-content-center page-title-large text-center">
                 <!-- start sub title -->
                 <span class="d-block text-white-2 opacity6 margin-10px-bottom alt-font">Transforming Events with Music</span>
                 <!-- end sub title -->
                 <!-- start page title -->
                 <h1 class="alt-font text-white-2 font-weight-600 w-55 md-w-80 sm-w-100 mx-auto mb-0">Dynamic DJ Entertainment for Life's Biggest Moments</h1>
                 <!-- end page title -->
             </div>
             <div class="down-section text-center"><a href="#about" class="inner-link"><i class="ti-arrow-down icon-extra-small text-white-2 bg-deep-pink padding-15px-all sm-padding-10px-all rounded-circle"></i></a></div>
         </div>
     </div>
     <div class="swiper z-index-minus2 position-absolute top-0 h-100" data-slider-options='{ "loop": true, "effect":"fade", "slidesPerView": "1", "allowTouchMove":true, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "pagination": { "el": ".swiper-pagination-01", "clickable": true } }'>
         <div class="swiper-wrapper">
             <!-- start slider item -->
             <div class="swiper-slide cover-background" style="background-image:url('<?php echo $this->config->item('front_assets'); ?>images/01 contactus.jpg');"></div>
             <!-- end slider item -->
         </div>
     </div>
 </section>
 <!-- End:: Slider Section -->
 <style>
     .field-error {
         color: red;
     }
 </style>
 <!-- Icon Box Start -->
 <section class="wow animate__fadeIn">
     <div class="container px-0">
         <div class="row justify-content-center">
             <div class="col-lg-6 col-md-8 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center last-paragraph-no-margin">
                 <h5 class="alt-font font-weight-700 text-extra-dark-gray text-uppercase mb-0">We love to talk</h5>
             </div>
         </div>
         <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2">
             <!-- start contact info item -->
             <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin">
                 <div class="d-inline-block margin-20px-bottom">
                     <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-map-pin icon-medium text-white-2"></i></div>
                 </div>
                 <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Visit Our Office</div>
                 <p class="mx-auto">17 Arjun Tower CP Nagar Road, Ghatlodiya, Ahmedabad, Gujarat - 380052.</p>

             </div>
             <!-- end contact info item -->
             <!-- start contact info item -->
             <div class="col text-center md-margin-eight-bottom sm-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s">
                 <div class="d-inline-block margin-20px-bottom">
                     <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-chat icon-medium text-white-2"></i></div>
                 </div>
                 <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Let's Talk</div>
                 <p class="mx-auto">Phone: +91 798 4008 988<br>+91 848 7072 522</p>

             </div>
             <!-- end contact info item -->
             <!-- start contact info item -->
             <div class="col text-center xs-margin-30px-bottom wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.4s">
                 <div class="d-inline-block margin-20px-bottom">
                     <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-envelope icon-medium text-white-2"></i></div>
                 </div>
                 <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">E-mail Us</div>
                 <p class="mx-auto"><a href="mailto:info@djparth.com">info@djparth.com</a><br><a href="mailto:sales@djparth.com">sales@djparth.com</a></p>

             </div>
             <!-- end contact info item -->
             <!-- start contact info item -->
             <div class="col text-center wow animate__fadeInUp last-paragraph-no-margin" data-wow-delay="0.6s">
                 <div class="d-inline-block margin-20px-bottom">
                     <div class="bg-extra-dark-gray icon-round-medium"><i class="icon-megaphone icon-medium text-white-2"></i></div>
                 </div>
                 <div class="text-extra-dark-gray text-uppercase text-small font-weight-600 alt-font margin-5px-bottom">Customer Services</div>
                 <p class="mx-auto">You can reach out on our <br>phone number or email.</p>

             </div>
             <!-- end contact info item -->
         </div>
     </div>
 </section>
 <!-- Icon Box End -->

 <!-- Contact Form Start -->
 <section id="contact" class="wow animate__fadeIn p-0 bg-extra-dark-gray">
     <div class="container-fluid">
         <div class="row row-cols-1 row-cols-lg-2">
             <div class="col cover-background md-h-450px sm-h-350px wow animate__fadeIn" style="background: url('<?php echo $this->config->item('front_assets'); ?>images/contactus_part.png')"></div>
             <div class="col text-center padding-six-lr padding-five-half-tb lg-padding-four-lr md-padding-ten-half-tb md-padding-twelve-half-lr sm-padding-15px-lr wow animate__fadeIn">
                 <div class="text-medium-gray alt-font text-small text-uppercase margin-5px-bottom sm-margin-three-bottom">Reach Out to Our Team</div>
                 <h5 class="margin-55px-bottom text-white-2 alt-font font-weight-700 text-uppercase sm-margin-ten-bottom">Book Your Dream DJ Entertainment Today</h5>
                 <form id="project-contact-form-4" action="<?php echo base_url('contact/sendEmail') ?>" method="post" id="contact_forms" enctype="multipart/form-data">
                     <div class="row">
                         <div class="col-12">
                             <div class="form-results d-none"></div>
                         </div>
                         <div class="col-md-6">
                             <input type="text" name="con_firstname" maxlength="50" id="con_firstname" placeholder="Name *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                         </div>
                         <div class="col-md-6">
                             <input type="tel" name="con_contact" onkeydown="return onlyNumbers(event)" id="con_contact" maxlength="10" minlength="10" placeholder="Phone" class="bg-transparent border-color-medium-dark-gray medium-input required">
                         </div>
                         <div class="col-md-6">
                             <input type="email" name="con_email" id="con_email" placeholder="E-mail *" class="bg-transparent border-color-medium-dark-gray medium-input required">
                         </div>
                         <div class="col-md-6">
                             <div class="select-style medium-select border-color-medium-dark-gray">
                                 <?php
                                    // Define the number of months to display (e.g., next 12 months)
                                    $monthsToShow = 12;

                                    // Get the current month and year
                                    $currentMonth = date('m');
                                    $currentYear = date('Y');
                                    ?>
                                 <select name="eventdate" id="eventdate" class="bg-transparent mb-0 required">
                                     <option value="">Select your Event Month</option>
                                     <?php for ($i = 0; $i < $monthsToShow; $i++) {
                                            $monthYear = strtotime("+$i month", strtotime("$currentYear-$currentMonth-01"));
                                            $displayValue = date('M Y', $monthYear);
                                        ?>
                                         <option value="<?php echo $displayValue  ?>"><?php echo $displayValue  ?></option>
                                     <?php } ?>
                                 </select>
                             </div>
                         </div>
                         <div class="col-12">
                             <textarea name="comment" id="comment" placeholder="Describe your event requirement" rows="7" class="bg-transparent border-color-medium-dark-gray medium-textarea"></textarea>
                         </div>
                         <div class="col-12 text-center">
                             <button id="project-contact-us-4-button" name="contactSubmit" type="submit" class="btn btn-deep-pink btn-medium margin-15px-top submit frm-submit qu_btn">send message</button>
                         </div>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </section>
 <!-- Contact Form End -->

 <!-- Contact Map Start -->
 <!-- start map section -->
 <section class="p-0 one-second-screen md-h-400px sm-h-300px wow animate__fadeIn">
     <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.843821917424!2d144.956054!3d-37.817127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1427947693651"></iframe>
 </section>
 <!-- end map section -->
 <!-- Contact Map End -->
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
 <script>
     function onlyNumbers(e) {
         var keynum;
         var keychar;

         if (window.event) { //IE
             keynum = e.keyCode;
         }
         if (e.which) { //Netscape/Firefox/Opera
             keynum = e.which;
         }
         if ((keynum == 8 || keynum == 9 || keynum == 46 || (keynum >= 35 && keynum <= 40) ||
                 (event.keyCode >= 96 && event.keyCode <= 105))) return true;

         if (keynum == 110 || keynum == 190) {
             var checkdot = document.getElementById('price').value;
             var i = 0;
             for (i = 0; i < checkdot.length; i++) {
                 if (checkdot[i] == '.') return false;
             }
             if (checkdot.length == 0) document.getElementById('price').value = '0';
             return true;
         }
         keychar = String.fromCharCode(keynum);

         return !isNaN(keychar);
     }
 </script>