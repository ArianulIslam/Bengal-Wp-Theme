<?php 
/** Header Template
 * @package Bengla
 * 
 */


?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name')?> | <?php bloginfo ('description') ?> </title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&family=Saira:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap">

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/images/ico/1.png" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/ico/1.png">

    <!-- font awesome stylesheet -->
    <!-- <link rel="stylesheet" href="assets/css/all.min.css"> -->

    <!-- swiper.js stylesheet  -->
    <!-- <link rel="stylesheet" href="assets/css/swiper-bundle.min.css"> -->

    <!-- bootstrap stylesheet -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->

    <!-- custom stylesheet -->
    <!-- <link rel="stylesheet" href="assets/css/index1.css"> -->

    <?php wp_head(); ?>

</head>

<body <?php body_class('theme-bengal'); ?>>

<?php wp_body_open(); ?>

    <!-  || HEADER START  -->
    <header class="header-1 py-5 ">
        <div class="container header-1__container">
            <div class="row header-1__row flex-lg-column-reverse mx-0">
                <!-- site logo start -->
                <div class="col-lg-3 p-0">
                    <div class="header-1__logo ">
                        <a href="home1.html"><img src="<?php get_template_directory().'/assets/images/logo/1.png'; ?>" alt="Logo"></a>

                        <div class="burger" id="burger">
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                            <span class="burger-line"></span>
                        </div>
                    </div>
                </div>
                <!-- site logo end -->

                <!-- header-1__info  -->
                <div class="col-lg-9 p-0 header-1__col">
                    <div class="row h-100 a-c ">

                        <div class="col-4">
                            <div class="header-1__info">
                                <div class="header-1__info__block d-flex gap-2 a-c ">
                                    <div class="header-1_icon">
                                        <a href="mailto:#"><i
                                                class="header-1__icon--style fa-solid fa-envelope-open-text"></i></a>

                                    </div>
                                    <div class="info__block__content">
                                        <h5>Mail:</h5>
                                        <a href="mailto:#">medidol@gmail.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="header-1__info">
                                <div class="header-1__info__block d-flex gap-2 a-c ">
                                    <div class="header-1_icon">
                                        <a href="tel:+58786953-12"><i
                                                class="header-1__icon--style fa-solid fa-phone"></i></a>

                                    </div>
                                    <div class="info__block__content">
                                        <h5>Phone: </h5>
                                        <a href="tel:+58786953-12"> +5 (87) 86953-12</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="header-1__info">
                                <div class="header-1__info__block d-flex gap-2 a-c">
                                    <div class="header-1_icon">
                                        <i class="header-1__icon--style fa-solid fa-clock"></i>
                                    </div>
                                    <div class="info__block__content">
                                        <h5>Opening Time:</h5>
                                        <p>Mon-Sat (8am - 6pm)</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- header-1__info end -->
            </div>

        </div>
    </header>
    <!-- || HEADER END  -->

    <!-- || NAV START  -->
    <nav class="nav">
        <div class="navbar container">
            <div class="navbar-menu d-flex j-b w-100">
                <div class="menu" id="menu">
                    <ul class="menu-inner">
                        <li class="menu-item dropdown">
                            <a class="menu-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">Home</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                                <li><a class="dropdown-item" href="home1.html">Homepage 1</a></li>
                                <li><a class="dropdown-item" href="home2.html">Homepage 2</a></li>
                                <li><a class="dropdown-item" href="home3.html">Homepage 3</a></li>
                                <li><a class="dropdown-item" href="home4.html">Homepage 4</a></li>
                                <li><a class="dropdown-item" href="home5.html">Homepage 5</a></li>

                            </ul>
                        </li>
                        <li class="menu-item dropdown"><a class="menu-link" href="doctors.html">Doctors</a>
                        </li>
                        <li class="menu-item"><a class="menu-link" href="about.html">About</a></li>
                        <li class="menu-item"><a class="menu-link" href="department.html">Department</a></li>
                        <li class="menu-item"><a class="menu-link" href="pricing.html">Pricing</a></li>
                        <li class="menu-item"><a class="menu-link" href="contact.html">Contact</a></li>
                        <!-- <li class="menu-item"><a class="menu-link" href="time.html">Time</a></li> -->
                    </ul>
                </div>

                <div class="nav-search d-flex ">
                    <form class="search-block ">
                        <span><i class="fa-solid fa-arrow-left-long search-cancel"></i></span>
                        <input type="search" name="search" class="search-input" placeholder="Search here...">
                        <span><i class="fa-solid fa-magnifying-glass search-icon"></i></span>
                    </form>
                    <button type="submit" class="search-btn">
                        <i class="fa-solid fa-magnifying-glass search-toggle"></i>
                    </button>
                    <div class="nav-button ms-3">
                        <a href="contact.html">
                            Get a quote
                        </a>
                    </div>
                </div>
            </div>
            <!-- nav menu start  -->
        </div>

    </nav>
    <!-- || NAV END  -->