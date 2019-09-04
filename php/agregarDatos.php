<?php 
	
	//Conexion con la base de datos
	require_once "conexion.php";
	$conexion=conexion();

	$n=$_POST['nombre'];
	$a=$_POST['apellido'];
	$e=$_POST['email'];
	$t=$_POST['telefono'];

	$sql="INSERT t_persona(nombre, apellido,email,telefono) values ('$n','$a','$e','$t')";


	//Colocamos el echo porq nos regresa 1 o 0 dependiendo de lo que habia echo
	echo $result=mysqli_query($conexion,$sql);
 ?>