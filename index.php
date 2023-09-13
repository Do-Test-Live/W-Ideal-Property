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

    <title>Ideal Property</title>

    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          referrerpolicy="no-referrer" rel="stylesheet"/>
    <link href='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css' rel='stylesheet'>
    <link href="styles/vendor.css" rel="stylesheet">
    <link href="styles/app.css" rel="stylesheet">

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
<div class="whatsapp-button">
    <a href="https://api.whatsapp.com/send?phone=69278453" target="_blank">
        <img src="images/whatsapp.png" alt="WhatsApp">
    </a>
</div>
<div class="header-three-container">
    <div class="container-fluid header-three-top-bar py-55px px-60px">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="navbar-modules d-none d-lg-flex justify-content-start">
                    <div class="navbar-module"><a href="#"><i class="fab fa-instagram"></i></a></div>
                    <div class="navbar-module"><a href="#"><i class="fab fa-youtube"></i></a></div>
                    <div class="navbar-module"><a href="https://wa.me/69278453" target="_blank"><i
                                    class="fab fa-whatsapp"></i></a></div>
                </div>
            </div>

            <div class="col-lg-4 text-center"><a class="navbar-brand" href="index.html"><img alt="Logo"
                                                                                             class="etcodes-normal-logo"
                                                                                             height="50"
                                                                                             src="images/logo.png"
                                                                                             width="200"><img
                            alt="Logo" class="etcodes-mobile-logo" height="50" src="images/logo.png" width="200"></a>
            </div>
            <div class="col-lg-4  d-lg-flex justify-content-end">
                <ul class="secondary-navbar">
                    <li><a href="#">店舖電話</a></li>
                    <li><a href="#"><i class="fa-solid fa-phone"></i> 29442266</a></li>
                </ul>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light header-three">
        <div class="container-fluid"><a class="navbar-brand" href="index.html"><img alt="Logo"
                                                                                    class="etcodes-normal-logo"
                                                                                    height="31"
                                                                                    src="images/logo.png"
                                                                                    width="141"><img
                        alt="Logo" class="etcodes-mobile-logo" height="31" src="images/logo.png" width="141"></a>
            <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler hamburger-menu-btn" data-target="#navbarNavDropdown" data-toggle="collapse"
                    type="button"><span>toggle menu</span></button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li><a aria-expanded="false" aria-haspopup="true"
                           class="nav-link" data-toggle="dropdown" href="#"
                           id="navbarDropdownMenuLinkHome">主頁</a>
                    </li>
                    <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                                                     class="dropdown-toggle nav-link"
                                                     data-toggle="dropdown" href="#">理想村屋</a>
                        <div aria-labelledby="navbarDropdownMenuLinkShop" class="dropdown-menu"><a class="dropdown-item"
                                                                                                   href="#">關於我們</a><a
                                    class="dropdown-item" href="#">服務範疇</a></div>
                    </li>
                    <li class="nav-item dropdown mega_menu_holder"><a class="nav-link" data-toggle="dropdown"
                                                                      href="#">村屋搜尋</a>
                    </li>
                    <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                                                     class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
                        >鄉村介紹</a>
                        <div aria-labelledby="navbarDropdownMenuLinkShop" class="dropdown-menu"><a class="dropdown-item"
                                                                                                   href="#">
                                推介打卡位 </a><a class="dropdown-item" href="#"> 休憩好去處 </a><a
                                    class="dropdown-item" href="#">特色飲食</a><a
                                    class="dropdown-item" href="#"> 交通配套</a></div>
                    </li>
                    <li class="nav-item dropdown mega_menu_holder"><a class="nav-link" data-toggle="dropdown"
                                                                      href="#">相關報導</a>
                    </li>
                    <li class="nav-item dropdown"><a aria-expanded="false" aria-haspopup="true"
                                                     class="nav-link dropdown-toggle" data-toggle="dropdown"
                                                                      href="#">有用資料</a>
                        <div aria-labelledby="navbarDropdownMenuLinkShop" class="dropdown-menu"><a class="dropdown-item"
                                                                                                   href="#" id="navbarDropdownMenuLinkShop">田土廳成交</a><a
                                    class="dropdown-item" href="#">印花稅表(計算器)
                            </a><a class="dropdown-item" href="#">銀行估價</a><a
                                    class="dropdown-item" href="#">按揭計算機</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="nav-link" data-toggle="dropdown"
                                                     href="#"
                                                     >聯絡我們 </a>
                    </li>
                    <li class="nav-item dropdown mega_menu_holder"><a class="nav-link" data-toggle="dropdown"
                                                                      href="#">常見問題</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

</div>


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
                                                href="#"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php echo $customer_data[$i]["description"]; ?>
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="custom-area"><?php echo $customer_data[$i]["area"]; ?></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p class="custom-price"><?php echo $customer_data[$i]["price"]; ?></p>
                                        </div>
                                    </div>
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
                                                href="#"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php echo $customer_data[$i]["description"]; ?>
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="custom-area"><?php echo $customer_data[$i]["area"]; ?></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p class="custom-price"><?php echo $customer_data[$i]["price"]; ?></p>
                                        </div>
                                    </div>
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
                                                href="#"><?php echo $customer_data[$i]["name"]; ?></a></h5>
                                    <p class="custom-content">
                                        <?php echo $customer_data[$i]["description"]; ?>
                                    </p>
                                    <div class="row">
                                        <div class="col-6">
                                            <p class="custom-area"><?php echo $customer_data[$i]["area"]; ?></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <p class="custom-price"><?php echo $customer_data[$i]["price"]; ?></p>
                                        </div>
                                    </div>
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


<section class="contact-area" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="contact-content text-center">
                    <div class="row d-lg-flex justify-content-center">
                        <a href="#"><img alt="logo" src="images/f.png"></a>
                    </div>
                    <p>讓你體驗一個不一樣的村屋代理 </br>
                        讓你輕輕鬆鬆掌握村屋置業機會 </p>
                    <div class="hr"></div>
                    <h6>香港新界元朗青山公路元朗段177號 3樓</h6>
                    <h6>29442266</h6>
                    <div class="contact-social">
                        <ul>
                            <li><a class="hover-target" href=""><i class="fab fa-instagram"></i></a></li>
                            <li><a class="hover-target" href=""><i class="fab fa-youtube"></i></a></li>
                            <li><a class="hover-target" href="https://wa.me/69278453" target="_blank"><i
                                            class="fab fa-whatsapp"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--<footer class="web-footer footer">
    <div class="web-footer footer py-45px primary-bg-color">
        <div class="container">
            <div class="row large-gutters">
                <div class="col-md-12 text-center">
                    <div class="footer-widget">
                        <p class="m-md-0">© 2023 Ideal Property powered by <span> <a href="https://ngt.hk"> NGT </a></span> tech</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>-->

<script src='https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js'></script>
<script src="scripts/vendor.js" type="text/javascript"></script>
<script src="scripts/app.js" type="text/javascript"></script>
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
