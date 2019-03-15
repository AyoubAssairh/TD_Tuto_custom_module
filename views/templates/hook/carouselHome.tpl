<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

<!-- Slider main container -->
<div id="mainCont" class="swiper-container">
    <!-- Additional required wrapper -->
    <div id='swiperCont' class="swiper-wrapper">
        <!-- Slides -->
        {foreach from=$comments item=comment}
            <div class="swiper-slide">
                <div class="w3-card-4">
                    <div class="w3-container">
                        <blockquote>"{$comment['comment']}"</blockquote>
                    </div>
                    <footer class="w3-container w3-blue">
                        <h5>{$comment['firstname']} {$comment['lastname']}</h5>
                    </footer>
                </div>
            </div>
        {/foreach}
    </div>
    <!-- If we need pagination -->
    <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

<script>
    var mySwiper = new Swiper ('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    })
</script>

<style>
    #mainCont{
        height: 100px;
        text-align: center;
    }
    #swiperCont{
        text-align: center;
    }
</style>
