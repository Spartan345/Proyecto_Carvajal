<?php	
//incluye la clase Libro y CrudLibro
require_once('administrar_libro.php');
require_once('libro.php');
$crud= new Crudaccouting();
$Libro=new accouting();
//obtiene todos los libros con el método mostrar de la clase crud
$listaLibros1=$crud->mostrarLogin();
$listaLibros2=$crud->mostrarAdmin();
$listaLibros3=$crud->mostrarAdqui();
$listaLibros4=$crud->mostrarAdj();
$listaLibros5=$crud->mostrarFun();
?>
 
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<title>Mostrar Libros</title>
</head>
<body>
	<header>
		<h4>Clientes</h4>
	<table border=1 >
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Correo</td>
			<td>usuario</td>
			<td>Contraseña</td>
			<td>Documento</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros1 as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getApellido() ?></td>
				<td><?php echo $libro->getCorreo()?> </td>
				<td><?php echo $libro->getusuario() ?></td>
				<td><?php echo $libro->getContraseña() ?></td>
				<td><?php echo $libro->getDocumento()?> </td>
				<td><a href="actualizar.php?usuario=<?php echo $libro->getusuario()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?usuario=<?php echo $libro->getusuario()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
		</body>
	</table><br><br>
	<h4>Administradores</h4>
		<table border=1 >
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Correo</td>
			<td>usuario</td>
			<td>Contraseña</td>
			<td>Documento</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros2 as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getApellido() ?></td>
				<td><?php echo $libro->getCorreo()?> </td>
				<td><?php echo $libro->getusuario() ?></td>
				<td><?php echo $libro->getContraseña() ?></td>
				<td><?php echo $libro->getDocumento()?> </td>
				<td><a href="actualizar.php?usuario=<?php echo $libro->getusuario()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?usuario=<?php echo $libro->getusuario()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
			</body>
	</table><br><br>
			<h4>Funcionarios</h4>
				<table border=1 >
		<head>
			<td>Nombre</td>
			<td>Apellido</td>
			<td>Correo</td>
			<td>usuario</td>
			<td>Contraseña</td>
			<td>Documento</td>
			<td>Actualizar</td>
			<td>Eliminar</td>
		</head>
		<body>
			<?php foreach ($listaLibros5 as $libro) {?>
			<tr>
				<td><?php echo $libro->getNombre() ?></td>
				<td><?php echo $libro->getApellido() ?></td>
				<td><?php echo $libro->getCorreo()?> </td>
				<td><?php echo $libro->getusuario() ?></td>
				<td><?php echo $libro->getContraseña() ?></td>
				<td><?php echo $libro->getDocumento()?> </td>
				<td><a href="actualizar.php?usuario=<?php echo $libro->getusuario()?>&accion=a">Actualizar</a> </td>
				<td><a href="administrar_libro.php?usuario=<?php echo $libro->getusuario()?>&accion=e">Eliminar</a>   </td>
			</tr>
			<?php }?>
			</body>
	</table>
	<a href="index.php">Volver</a>
</body>
</html>
