<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Synergia 4.0">

  <title>ORBIS</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/playgame.css" rel="stylesheet">

</head>

<body>
<audio src="../audio/viva-la-vida.mp3" autoplay="autoplay" loop="loop"></audio>
  <div class="container-fluid">
    <div class="lienzo-principal">
      <div class="personaje-principal"></div>
      <div class="stark"></div>
      <div class="mensaje">
        <p class="dialog">Hola a todos.</p>
      </div>
      <div class="tablero-game">
        <div class="ficha"></div>
        <div class="banner">
          <div class="personaje "></div>
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
  <!-- Bootstrap core JavaScript -->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#modalInitial').modal({keyboard: false});
      $('#button').on('click', function(){
        console.log('ingrese aca')
        $('#modalInitial').modal('hide');
      })
    });
  </script>

</body>

</html>
