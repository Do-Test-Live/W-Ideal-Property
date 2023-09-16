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

    <title>Ideal Property - 聯絡我們</title>

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

<div class="container mb-40px mt-60px">
    <div class="row large-gutters">
        <div class="col-lg-6 col-12 mb-40px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3687.58347547108!2d114.0241633759453!3d22.444697937644747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403f0a041bab531%3A0xe9edfe5f86225acb!2s177%20Castle%20Peak%20Rd%20-%20Yuen%20Long%2C%20Yuen%20Long%2C%20Hong%20Kong!5e0!3m2!1sen!2sbd!4v1694862733428!5m2!1sen!2sbd"
                    width="560" height="650" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6 mb-40px">
            <h2 class="mb-15px">Get in touch with Us</h2>
            <p>地址: 香港新界元朗青山公路元朗段177號 3樓</p>
            <p>電話: 3425 4563</p>
            <p>電郵: info@idealproperty.hk</p>
            <form id="contact-form" method="post" action="https://energeticthemes.com/templates/dabba/php/contact.php"
                  class="mt-3">
                <div class="row mb-0">
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group mb-30px">
                            <input class="form-control" id="form_name" type="text" name="name" placeholder="Name"
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="form-group mb-30px">
                            <input class="form-control" id="form_email" type="email" name="email" placeholder="Email"
                                   required>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="form-row mb-15px">
                    <div class="form-group col-md-12">
                        <div class="form-group mb-0">
                            <textarea class="form-control" id="form_message" name="message" placeholder="Comment"
                                      rows="7" required></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-xs-12 align-left">
                        <button class="btn btn-shadow disabled" type="submit"
                                style="pointer-events: all; cursor: pointer;">Submit
                        </button>
                    </div>
                </div>
                <div class="loading-spinner"></div>
                <div class="messages mt-20px"></div>
            </form>
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
