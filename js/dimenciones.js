let dimenciones = {
    ancho: window.innerWidth,
    alto: window.innerHeight,
    iniciar: function(){ 
        window.addEventListener('resize', function(e){
            dimenciones.ancho = window.innerWidth;
            dimenciones.alto = window.innerHeight;
        });
    }
};