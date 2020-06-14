<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Login</title>
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
											<input type="text" name="inputUsername" class="form-control" placeholder="Nombre de usuario" required />
											<label>Nombre de usuario</label>
										</div>

										<div class="form-label-group">
											<input type="password" name="inputPassword" class="form-control" placeholder="Contraseña" required />
											<label>Contraseña</label>
										</div>

                                        <div class="form-label-group">
											<input type="password" name="newinputPassword" class="form-control" placeholder="De nuevo contraseña" required />
											<label>De nuevo contraseña</label>
										</div>

										<button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">
											Registrarme
										</button>
										<div class="text-center">
											<a class="small" href="../index.php">Volver al inicio de sesion</a>
										</div>
									</form>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>