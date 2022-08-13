<div class="owl-slider owl-carousel owl-theme">
    <div class="slide">
        <img src="./images/sl-movi.svg">
    </div>
    <div class="slide">
        <img src="./images/sl-hdbank.svg">
    </div>
    <div class="slide">
        <img src="./images/sl-vietjet.svg">
    </div>
    <div class="slide">
        <img src="./images/sl-hdsaigon.svg">
    </div>
    <div class="slide">
        <img src="./images/sl-tp.svg">
    </div>
</div>

<script>
    $('.owl-slider').owlCarousel({
        nav:true,
        loop:true,
        margin:15,
        center: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });
</script>