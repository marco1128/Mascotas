<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="#">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
		<h2>Formulario de Adopcion</h2>
		<form method="post" action="procesar.php">
			<div class="grupoCaja">
				<label for="nombres">Nombres <span class="colorRojo">*</span></label>
				<input type="text" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
				
			</div>
			<div class="grupoCaja">
				<label for="apellidos">Apellidos</label>
				<input type="text" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos">
			</div>
			<div class="grupoCaja">
				<label for="cedula">Cedula</label>
				<input type="number" id="cedula" name="cedula" placeholder="Ingrese su cedula">
			</div>
			<div class="grupoCaja">
				<label for="telefono">Telefono</label>
				<input type="text" id="telefono" name="telefono" placeholder="Ingrese su telefono">
			</div>
			<div class="grupoCaja">
				<label for="direccion">Dierccion</label>
				<input type="text" id="direccion" name="direccion" placeholder="Ingrese su direccion">
			</div>
			<div class="grupoCaja">
				<label for="fechaNacimiento">Fecha de Nacimiento</label>
				<input type="date" id="fechaNacimiento" name="fechaNacimiento" placeholder="Ingrese sus apellidos">
			</div>
			<div class="grupoCaja">
				<label for="Correo">Correo</label>
				<input type="email" id="correo" name="correo" placeholder="Ingrese su correo">
			</div>
			<button type="submit" class="button">Guardar Datos</button>
		</form>
		
	</main>
	<section class="sponsor">
		<h3 class="colorAzul">Sponsor</h3>
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>