<html>
<head>
	<link rel="stylesheet" href="../../css/estilos.css">
	<title> Ingresar Administrador</title>
</head>
<header>
Ingresa los datos del Administrador
</header>
<form action='administrar.php' method='post'>
	<table>
		<tr>
		<td>Nombre Administrador:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
		<td>Apellido Administrador:</td>
			<td><input type='text' name='ap' ></td>
		</tr>
		<tr>
		<td>Documento Administrador:</td>
			<td><input type='text' name='doc' ></td>
		</tr>

		<td>Correo Administrador:</td>
			<td><input type='text' name='correo' ></td>
		</tr>
		<td>usuario Administrador:</td>
			<td><input type='text' name='usu' ></td>
		</tr>
		<td>contraseña Administrador:</td>
			<td><input type='text' name='contra' ></td>
		</tr>
		<td>Telefono:</td>
			<td><input type='text' name='Tel' ></td>
		</tr>
		<input type='hidden' name='insertar' value='insertar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
 
</html>
