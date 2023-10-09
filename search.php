<?php
require_once("include/dbController.php");
$db_handle = new DBController();
$s = 0;
if (isset($_POST['search'])) {
    $key = $db_handle->checkValue($_POST['key']);
    $search_result = $db_handle->runQuery("SELECT * FROM `slider` WHERE name LIKE '%$key%'");
    if ($search_result) {
        $s = 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">

    <link href="images/favicon.ico" rel="shortcut icon">

    <title>Ideal Property - 村屋搜尋</title>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
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

        .select2-container--default .select2-selection--single .select2-selection__arrow {
            top: 14px;
            right: 10px;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            line-height: 55px;
        }

        .select2-container--default .select2-selection--single {
            height: 60px;
            margin-right: 0.25rem;
        }

        .search-form .btn {
            color: #161b3d;
            padding: 0.625rem 30px 0.375rem 30px;
            box-shadow: none;
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
                <h2 class="entry-title">村屋搜尋</h2>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="widget">
                <form class="search-form" action="#" method="post">
                    <div class="row">
                        <div class="col-lg-5 mb-3">
                            <select class="js-example-disabled-results form-control" name="search" required>
                                <option value="">類別</option>
                                <option value="地區：">地區：</option>
                                <option value="類別：">類別：</option>
                                <option value="價錢：">價錢：</option>
                                <option value="呎數：">呎數：</option>
                                <option value="房數：">房數：</option>
                            </select>
                        </div>
                        <div class="col-lg-5 mb-3">
                            <input class="form-control" type="text" alt="" name="key" placeholder="關鍵字" required>
                        </div>
                        <div class="col-lg-2 mb-3">
                            <div class="input-group-append">
                                <button class="btn" type="submit" name="search"><i class="fa fa-search"
                                                                                   aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php
if ($s == 1) {
    ?>
    <div class="container">
        <div class="row blog-post">
            <?php
            $no_search_result = $db_handle->numRows("SELECT * FROM `slider` WHERE name LIKE '%$key%'");
            for ($i = 0; $i < $no_search_result; $i++) {
                ?>
                <div class="col-md-4 col-lg-4">
                    <article>
                        <div class="entry-media"><img src="<?php echo $search_result[$i]['image']; ?>"
                                                      alt="Entry Image"/>
                        </div>
                        <div class="entry-content-wrapper">
                            <h5 class="entry-title"><a
                                        href="details.php?id=<?php echo $search_result[$i]['id']; ?>"><?php echo $search_result[$i]['name']; ?></a>
                            </h5>
                            <div class="entry-content">
                                <p><?php $description = $search_result[$i]['description'];
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
    <?php
}
?>


<?php include('include/footer.php'); ?>


<?php include('include/js.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    let $disabledResults = $(".js-example-disabled-results");
    $disabledResults.select2();

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
