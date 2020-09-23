<?php
//incluye la clase Libro y CrudLibro
	require_once('crud_libro.php');
	require_once('libro.php');
	$crud= new Crudaccouting();
	$libro=new accouting();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$usuario=$_GET['usuario'];
	$libro=$crud->obtenerLibro($usuario);
?>
<html>
<head>
	<title >Actualizar Libro</title>
</head>
<body>

	<form action='administrar_libro.php' method='post'>
	<table>
		<tr>
			<td> <input type='hidden' name='usuario' value='<?php echo $libro->getusuario()?>'></td>
		</tr>
		<tr>
			<td>nombre</td>
			<td> <input type='text' name='nombre' value='<?php echo $libro->getNombre()?>'></td>
		</tr>
		<tr>
			<td>apellido</td>
			<td><input type='text' name='apellido' value='<?php echo $libro->getApellido()?>' ></td>
		</tr>
		<tr>
			<td>Documento</td>
			<td><input type='text' name='Documento' value='<?php echo $libro->getDocumento() ?>'></td>
		</tr>
		<tr>
			<td>Contraseña</td>
			<td><input type='text' name='Contraseña' value='<?php echo $libro->getContraseña() ?>'></td>
		</tr>
		<tr>
		<td>Correo</td>
			<td><input type='text' name='Correo' value='<?php echo $libro->getCorreo() ?>'></td>
		</tr>
		<input type='hidden' name='actualizar' value='actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>
