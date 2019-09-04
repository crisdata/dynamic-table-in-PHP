
<?php
	
	function conexion(){
		$servidor="localhost";
		$usuario="root";
		$password="";
		$bd="pruebas";



		$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

		return $conexion;
	}
	/* //Prueba para mirar que la base de datos conecte
	
	if (conexion()) {
		echo "conectado";
	}else{
		echo "no conectado";
	}
	*/
?>