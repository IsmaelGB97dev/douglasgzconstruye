$(document).ready(function() {
    AOS.init();

    $('.serv-acordion .contenido').hide();
    $('.serv-acordion').click(function(){
        $(this).find('i').addClass('rotateUp-serv').removeClass('rotateDown-serv');
        $(this).find('i').addClass('rotateDown-serv').removeClass('rotateUp-serv');
        $('.serv-acordion .contenido').not($(this).find('.contenido')).hide();
        $(this).find('.contenido').toggle('slow');
    });


});