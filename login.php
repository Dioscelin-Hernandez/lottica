<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/png" href="assets/img/logo.png">
  <link id="pagestyle" href="login.css" rel="stylesheet" />
	<title>Iniciar Sesión</title>
</head>

<body background="assets/img/fondos.png" >
	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form action="#" class="sign-in-form">
					<h2 class="title">Iniciar Sesión</h2>
          <p class="social-text">Ingresa tu correo y contraseña</p>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="email" placeholder="Correo electrónico" required>
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Contraseña" minlength="8" maxlength="20" required/>
					</div>
					<input type="submit" value="Iniciar Sesión" class="btn solid" />
					

				</form>
				<form action="#" class="sign-up-form">
					<h2 class="title">¿Olvidaste tu contraseña?</h2>
					
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" placeholder="Correo Electronico" required />
					</div>
				
					<input type="submit" class="btn" value="Enviar" />
					
				</form>
			</div>
		</div>

		<div class="panels-container">
			<div class="panel left-panel">
				<div class="content">
        <h3>¿Olvidaste tu contraseña?</h3>
					<p>
						Recuperala por medio de tu correo electronico, 
            Da click aqui ↓
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Ir
					</button>
				</div>
				<img  src="https://i.ibb.co/6HXL6q1/Privacy-policy-rafiki.png" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>Para recuperar tu contraseña</h3>
					<p>
						Recibiras un correo electronico, donde se te indicaran los pasos para la recuperación de tu contraseña
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Regresar
					</button>
				</div>
				<img src="https://i.ibb.co/nP8H853/Mobile-login-rafiki.png"  class="image" alt="" />
			</div>
		</div>
	</div>
	<script src="login.js"></script>
</body>

</html>