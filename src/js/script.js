$(document).ready(function() {
    AOS.init();

    // console.log('hola');
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


});