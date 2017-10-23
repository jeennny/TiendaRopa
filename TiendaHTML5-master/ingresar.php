<?php
 include("conexion.php");

 session_start();

 if (isset($_POST['ingresar'])) {
 	$nombre = $_POST['nombre'];
 	$contrasena = $_POST['contrasena'];
 	$instruccion = "SELECT * FROM usuario WHERE usuario = \"". $nusuario ."\" AND contrasena = \"".$contrasena."\"";
 	$resultado = mysqli_query($conectar,$instruccion);
 	if (mysqli_num_rows($resultado)==1) {
 		$usuario = mysqli_fetch_array($resultado);
 		echo"<h1>Bienvenido</h1>";
 		$_SESSION['sesion_iniciada'] = $usuario;
 		header("location: contenidoUsuario.php");
 	}
 }else{
 	print_r($_POST);
 }
?>