<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<meta name="description" content="" />
		<meta name="author" content="Synergia 4.0" />

		<title>ORBIS || AMAO Musical</title>

		<!-- Bootstrap core CSS -->
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Custom styles for this template -->
		<link href="../css/playgame.css" rel="stylesheet" />

		<!-- Dropzone -->
		<link rel="stylesheet" href="../vendor/dropzone-5.7.0/dist/dropzone.css" />
		<link rel="stylesheet" href="../css/dz-upload-file.css">
		<script src="../vendor/dropzone-5.7.0/dist/dropzone.js"></script>
	</head>

	<body>
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

		<!-- Bootstrap core JavaScript -->
		<script src="../vendor/jquery/jquery.min.js"></script>
		<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Script upload file Dropzone -->
		<script src="../js/upload-file.js"></script>

		<script>
			$(document).ready(function () {
				$('#modalDropzone').modal({ keyboard: false })
			})
		</script>
	</body>
</html>
