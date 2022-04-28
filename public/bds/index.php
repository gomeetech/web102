<!DOCTYPE html>
<html lang="zxx">



<head>
    <?php include 'templates/head.php' ?>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/aos2.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/slick.css">

    <link rel="stylesheet" href="css/maps.css">

</head>

<body class="homepage-9 hp-6 homepage-1">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <?php $header_type = 2; ?>
        <?php include 'templates/header.php' ;?>
        <!-- Header Container / End -->

        <?php include 'templates/components/home/parallax-searchs-1.php'; ?>
        
        <?php include 'templates/components/home/about.php'; ?>

        <?php include 'templates/components/home/services.php'; ?>

        <?php include 'templates/components/home/places.php'; ?>

        <?php include 'templates/components/home/pricing-table.php';?>

        <!-- START SECTION WHY CHOOSE US -->
        <?php include 'templates/components/home/how-it-works.php';?>
        <!-- END SECTION WHY CHOOSE US -->        
        
        

        <!-- START SECTION FEATURED PROPERTIES -->
        <?php include 'templates/components/home/featured-portfolio-1.php'; ?>
        <!-- END SECTION FEATURED PROPERTIES -->

        <!-- START SECTION RECENTLY PROPERTIES -->
        <?php include 'templates/components/home/featured-portfolio-2.php'; ?>
        <!-- END SECTION RECENTLY PROPERTIES -->
        <!-- START SECTION AGENTS -->
        <?php include 'templates/components/home/team-agents.php'; ?>
        <!-- END SECTION AGENTS -->

        <!-- START SECTION TESTIMONIALS -->
        <?php include 'templates/components/home/testimonials.php'; ?>
        <!-- END SECTION TESTIMONIALS -->


        <!-- STAR SECTION PARTNERS -->
        <?php include 'templates/components/home/partners.php'; ?>
        <!-- END SECTION PARTNERS -->

        <!-- START FOOTER -->
        <?php include 'templates/footer.php'; ?>
        <!-- END FOOTER -->

        <!--register form -->
        <?php include 'templates/components/home/login-and-register-form.php'; ?>
        <!--register form end -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->
        <?php include 'templates/js.php'; ?>

        <!-- ARCHIVES JS -->
        <script src="js/rangeSlider.js"></script>
        <script src="js/moment.js"></script>
        
        
        
        <script src="js/aos.js"></script>
        <script src="js/aos2.js"></script>
        <script src="js/animate.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/fitvids.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/typed.min.js"></script>
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/lightcase.js"></script>
        <script src="js/search.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/ajaxchimp.min.js"></script>
        <script src="js/jquery.form.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/searched.js"></script>
        <script src="js/forms-2.js"></script>
        <script src="js/map-style2.js"></script>
        <script src="js/range.js"></script>
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });

        </script>

        <!-- Slider Revolution scripts -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <script>
            var typed = new Typed('.typed', {
                strings: [
                    "Căn Hộ Mơ Ước ^2000", 
                    "Second Home Tuyệt Vời ^2000", 
                    "Cơ Hội Đầu Tư Phù Hợp ^4000"
                ],
                smartBackspace: false,
                loop: true,
                showCursor: true,
                cursorChar: "|",
                typeSpeed: 50,
                backSpeed: 30,
                startDelay: 800
            });

        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 4,
                slidesToScroll: 1,
                dots: true,
                arrows: false,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });

        </script>

        <script>
            $('.job_clientSlide').owlCarousel({
                items: 2,
                loop: true,
                margin: 30,
                autoplay: false,
                nav: true,
                smartSpeed: 1000,
                slideSpeed: 1000,
                navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    991: {
                        items: 3
                    }
                }
            });

        </script>

        <script>
            $('.style2').owlCarousel({
                loop: true,
                margin: 0,
                dots: false,
                autoWidth: false,
                autoplay: true,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 2,
                        margin: 20
                    },
                    400: {
                        items: 2,
                        margin: 20
                    },
                    500: {
                        items: 3,
                        margin: 20
                    },
                    768: {
                        items: 4,
                        margin: 20
                    },
                    992: {
                        items: 5,
                        margin: 20
                    },
                    1000: {
                        items: 7,
                        margin: 20
                    }
                }
            });

        </script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>



</html>
