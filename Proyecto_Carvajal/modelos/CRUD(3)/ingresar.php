<html>
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<title> Ingresar usuarios</title>
</head>
<header>
Ingresa los datos del Cliente
</header>
<form action='administrar_Libro.php' method='post'>
	<table>
		<tr>
		<td>Nombre cliente:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
		<td>Apellido Cliente:</td>
			<td><input type='text' name='ap' ></td>
		</tr>
		<tr>
		<td>Documento Cliente:</td>
			<td><input type='text' name='doc' ></td>
		</tr>

		<td>Correo Cliente:</td>
			<td><input type='text' name='correo' ></td>
		</tr>
		<td>usuario Cliente:</td>
			<td><input type='text' name='usu' ></td>
		</tr>
		<td>contraseña Cliente:</td>
			<td><input type='text' name='contra' ></td>
		</tr>
		<td>Direccion:</td>
			<td><input type='text' name='Dir' ></td>
		</tr>
		<td>Tipo de Documento:</td>
			<td><input type='text' name='TD' ></td>
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
