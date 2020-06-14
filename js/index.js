document.addEventListener('DOMContentLoaded', function(){
    inicio.iniciarJuego();
}, false);

let inicio = {
    iniciarJuego: function(){
        dimenciones.iniciar();
        buclePrincipal.iterar();
    }
};