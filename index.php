<!DOCTYPE html>
<html lang="en">
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<meta charset="UTF-8">
	<title>Usuarios</title>
	
	<!--Libreria de Bootstrap
	<link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!--Libreria de Alertify-->
	<link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
	<link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
	
	<!--Libreria de js-->
	<script src="librerias/jquery-3.3.1.min.js"></script>
	<script src="js/funciones.js"></script>
	<!--<script src="librerias/bootstrap/js/bootstrap.js"></script>-->|
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="librerias/alertifyjs/alertify.js"></script>

</head>
<body>

	<div class="container">
		<ul class="nav nav-tabs">
		  <li role="presentation"><a href="#">CLIENTES</a></li>
		  <li role="presentation"><a href="#">PROVEEDORES</a></li>
		  <li role="presentation"><a href="#">PRODUCTOS</a></li>
		  <li role="presentation"><a href="#">DEVOLUCIONES</a></li>
		  <li role="presentation"><a href="#">FACTURA</a></li>
		</ul>
	</div>

	<div class="container">
		<div id="tabla"></div> <!--lo llamamos abajo con el jquery-->
	</div>

	<!-- modal para registros nuevos -->

	<div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-sm" role="document">  <!--modificar tamaño del recuadro-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Agregar un nuevo Cliente</h4>
	      </div>
	      <div class="modal-body">
	      		<label>Nombre</label>
	      		<input type="text" id="nombre" class="form-control input-sm">

	      		<label>Apellido</label>
	      		<input type="text" id="apellido" class="form-control input-sm">

	      		<label>Email</label>
	      		<input type="text" id="email" class="form-control input-sm">

	      		<label>Telefono</label>
	      		<input type="text" id="telefono" class="form-control input-sm">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-primary" data-dismiss="modal" id="guardarNuevo">Agregar</button>
	      </div>
	    </div>
	  </div>
	</div>

	<!-- modal para edicion de datos -->
	<div class="modal fade" id="modalEdicion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog modal-sm" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
	      </div>
	      <div class="modal-body">
	      		<input type="text" hidden="" id="idpersona"> <!--hidden es para decir que es escondido-->
	      		
	      		<label>Nombre</label>
	      		<input type="text" id="nombreu" class="form-control input-sm">

	      		<label>Apellido</label>
	      		<input type="text" id="apellidou" class="form-control input-sm">

	      		<label>Email</label>
	      		<input type="text" id="emailu" class="form-control input-sm">

	      		<label>Telefono</label>
	      		<input type="text" id="telefonou" class="form-control input-sm">
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-warning" data-dismiss="modal" id="actualizarDatos">Actualizar</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>

<!--Estructura basica de Jquery-->

<script type="text/javascript">
	$(document).ready(function(){
		//Llamando la tabla
		$('#tabla').load('componentes/tabla.php');
	});
</script>

<script type="text/javascript">
	$(document).ready(function(){

		$('#guardarNuevo').click(function(){

			nombre=$('#nombre').val();
			apellido=$('#apellido').val();
			email=$('#email').val();
			telefono=$('#telefono').val();

			agregardatos(nombre,apellido,email,telefono)
		});


		$('#actualizarDatos').click(function(){

			actualizaDatos();

		});
	});
</script>