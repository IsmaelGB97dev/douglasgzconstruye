$(document).ready(function() {
    AOS.init();

    $('.serv-acordion .contenido').hide();
    $('.serv-acordion').click(function(){
        $('.serv-acordion .contenido').not($(this).find('.contenido')).hide();
        $(this).find('.contenido').toggle('slow');
    });


});