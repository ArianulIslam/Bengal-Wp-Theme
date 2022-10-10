<?php 
/** Footer Template
 * @package Bengla
 * 
 */

?>

    <!-- || FOOTER START  -->
    <footer class="footer footer__one">
        <div class="container footer__container">
            <div class="row footer__row__top">
                <div class="col-sm-12 col-lg-5 col-xl-5">
                    <a href="home1.html">
                        <img class="footer__logo" src="assets/images/logo/2.png" alt="footer-logo">
                    </a>
                    I
                </div>
                <div class="col-sm-12 col-lg-7 col-xl-7">
                    <div class="footer__newsletter ">
                        <h5 class="newsletter__heading">stay update with us</h5>
                        <div class="newslwtter__input ">
                            <input type="email" class="footer__top__input" placeholder="Enter your email">
                            <button type="submit" class="btn-3 newsletter__btn">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-5">
            <div class="row footer__row__bottom">
                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <ul class="social__icons__list">
                        <li class="social__icons__list__item"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        </li>
                        <li class="social__icons__list__item"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li class="social__icons__list__item"><a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        </li>
                        <li class="social__icons__list__item"><a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                        </li>

                    </ul>

                    <div class="footer__address">
                        <p>159, Milane Road, S4, 456 Rason</p>
                        <p>Town. Office</p>
                        <p>No - 3456</p>
                        <p>Lorem ipsum dolor sit amet.</p>


                    </div>

                    <div class="footer__contact">

                        <a class="footer__icon" href="tel:+667-6768404"><i
                                class="fa-solid fa-phone"></i>+667-6768404</a>

                        <a class="footer__icon" href="mailto:Medidol@gmail.com"> <i class="fa-solid fa-envelope"></i>
                            Medidol@gmail.com</a>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-xl-3">
                    <div class="footer__list">
                        <h3>our department</h3>
                        <ul class="">
                            <li><a href="#">Trauma & intensive care</a></li>
                            <li><a href="#">Aged Care</a></li>
                            <li><a href="#">Community Services</a></li>
                            <li><a href="#">Diagnosis & Investigation</a></li>
                            <li><a href="#">Medical & Surgical</a></li>
                            <li><a href="#">Mental Health</a></li>
                            <li><a href="#">Rehabitation</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-12 col-sm-4 col-md-3 col-xl-2">
                    <div class="footer__list">
                        <h3>
                            links
                        </h3>
                        <ul class="">
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Mission</a></li>
                            <li><a href="#">Awards</a></li>
                            <li><a href="#">Experience</a></li>
                            <li><a href="#">Success Story</a></li>
                            <li><a href="#">Specialised</a></li>
                            <li><a href="#">Support Service</a></li>

                        </ul>
                    </div>

                </div>

                <div class="col-5 col-sm-4 col-md-3 col-xl-2">
                    <div class="footer__list">
                        <h3>
                            days
                        </h3>
                        <ul class="">
                            <li>Monday:</li>
                            <li>Tuesday:</li>
                            <li>Wednesday:</li>
                            <li>Thursday:</li>
                            <li>Friday:</li>
                            <li>Saturday:</li>
                            <li>Sunday:</li>
                        </ul>
                    </div>

                </div>
                <div class="col-7 col-sm-4 col-lg-3 col-xl-2">
                    <div class="footer__list">
                        <h3>
                            opening hours
                        </h3>
                        <ul class="text-xl-start text-end">
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                            <li>08.00 - 10.00</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- || FOOTER END  -->


    <!-- || COPYRIGHTS START  -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div>
                        <span> Copyright &copy; </span>
                        <span id="copyright">
                            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
                        </span>

                        <span> Medidol. All rights reserved. </span>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- || COPYRIGHTS START  -->


    <!-- jquery -->
    <!-- <script src="assets/js/jquery.js"></script> -->

    <!-- bootstrap -->
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->

    <!-- font awesome  -->
    <!-- <script src="assets/js/all.min.js"></script> -->

    <!-- isotope js -->
    <!-- <script src="assets/js/isotope.min.js"></script> -->

    <!-- swiper  -->
    <!-- <script src="assets/js/swiper-bundle.min.js"></script> -->

    <!-- aos -->
    <!-- <script src="assets/js/aos.js"></script> -->

    <!-- custom  -->
    <!-- <script src="assets/js/custom.js"></script> -->

    <!-- <script type="module" src="assets/js/main.js"></script> -->

    <script>

        "use strict";

        // GALLERY SCRIPT START
        (function ($) {
            "use strict";
            $(document).ready(function () {
                $('.grid').isotope({
                    itemSelector: ".element__item",
                    layoutMode: "masonry",
                    percentPosition: true,
                    masonry: {
                        columnWidth: ".grid-sizer",
                        gutter: ".gutter-sizer",
                    },
                    itemSelector: '.element__item',
                    percentPosition: true,
                    fitWidth: true
                });

                // filter items on button click
                $('.filters-button-group').on('click', 'button', function () {
                    var filterValue = $(this).attr('data-filter');
                    $('.grid').isotope({ filter: filterValue });
                    $('.filters-button-group button').removeClass('active');
                    $('button').removeClass('is-checked');
                    $(this).addClass('active');
                });
            });
        })(jQuery);

        // GALLERY SCRIPT END

        window.addEventListener('load', () => {
            "use strict";
            // Slider 1 
            var swiper = new Swiper(".swiper__one", {
                slidesPerView: 4,
                spaceBetween: 30,
                loop: true,
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                navigation: {
                    prevEl: ".swiper-button-prev",
                    nextEl: ".swiper-button-next",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    576: {
                        slidesPerView: 2,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    991: {
                        slidesPerView: 3,

                    },
                    1200: {
                        slidesPerView: 4,
                        spaceBetween: 30,
                    },
                },
            });

            // Slider 2 
            var swiper = new Swiper(".swiper__two", {
                slidesPerView: 3,
                spaceBetween: 30,
                loop: true,
                effect: "coverflow",
                grabCursor: true,
                centeredSlides: true,
                slidesPerView: "auto",
                coverflowEffect: {
                    rotate: 50,
                    stretch: 0,
                    depth: 100,
                    modifier: 1,
                    slideShadows: true,
                },
                autoplay: {
                    delay: 1500,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                },

                navigation: {
                    prevEl: ".swiper-button-prev",
                    nextEl: ".swiper-button-next",
                },

                breakpoints: {
                    0: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    576: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 2,
                        spaceBetween: 30,
                    },
                    991: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    },
                    1200: {
                        slidesPerView: 3,
                        spaceBetween: 50,
                    },
                },
            });


            // Blog heading
            const blogHeading = document.getElementsByClassName("blog__item__title");
            for (const blogHeadingElem of blogHeading) {
                blogHeadingElem.addEventListener("click", function (e) {
                    window.location.href = "single-blog.html";
                });
            }

            //Department 
            const deptSec = document.getElementsByClassName("element__item__img");
            for (const deptTitle of deptSec) {
                deptTitle.addEventListener("click", function (e) {
                    window.location.href = "department.html";
                });
            }
        }, false);

        // TAB
        let tabSection = (evt, content) => {

            var i, tabcontent, tablinks;

            tabcontent = document.getElementsByClassName("tabcontent");

            for (let element of tabcontent) {
                element.style.display = "none";
            }


            tablinks = document.getElementsByClassName("tablinks");

            for (let elementLinks of tablinks) {
                elementLinks.className = elementLinks.className.replace(" active", "");
            }

            document.getElementById(content).style.display = "block";
            evt.currentTarget.className += " active";


        };
        if (document.getElementById("defaultOpen") != null) {
            let str = document.getElementById("defaultOpen").click();
        }



    </script>
  <?php wp_footer(); ?>
</body>

</html>
 