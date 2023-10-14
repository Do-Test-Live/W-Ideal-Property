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

    <title>Ideal Property - 常見問題</title>

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

<div class=" m-5 " style=" max-width: 100%;">
    <div class="faq-item">
        <div class="faq-question">買村屋做按揭最高的成數，利率及年期是多少？</div>
        <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="faq-answer p-2">
        <p class="p-2">
            村屋最高按托揭的成數是可以做到八成半，利率跟一般H按、P按息率，銀行會提供「P按」及「H按」給買家選擇。兩者也是浮息按揭，即供樓利息可隨時間變化。一殷村屋年期最長就是25年，亦會因應客戶年紀及村屋的樓齡以有所限制。</p>
    </div>
    <div class="faq-item">
        <div class="faq-question">如果村屋單位有僭建物會有甚麼影響？</div>
        <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="faq-answer">
        <p class="p-2">要視乎單位有沒下到Building Order (僭建令)，如果單位在Land Search下了這個Building Order，我們便一定要首先完成清拆僭建物，否則其未能做住何買賣及按揭。</p>
    </div>
    <div class="faq-item">
        <div class="faq-question">村屋會有很多蛇蟲鼠蟻嗎?</div>
        <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="faq-answer">
        <p class="p-2">大多村屋都被花草榭木包圍，在這個自然環境下，自不然會有生物滋生，但是家裡的衛生程度才是昆蟲繁密重中之重的原因，所以保持家裡整潔衛生才是預防蛇蟲鼠蟻的最佳辦法。</p>
    </div>
    <div class="faq-item">
        <div class="faq-question">村屋會有很多不良人士嗎?</div>
        <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="faq-answer">
        <p class="p-2">如果你家裡有陌生人出現，你也可能會不客氣對待他對嗎？一班村民有老有嫩，若果村裡有陌生人出現，村民也會擔心是不是一些不懷好意的人士，從而會有一些防衛性行為出現。</p>
    </div>
    <div class="faq-item">
        <div class="faq-question">為什麼購買／租賃村屋時要特別留意「路權」?</div>
        <div class="icon-container"><i class="fas fa-chevron-right"></i></div>
    </div>
    <div class="faq-answer">
        <p class="p-2">
            村屋業權多樣，有些村屋外的道路，乃屬於私人道路，其擁有者有權開放或封路使用權，即使在租戶或業主門口亦是一樣。以致有些村屋的行車，甚至行人需要繳交路費才能使用，嚴重者會使業主或租戶有家歸不得。私人路除了有機會需繳付路費外，亦有機會因為修繕權在擁有人上，道路未必平坦，有時會日久失修。路燈照明亦是個問題，村屋門外可能只有小路到達，沒有路燈照明，也難以泊車運貨，造成很多不便。
            準業主或租客想查閱該村屋的「路權」狀況，可以透過地政總署取得一份叫「丈量約份圖」（Demarcation District，俗稱DD
            LOT圖）了解，分辨有關路段屬政府擁有，還是私人擁有。由於涉及不少專業知識，準業主或租客亦可以透過律師代為查冊辦理，確保附近路權可使用亦毋須繳交路費。
        </p>
    </div>
</div>


<?php include('include/footer.php'); ?>


<?php include('include/js.php'); ?>

<!--
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
</script>-->
<script>
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        const answer = item.nextElementSibling;
        const icon = item.querySelector('i');

        item.addEventListener('click', () => {
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    const otherAnswer = otherItem.nextElementSibling;
                    const otherIcon = otherItem.querySelector('i');

                    otherAnswer.classList.remove('active');
                    otherIcon.classList.remove('active');
                    otherAnswer.style.maxHeight = "0";
                }
            });

            answer.classList.toggle('active');
            icon.classList.toggle('active');
            if (answer.classList.contains('active')) {
                answer.style.maxHeight = answer.scrollHeight + "px";
            } else {
                answer.style.maxHeight = "0";
            }
        });
    });
</script>
</body>

</html>
