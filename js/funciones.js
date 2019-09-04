

function agregardatos(nombre,apellido,email,telefono){

	cadena="nombre=" + nombre + "&apellido=" + apellido + "&email=" + email + "&telefono=" + telefono;


	$.ajax({
		type:"POST",
		url:"php/agregarDatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('componentes/tabla.php'); //Se pone este pedazo de codigo para que la tabla se actualice inmediatamente
				alertify.success("Agregado con Exito :)");
			}else{
				aletify.error("Fallo el servidor :(");
			}
		}
	});
}

function agregaform(datos){
	
	d=datos.split('||');  //arrego para separar el o de los datos concatenados

	$('#idpersona').val(d[0]);
	$('#nombreu').val(d[1]);
	$('#apellidou').val(d[2]);
	$('#emailu').val(d[3]);
	$('#telefonou').val(d[4]);
	
}

function actualizaDatos(){

	id=$('#idpersona').val();
	nombre=$('#nombreu').val();
	apellido=$('#apellidou').val();
	email=$('#emailu').val();
	telefono=$('#telefonou').val();

	cadena= "id=" + id +
			"&nombre=" + nombre + 
			"&apellido=" + apellido + 
			"&email=" + email + 
			"&telefono=" + telefono;

	//Actualiza Datos
	$.ajax({
		type:"POST",
		url:"php/actualizaDatos.php",
		data:cadena,
		success:function(r){
			if (r==1) {
				$('#tabla').load('componentes/tabla.php'); //Se pone este pedazo de codigo para que la tabla se actualice inmediatamente
				alertify.success("Actualizado con Exito :)");
			}else{
				aletify.error("Fallo el servidor :(");
			}
		}
	});
}

function preguntarSiNo(id){
	alertify.confirm('Eliminar Datos', '¿Esta seguro de eliminar este registro?', 
		function(){ eliminarDatos(id) },
		function(){ alertify.error('Se Cancelo')});
}

function eliminarDatos(id){
	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminarDatos.php",
			data:cadena,
			success:function(r){
				if (r==1) {
					$('#tabla').load('componentes/tabla.php');
					alertify.success("Eliminado con Exito!!");
				}else{
					alertify.error("Fallo el Servidor :(");
				}
			}
		});
}