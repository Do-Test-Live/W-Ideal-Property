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

    <title>Ideal Property - 休憩好去處</title>

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
                <h2 class="entry-title">休憩好去處</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">

    <div class="row blog-post">
        <?php
        $fetch_blog = $db_handle->runQuery("select * from blog where category_id = '4' order by id desc");
        $no_fetch_blog = $db_handle->numRows("select * from blog where category_id = '4'");
        for($i=0; $i<$no_fetch_blog; $i++){
            ?>
            <div class="col-md-4 col-lg-4">
                <article>
                    <div class="entry-media"><img src="<?php echo $fetch_blog[$i]['image'];?>" alt="Entry Image"/>
                    </div>
                    <div class="entry-content-wrapper">
                        <h5 class="entry-title"><a href="blog_details.php?id=<?php echo $fetch_blog[$i]['id'];?>"><?php echo $fetch_blog[$i]['title'];?></a></h5>
                        <div class="entry-content">
                            <p><?php $description = $fetch_blog[$i]['description'];
                                $shortDescription = substr($description, 0, 150) . '...';
                                echo $shortDescription;
                                ?></p>
                        </div>
                    </div>
                </article>
            </div>
            <?php
        }
        ?>
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
