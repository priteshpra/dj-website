<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- title -->
    <title><?php echo ($page_name) ? $page_name . ' - ' : ' ' ?>DJ Parth - Beat Dropper, Crowd Rocker</title>
    <meta charset="utf-8">
    <meta name="description" content="<?php echo isset($metaKey[0]->MetaDescription) ? $metaKey[0]->MetaDescription : '' ?>">
    <meta name="keywords" content="<?php echo isset($metaKey[0]->MetaKeyword) ? $metaKey[0]->MetaKeyword : '' ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description" content="POFO is a highly creative, modern, visually stunning and Bootstrap responsive multipurpose agency and portfolio HTML5 template with 25 ready home page demos.">
    <!-- keywords -->
    <meta name="keywords" content="creative, modern, clean, bootstrap responsive, html5, css3, portfolio, blog, agency, templates, multipurpose, one page, corporate, start-up, studio, branding, designer, freelancer, carousel, parallax, photography, personal, masonry, grid, coming soon, faq">
    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo $this->config->item('front_assets'); ?>images/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo $this->config->item('front_assets'); ?>images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $this->config->item('front_assets'); ?>images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $this->config->item('front_assets'); ?>images/apple-touch-icon-114x114.png">
    <!-- style sheets and font icons  -->
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('front_assets'); ?>css/bootsnav.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('front_assets'); ?>css/font-icons.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('front_assets'); ?>css/theme-vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('front_assets'); ?>css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $this->config->item('front_assets'); ?>css/responsive.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav navbar-fixed-top header-dark background-transparent nav-box-width white-link navbar-expand-lg menu-center border-white-light border-bottom">
            <div class="container-fluid nav-header-container">
                <!-- start logo -->
                <div class="col-auto col-lg-2 ps-0">
                    <a href="index.html" title="DJ Parth" class="">
                        <img style="max-width: 35%;" src="<?php echo $this->config->item('front_assets'); ?>images/logo.png" data-at2x="<?php echo $this->config->item('front_assets'); ?>images/logo.png" class="logo-dark" alt="DJ Parth">
                        <!-- <img src="images/logo-white.png" data-at2x="images/logo-white@2x.png" alt="DJ Parth" class="logo-light default"> -->
                    </a>
                </div>
                <!-- end logo -->
                <div class="col accordion-menu px-0">
                    <button type="button" class="navbar-toggler collapsed" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-center" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav no-margin alt-font text-normal" data-in="animate__fadeIn" data-out="animate__fadeOut">
                            <?php if ($menu['menus']) {
                                foreach ($menu['menus'] as $key => $value) {
                                    if ($key == 0) {
                                        $Url = 'home';
                                        $class = '';
                                    } else {
                                        $class = '';
                                        $Url = '/' . strtolower($value->CategoryName);
                                        if ($key == 2 || $key == 3) {
                                            $Url = 'javascript:void(0);';
                                            $class = 'dropdown simple-dropdown';
                                        }
                                    }
                                    if ($value->CategoryName != 'Contact') {
                            ?>
                                        <li class="<?php echo $class ?>">
                                            <a href="<?php echo base_url($Url) ?>">
                                                <?php echo $value->CategoryName ?>
                                                <?php if (isset($menu['Submenus'][$value->CategoryName])) { ?>
                                                    <ul class="dropdown-menu">
                                                        <?php foreach ($menu['Submenus'][$value->CategoryName] as $key => $values) { ?>
                                                            <li class="dropdown"><a href="<?php echo base_url('/' .  str_replace(' ', '-', strtolower($values['SubCategoryName']))) ?>"><?php echo $values['SubCategoryName'] ?></a></li>
                                                        <?php } ?>
                                                    </ul>
                                                <?php } ?>
                                            </a>
                                        </li>
                            <?php }
                                }
                            } ?>
                            <!-- <li><a href="index.html">Home</a>
                            </li>
                            <li><a href="aboutus.html">About Us</a>
                            </li>
                            <li class="dropdown simple-dropdown"><a href="#">Services</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>

                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="socialevents.html">Social Events </a></li>
                                    <li class="dropdown"><a href="corporateevents.html">Corporate Events </a></li>
                                    <li class="dropdown"><a href="govtevents.html">Government Events </a></li>
                                    <li class="dropdown"><a href="avrental.html">AV Rentals </a></li>
                                </ul>
                            </li>

                            <li class="dropdown simple-dropdown"><a href="#">Artist Booking</a><i class="fa-solid fa-angle-down dropdown-toggle" data-bs-toggle="dropdown" aria-hidden="true"></i>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown"><a href="artist.html">Anchor </a></li>
                                    <li class="dropdown"><a href="artist.html">Music Band </a></li>
                                    <li class="dropdown"><a href="artist.html">DJ </a></li>
                                    <li class="dropdown"><a href="artist.html">Standup Comedian </a></li>
                                </ul>
                            </li>
                            <li><a href="blogs.html">Blogs</a></li> -->
                            <li><a href="<?php echo base_url('contact') ?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto col-lg-2 pe-0 text-end d-none d-md-block">
                    <div class="header-social-icon d-none d-md-inline-block no-border-left no-padding-left no-margin-left">
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://instagram.com/" title="Instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->