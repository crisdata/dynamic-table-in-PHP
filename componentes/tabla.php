
<?php 

	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>



<div class="row">
	<div class="col-sm-12">
	<h2 align="center">TABLA DE CLIENTES</h2>

		<caption>
			<button class="btn btn-primary" data-toggle="modal" data-target="#modalNuevo">Agregar nuevo 
				<span class="glyphicon glyphicon-plus"></span>
			</button>
		</caption>

		<br/><br>

		<table class="table table-hover table-condensed table-bordered">
		
			<tr>
				
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email</td>
				<td>Telefono</td>
				<td>Editar</td>
				<td>Eliminar</td>
			</tr>

			<!--Mostrar datos en la tabla-->
			<?php

				$sql="SELECT id,nombre, apellido,email,telefono from t_persona";

				$result=mysqli_query($conexion,$sql);

				while($ver=mysqli_fetch_row($result)){

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];

			?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<td>
					<button class="btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php echo $datos ?>')"></button>
				</td>
				<td>
					<button class="btn-danger glyphicon glyphicon-remove" onclick="preguntarSiNo('<?php echo $ver[0] ?>')"></button>
				</td>
			</tr>
			<?php 

			}

			 ?>
		</table>
	</div>
</div>