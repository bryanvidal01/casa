
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/icon.png" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/gsap.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/MagicScroll.cjs.js"></script>

    <script  src='<?php echo get_template_directory_uri();?>/assets/js/jquery.js'></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/ScrollTrigger.min.js"></script>
    <script  src='<?php echo get_template_directory_uri();?>/assets/js/app.js'></script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<header>
    <div class="pointer" id="pointer"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2">
                <a href="<?php echo get_site_url(); ?>" class="header-logo">
                    <?php lsd_get_template_part('icons','header', 'logo'); ?>
                </a>
            </div>
            <div class="col-sm-6">
                <h1 class="sans-serif uppercase small intro">
                    independent art director<br>& digital designer
                </h1>
            </div>
            <div class="col-sm-2">
                <div class="container-checkbox select-theme">
                    <p>
                        <input type="checkbox" id="theme" />
                        <label for="theme" class="sans-serif small">Dark mode</label>
                    </p>
                </div>
            </div>
            <div class="col-sm-2 text-right">
                <button class="navigation">
                    <div class="bar"></div>
                    <div class="bar"></div>
                </button>
            </div>
        </div>
    </div>

    <div class="navigation-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 offset-6">
                    <div class="container-checkbox select-theme text-location">
                        <p class="sans-serif uppercase small intro">
                            <span>Bordeaux</span><span>44° 50' 25 N</span><span>-0° 34' 49 O</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="align-container-menu">
            <div class="content-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <a href="" class="fade-up fade-1">
                                <div class="title serif medium italic">
                                    About
                                </div>
                                <div class="title sans-serif medium light">
                                    C&K.
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <div class="fade-up fade-2">
                                <a href="">
                                    <div class="title serif medium italic">
                                        Cases
                                    </div>
                                    <div class="title sans-serif medium light">
                                        Studies.
                                    </div>
                                </a>

                                <ul class="row navigation-cases">
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Crédit Agricole Indosuez
                                            <img src="https://images.pexels.com/photos/4862663/pexels-photo-4862663.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Brown university
                                            <img src="https://images.pexels.com/photos/5393816/pexels-photo-5393816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Dior Academy
                                            <img src="https://images.pexels.com/photos/5087541/pexels-photo-5087541.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Faurecia
                                            <img src="https://images.pexels.com/photos/4993100/pexels-photo-4993100.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Pernod Ricard Club
                                            <img src="https://images.pexels.com/photos/4463762/pexels-photo-4463762.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Safran
                                            <img src="https://images.pexels.com/photos/5588662/pexels-photo-5588662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Apetiz
                                            <img src="https://images.pexels.com/photos/5496586/pexels-photo-5496586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Crédit Agricole Indosuez
                                            <img src="https://images.pexels.com/photos/4862663/pexels-photo-4862663.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Brown university
                                            <img src="https://images.pexels.com/photos/5393816/pexels-photo-5393816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Dior Academy
                                            <img src="https://images.pexels.com/photos/5087541/pexels-photo-5087541.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Faurecia
                                            <img src="https://images.pexels.com/photos/4993100/pexels-photo-4993100.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Pernod Ricard Club
                                            <img src="https://images.pexels.com/photos/4463762/pexels-photo-4463762.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Safran
                                            <img src="https://images.pexels.com/photos/5588662/pexels-photo-5588662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Apetiz
                                            <img src="https://images.pexels.com/photos/5496586/pexels-photo-5496586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Crédit Agricole Indosuez
                                            <img src="https://images.pexels.com/photos/4862663/pexels-photo-4862663.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Brown university
                                            <img src="https://images.pexels.com/photos/5393816/pexels-photo-5393816.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Dior Academy
                                            <img src="https://images.pexels.com/photos/5087541/pexels-photo-5087541.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Faurecia
                                            <img src="https://images.pexels.com/photos/4993100/pexels-photo-4993100.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Pernod Ricard Club
                                            <img src="https://images.pexels.com/photos/4463762/pexels-photo-4463762.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Safran
                                            <img src="https://images.pexels.com/photos/5588662/pexels-photo-5588662.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>
                                    <li class="col-sm-4">
                                        <a href="http://casa.preprod.orizon.paris/project/" class="sans-serif uppercase small white image-follow">
                                            Apetiz
                                            <img src="https://images.pexels.com/photos/5496586/pexels-photo-5496586.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" width="250" class="follow-image" alt="">
                                        </a>
                                    </li>

                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="info-left">
            <p class="sans-serif uppercase small white">
                AVAILABLE FOR FREELANCE WORK<br/>
                SEND ME AN EMAIL
            </p>
        </div>
        <div class="info-right">
            <ul class="social-menu">
                <li>
                    <a href="" class="sans-serif uppercase small white">
                        Twitter
                    </a>
                </li>
                <li>
                    <a href="" class="sans-serif uppercase small white">
                        Instagram
                    </a>
                </li>
                <li>
                    <a href="" class="sans-serif uppercase small white">
                        Behance
                    </a>
                </li>
                <li>
                    <a href="" class="sans-serif uppercase small white">
                        Dribbble
                    </a>
                </li>
                <li>
                    <a href="" class="sans-serif uppercase small white">
                        Journal
                    </a>
                </li>
            </ul>
        </div>
    </div>
</header>
