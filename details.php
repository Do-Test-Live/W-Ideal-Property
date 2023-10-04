<?php
require_once("include/dbController.php");
$db_handle = new DBController();

$id = $_GET['id'];
$fetch_blog_detail = $db_handle->runQuery("select * from slider where id = '$id'");
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

<div class="container-fluid px-20px px-md-60px mt-60px mb-lg-5px">
    <div class="row align-items-center">
        <div class="col-lg-12 d-flex justify-content-center align-items-center">
            <div class="entry-media"><img src="<?php echo $fetch_blog_detail[0]['image'];?>" alt="Card image cap" style="max-height: 500px; width: auto;"></div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12 pt-40px pb-lg-30px">
            <h1 class="single-post-entry-title entry-title"><?php echo $fetch_blog_detail[0]['name'];?></h1>
        </div>
        <div class="col-lg-12">
            <div class="blog-post single-post">
                <article>
                    <div class="entry-content-wrapper">
                        <div class="entry-content">
                            <p><?php echo $fetch_blog_detail[0]['description'];?></p>
                        </div>
                    </div>
                </article>
            </div>
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
