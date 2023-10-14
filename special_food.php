<?php
require_once("include/dbController.php");
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link href="images/favicon.ico" rel="shortcut icon">

    <title>Ideal Property - 特色飲食</title>

    <?php include('include/css.php'); ?>

    <style>
        .swiper-button-next, .swiper-button-prev {
            margin-top: -150px;
        }

        .custom-product-title {
            font-size: 25px;
        }

        .custom-content {

        }

        .custom-area {
            color: #5b5b5b;
        }

        .custom-price {
            font-size: 20px;
            font-weight: bold;
            color: #f57103;
        }
    </style>
</head>
<body>

<?php include('include/whatsapp_button.php'); ?>


<?php include('include/menu.php'); ?>

<div class="page-main-title-2 mt-60px mb-60px mx-20px mx-lg-60px bg-img-1">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2 text-center text-center all-text-content-white">
                <h2 class="entry-title">特色飲食</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row blog-post">
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/1.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a href="#">Photography</a></span><span
                            class="post-meta-date">NOV 11, 2020</span></div>
                    <h5 class="entry-title"><a href="#">Aenean mattis tortor ac sapien congue
                            molestie</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/2.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="#">Humour</a></span><span class="post-meta-date">NOV 11, 2020</span>
                    </div>
                    <h5 class="entry-title"><a href="#">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/3.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a href="#">Photography</a></span><span
                            class="post-meta-date">NOV 11, 2020</span></div>
                    <h5 class="entry-title"><a href="#">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/4.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="#">Humour</a></span><span class="post-meta-date">NOV 11, 2020</span>
                    </div>
                    <h5 class="entry-title"><a href="#">Curabitur pretium lectusnc ine fermentum
                            fermen</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/5.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a href="#">Photography</a></span><span
                            class="post-meta-date">NOV 11, 2020</span></div>
                    <h5 class="entry-title"><a href="#">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/6.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="#">Humour</a></span><span class="post-meta-date">NOV 11, 2020</span>
                    </div>
                    <h5 class="entry-title"><a href="#">Etiam commodo eros non erat tristique
                            congue</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/7.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a href="#">Photography</a></span><span
                            class="post-meta-date">NOV 11, 2020</span></div>
                    <h5 class="entry-title"><a href="#">Pellentesque ipsum magna neu ultrices vitae
                            rutrum</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/8.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a href="#">Photography</a></span><span
                            class="post-meta-date">NOV 11, 2020</span></div>
                    <h5 class="entry-title"><a href="#">Aenean mattis tortor ac sapien congue
                            molestie.</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
        <div class="col-md-4 col-lg-4">
            <article>
                <div class="entry-media"><img src="images/home-3/9.jpg" alt="Entry Image"/>
                </div>
                <div class="entry-content-wrapper">
                    <div class="entry-meta-top"><span class="entry-meta-category"><a
                                href="#">Humour</a></span><span class="post-meta-date">NOV 11, 2020</span>
                    </div>
                    <h5 class="entry-title"><a href="#">Suspendisse viverra massa eget nibh
                            ultricies mollis</a></h5>
                    <div class="entry-content">
                        <p>Quisque sollicitudin lacinia sapien, eu tincidunt nun accumsan nec laoreet. Curabitur feugiat
                            posuere odio.</p>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>


<?php include('include/footer.php'); ?>


<?php include('include/js.php'); ?>


<script>
    const swiper = new Swiper(".swiper-slider", {
        // Optional parameters
        centeredSlides: false,
        slidesPerView: 1,
        grabCursor: true,
        freeMode: false,
        loop: true,
        mousewheel: false,
        keyboard: {
            enabled: true
        },

        // Enabled autoplay mode
        autoplay: {
            delay: 3000,
            disableOnInteraction: false
        },

        // If we need pagination
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: false,
            clickable: true
        },

        // If we need navigation
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev"
        },

        // Responsive breakpoints
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });
</script>
</body>

</html>
