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

    <title>Ideal Property - 關於我們</title>

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

<div class="page-main-title-2 mt-60px mb-60px mx-20px mx-lg-60px bg-img-3">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-8 offset-md-2 text-center text-center all-text-content-white">
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div class="row">
        <div class="col-md-9">
            <h4 class="text-grey font-weight-bold" style="color: #f57103; font-size: 35px;">關於我們</h4>
        </div>
        <div class="col-12">
            <p>村屋常見於新界，普遍樓高不過三層，每層不過700呎，間隔四正，非常實用。村屋呎價較私人屋苑低，帶旺了周遭，小巴班次相應加密。這裡環境清幽，遠離繁囂，適合有大有細或有毛孩作伴的家庭</p>
            <p>理想村屋有限公司位元朗市中心, 專門經營元朗, 屯門, 天水圍, 洪水橋, 錦上路, 錦田, 大棠, 朗屏等地區村屋別墅土地租賃及買賣達10多年豐富經驗。</p>
            <p>我們代理豐富經驗及良好專業服務態度, 一直深受客戶讚許。我們承諾秉承公司以往精神, 誠意用心的專業態度, 為各客戶尋找心目中的「理想村屋」。</p>
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
