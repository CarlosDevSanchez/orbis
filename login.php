<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<title>Login</title>

		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Custom styles for this template -->
		<link href="css/login.css" rel="stylesheet" />
	</head>

	<body>
		<div class="container-fluid">
			<div class="row no-gutter">
				<div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
				<div class="col-md-12 col-lg-6">
					<div class="login d-flex align-items-center py-5">
						<div class="container">
							<div class="row">
								<div class="col-md-9 col-lg-8 mx-auto">
									<div class="row">
										<div class="col-lg-12 align-items-center">
											<img class="img-fluid" src="src/AMAO.png" />
										</div>
									</div>
									<h3 class="login-heading mb-4 text-center">¡Bienvenido a ORBIS!</h3>
									<form>
										<div class="form-label-group">
											<input
												type="email"
												id="inputEmail"
												class="form-control"
												placeholder="Email address"
												required
												autofocus
											/>
											<label for="inputEmail">Email</label>
										</div>

										<div class="form-label-group">
											<input type="password" id="inputPassword" class="form-control" placeholder="Password" required />
											<label for="inputPassword">Contraseña</label>
										</div>

										<button
											class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
											type="submit"
										>
											Sign in
										</button>
										<div class="text-center">
											<a class="small" href="#">¿Contraseña olvidada?</a>
											<span>.</span>
											<a class="small" href="#">Regístrate en Orbis</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	</body>
</html>
