<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>ORBIS || AMAO Musical</title>
		<!-- Bootstrap core CSS -->
		<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<!-- Custom styles for this template -->
		<link href="../css/login.css" rel="stylesheet" />
	</head>
    <body>
        <div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-6">
					<div class="d-flex align-items-center py-5">
						<div class="container">
							<div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
									<h3 class="login-heading mb-4 text-center">¡Bienvenido a ORBIS!</h3>
									<form id="formRegister" method="POST">
                                        <div class="form-label-group">
											<input type="text" name="inputCodeSegurity" class="form-control" placeholder="Codigo de seguridad" required autofocus />
											<label>Codigo de seguridad</label>
										</div>

										<div class="form-label-group">
											<input type="text" name="inputName" class="form-control" placeholder="Nombre" required />
											<label>Nombre</label>
										</div>

										<div class="form-label-group">
											<input type="text" name="inputLastname" class="form-control" placeholder="Apellido" required />
											<label>Apellido</label>
										</div>

										<div class="form-label-group">
											<input type="text" name="inputUsername" class="form-control" placeholder="Nombre de usuario" required />
											<label>Nombre de usuario</label>
										</div>

										<div class="form-label-group">
											<input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required />
											<label>Contraseña</label>
										</div>

										<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">
											Registrarme
										</button>
									</form>
									<div class="text-center">
										<a class="small" href="../index.php">Volver al inicio de sesion</a>
									</div>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
	<script src="../vendor/jquery/jquery.min.js"></script>
	<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="../js/form.js"></script>
</html>