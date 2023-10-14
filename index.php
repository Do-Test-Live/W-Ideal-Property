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

    <title>Ideal Property - 主頁</title>

    <?php include ('include/css.php');?>

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

<?php include ('include/whatsapp_button.php');?>


<?php include ('include/menu.php');?>


<div class="container mb-75px">
    <div class="row align-items-center mb-25px">
        <div class="col-md-9" style="padding-left: 35px;padding-top: 36px;">
            <h4 class="text-grey font-weight-bold" style="color: #f57103; font-size: 35px;">最新新聞/資訊</h4>
        </div>
    </div>

    <section class="section slider-section">
        <div class="container slider-column">
            <div class="swiper swiper-slider">
                <div class="swiper-wrapper">
                    <?php
                    $customer_data = $db_handle->runQuery("SELECT * FROM slider where section_name='最新新聞/資訊' order by id desc");
                    $row_count = $db_handle->numRows("SELECT * FROM slider where section_name='最新新聞/資訊' order by id desc");

                    for ($i = 0; $i < $row_count; $i++) {
                        ?>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img-wrapper">
                                    <img alt="Product image" src="<?php echo $customer_data[$i]["image"]; ?>"/>
                                </div>
                                <div class="product-content-wrapper">
                                    <h5 class="product-title custom-product-title"><a
                                                href="details.php?id=<?php echo $customer_data[$i]['id'];?>"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php
                                        $description = $customer_data[$i]["description"];
                                        $limited_description = (strlen($description) > 300) ? substr($description, 0, 300) . '...' : $description;
                                        echo $limited_description;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div style="height: 5rem">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <span class="swiper-pagination"></span>
                <span class="swiper-button-prev"></span>
                <span class="swiper-button-next"></span>
            </div>
        </div>
    </section>

</div>

<div class="container mb-75px">
    <div class="row align-items-center mb-25px">
        <div class="col-md-9" style="padding-left: 35px;padding-top: 75px;">
            <h4 class="text-grey font-weight-bold" style="color: #f57103; font-size: 35px;">獨家村屋推介</h4>
        </div>
    </div>

    <section class="section slider-section">
        <div class="container slider-column">
            <div class="swiper swiper-slider">
                <div class="swiper-wrapper">
                    <?php
                    $customer_data = $db_handle->runQuery("SELECT * FROM slider where section_name='獨家村屋推介' order by id desc");
                    $row_count = $db_handle->numRows("SELECT * FROM slider where section_name='獨家村屋推介' order by id desc");

                    for ($i = 0; $i < $row_count; $i++) {
                        ?>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img-wrapper">
                                    <img alt="Product image" src="<?php echo $customer_data[$i]["image"]; ?>"/>
                                </div>
                                <div class="product-content-wrapper">
                                    <h5 class="product-title custom-product-title"><a
                                                href="details.php?id=<?php echo $customer_data[$i]['id'];?>"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php
                                        $description = $customer_data[$i]["description"];
                                        $limited_description = (strlen($description) > 300) ? substr($description, 0, 300) . '...' : $description;
                                        echo $limited_description;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div style="height: 5rem">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <span class="swiper-pagination"></span>
                <span class="swiper-button-prev"></span>
                <span class="swiper-button-next"></span>
            </div>
        </div>
    </section>

</div>

<div class="container mb-75px" style="margin-bottom: 20px !important;">
    <div class="row align-items-center mb-25px">
        <div class="col-md-9" style="padding-left: 35px;padding-top: 75px;">
            <h4 class="text-grey font-weight-bold" style="color: #f57103; font-size: 35px;">精選村屋推介</h4>
        </div>
    </div>

    <section class="section slider-section">
        <div class="container slider-column">
            <div class="swiper swiper-slider custom-product-slider">
                <div class="swiper-wrapper">
                    <?php
                    $customer_data = $db_handle->runQuery("SELECT * FROM slider where section_name='精選村屋推介' order by id desc");
                    $row_count = $db_handle->numRows("SELECT * FROM slider where section_name='精選村屋推介' order by id desc");

                    for ($i = 0; $i < $row_count; $i++) {
                        ?>
                        <div class="swiper-slide">
                            <div class="product">
                                <div class="product-img-wrapper">
                                    <img alt="Product image" src="<?php echo $customer_data[$i]["image"]; ?>"/>
                                </div>
                                <div class="product-content-wrapper">
                                    <h5 class="product-title custom-product-title"><a
                                                href="details.php?id=<?php echo $customer_data[$i]['id'];?>"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php
                                        $description = $customer_data[$i]["description"];
                                        $limited_description = (strlen($description) > 300) ? substr($description, 0, 300) . '...' : $description;
                                        echo $limited_description;
                                        ?>
                                    </p>
                                </div>
                            </div>
                            <div style="height: 5rem">
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <span class="swiper-pagination"></span>
                <span class="swiper-button-prev"></span>
                <span class="swiper-button-next"></span>
            </div>
        </div>
    </section>

</div>


<?php include ('include/footer.php');?>


<?php include ('include/js.php');?>


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
