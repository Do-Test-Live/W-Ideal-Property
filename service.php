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

    <title>Ideal Property - 服務範疇</title>

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
        <div class="row text-center">
            <div class="col-md-8 offset-md-2 text-center text-center all-text-content-white">
                <h2 class="entry-title"></h2>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-9">
            <h4 class="text-grey font-weight-bold" style="color: #f57103; font-size: 35px;">服務範疇</h4>
        </div>
        <div class="col-12">
            <p>我們服務範疇包括: 村屋別墅租賃買賣, 農地土地倉地租賃買賣, 村屋規劃發展, 丁屋建築設計, 按揭貸款轉介, 投資策劃銷售等等。</p>
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
