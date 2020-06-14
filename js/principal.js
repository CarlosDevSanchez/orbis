//aps actualizaciones por segundo
//frames por segundo
let buclePrincipal = {
    idEjecucion: null,
    ultimoRegistro: 0,
    aps: 0,
    fps: 0,
    iterar: function(registroTemporal){
        buclePrincipal.idEjecucion = window.requestAnimationFrame(buclePrincipal.iterar);

        buclePrincipal.actualizar(registroTemporal);
        buclePrincipal.dibujar();
    },
    detener: function(){},
    actualizar: function(registroTemporal){
        buclePrincipal.aps++;
    },
    dibujar: function(registroTemporal){
        buclePrincipal.fps++;
    }
};