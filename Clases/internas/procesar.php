<link rel="stylesheet" type="text/css" href="../css/style.css">
<?php

/*echo " <strong>Hola Mundo :)</strong>";

*/
//extract($_POST);
$nombres= $_POST['nombres'];
$apellidos= $_POST['apellidos'];
$cedula= $_POST['cedula'];
$telefono= $_POST['telefono'];
$direccion= $_POST['direccion'];
$fechaNacimiento= $_POST['fechaNacimiento'];
$ncorreo= $_POST['correo'];

echo "Bienvenido <strong class='colorRojo'>" .$nombres."</strong> ".$apellidos;

?>