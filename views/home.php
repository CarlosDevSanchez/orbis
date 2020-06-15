<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Synergia 4.0">

  <title>ORBIS || AMAO Musical</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../vendor/dropzone-5.7.0/dist/dropzone.css">
  <script src="../vendor/dropzone-5.7.0/dist/dropzone.js"></script>

  <!-- @Carlos, bro este es un pequeño css para redondear el modal -->
  <link rel="stylesheet" href="../css/dz-upload-file.css">

  <!-- Custom styles for this template -->
  <link href="../css/playgame.css" rel="stylesheet">

</head>

<body>
<!-- <audio src="../audio/viva-la-vida.mp3" autoplay="autoplay" loop="loop"></audio> -->
  <div class="container-fluid">
    <div class="lienzo-principal">
      <div class="personaje-principal"></div>
      <div class="stark"></div>
      <p class="globo">Hola, bienvenidos a ORBIS</p> 
      <div class="left-arrow"></div>
      <div class="tablero-game">
        <div class="ficha"></div>
      </div>
      <div id="carrusel">
        <div class="personaje"></div>
        <div class="carrusel">
          <div class="element" id="element-0">
            <img src="../src/game/estaciones/bqlla-1.svg" width="455" height="360" />
          </div>
          <div class="element" id="element-1">
            <img src="../src/game/estaciones/bqlla-2.svg" width="455" height="360" />
          </div>
          <div class="element" id="element-2">
            <img src="../src/game/estaciones/bqlla-3.svg" width="455" height="360" />
          </div>
          <div class="element" id="element-3">
            <img src="../src/game/estaciones/bqlla-3.svg" width="455" height="360" />
          </div>
          <div class="element" id="element-4">
            <img src="../src/game/estaciones/bqlla-3.svg" width="455" height="360" />
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalInitial" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl">
      <div class="initial">
        <img src="../src/game/components/play.svg" class="button-play" id="button" alt="play" />
      </div>
    </div>
  </div>
  <div class="modal fade" id="modalDropzone" role="dialog" aria-hidden="true">
    <div class="modal-body">
      <div id="dropzone">
        <form action="../php/upload-file.php" class="dropzone needsclick dz-clickable" id="myDrop">
          <div class="dz-message needsclick">
            <h1>¡Genial! <span>Es hora de subir la actividad...</span></h1>
            <button type="button" class="dz-button">Suelte los archivos aquí o haga clic para cargar.</button><br />
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary">Guardar cambios</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- End Modal -->

  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../js/index.js"></script>
  <script src="../js/upload-file.js"></script>
</body>
</html>
