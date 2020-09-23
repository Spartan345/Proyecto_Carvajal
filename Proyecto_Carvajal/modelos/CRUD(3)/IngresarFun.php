<html>
<head>
	<link rel="stylesheet" href="css/estilos.css">
	<title> Ingresar usuarios Funcionario</title>
</head>
<header>
Ingresa los datos del Funcionario
</header>
<form action='administrar_fun.php' method='post'>
	<table>
		<tr>
		<td>Nombre Funcionario:</td>
			<td> <input type='text' name='nombre'></td>
		</tr>
		<tr>
		<td>Apellido Funcionario:</td>
			<td><input type='text' name='ap' ></td>
		</tr>
		<tr>
		<td>Documento Funcionario:</td>
			<td><input type='text' name='doc' ></td>
		</tr>

		<td>Correo Funcionario:</td>
			<td><input type='text' name='correo' ></td>
		</tr>
		<td>usuario Funcionario:</td>
			<td><input type='text' name='usu' ></td>
		</tr>
		<td>contraseña Funcionario:</td>
			<td><input type='text' name='contra' ></td>
		</tr>
		<td>Especialidad:</td>
			<td><input type='text' name='Esp' ></td>
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
