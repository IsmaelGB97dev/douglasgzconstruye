$(document).ready(function() {
    AOS.init();

    // Menu fixed top
    $(document).scroll(function() {
        let scrollY = window.scrollY;

        if(scrollY >= 100) {
            $('.top-info').addClass('d-none');
            $('.header-1').addClass('bg-trans fixed-top').removeClass('bg-white');
        }
        else {
            $('.top-info').removeClass('d-none');
            $('.header-1').removeClass('bg-trans').addClass('bg-white');
        }
    });

    // Efecto before and after
    $("#slider").on("input change", (e)=>{
        const sliderPos = e.target.value;
        // Update the width of the foreground image
        $('.foreground-img').css('width', `${sliderPos}%`)
        // Update the position of the slider button
        $('.slider-button').css('left', `calc(${sliderPos}% - 18px)`)
    });


});