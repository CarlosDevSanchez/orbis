let current = 0;
let imagenes = new Array();
$(document).ready(function(){
    let numImages = 6;
    $('#modalInitial').modal({keyboard: false});

    $('.left-arrow').on('click',function() {
    if (current >= numImages) {
        current = 0;
    } else {
        current += 1;
    }
    $( ".ficha" ).animate({ "left": "+=45px" }, "slow" );
    $('.personaje').css('animation', 'correr 1s steps(8) infinite')
    setTimeout(function(){ $('.personaje').css('animation', '')}, 5000);
    $(".carrusel").animate({"left": -($('#element-'+current).position().left)}, 5000);
    return false;
    });
});