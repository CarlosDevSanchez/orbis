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

    let datos = [
        {title: 'Karaoque Musical Caribe Canta', text: 'Hola, amigo de AMAO hoy comenzaremos una travecia por el maravillozo mundo de ORBIS, en esta actividad podras mostrar tus dotes musicales a traves del karaoque musical, aqui podras realizar la actividad con compañia de tus padres donde debes hacer un video en formato mp4 y subir a nuestra plataforma esa evidencia del karaoque musical, nota: Como guia de la actividad tomar una de las canciones del link acontinuacion y podras realizar de la mejor manera tu actividad. plataform youtube: https://www.youtube.com/watch?v=lkAeKkVzf2Y, https://www.youtube.com/watch?v=x4x-Z5NdWZw, https://www.youtube.com/watch?v=sWHUWkIqZ0U, https://www.youtube.com/watch?v=mYqcK0V5iHs'},
        {title: 'Toca el instrumento: como suena la region andina', text: 'Hola, otra vez amigos en esta actividad podras mostrar mucho mejor tus dotes musicales donde tendras el gran reto de tocar tu instrumento preferido y realizar un video en formato mp4, aqui tambien podras contar con la ayuda de tus padres y asi poder completar esta mision.'},
        {title: 'Eje cafetero ciencia pendiente', text: 'Hola, amigos en esta actividad tendremos otro gran reto para ti, a traves de tus conocimientos cientificos y quimicos podras darnos una muestra grande a traves de la actividad que se llevara acabo, en esta actividad es muy importante que te acompañen tus padres para asi no contar con accidentes y puedas cumplir con el reto principal que es hacer una volcan y subir tu video demostrando como fue tu paso a paso de la actividad. nota: el video debe estar en formato mp4', add: 'https://www.youtube.com/watch?v=5TSQ9IpVkkE&feature=youtu.be'},
        {title: '', text: ''}
    ];

    $('.actividad-title').text(datos[current - 1].title);
    $('.actividad-text').text(datos[current - 1].text);
    $('.actividad-add').attr('src', datos[current - 1].add)

    setTimeout(function(){$('#modalDropzone').modal('show')}, 6000);
    return false;
    });

    $('#modalDropzoneDismiss').on('click', function(){
        $('#modalDropzone').modal('hide')
    })
});