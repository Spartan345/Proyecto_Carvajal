<?php

require "../registros.php";
$message='';
if (!empty($usuario) && !empty($pass)) 
  {
  	echo $usuario;
  	echo $pass;
    $stmt = $con->prepare('SELECT * FROM `funcionario` WHERE Usuario_Funcionario=:usu');
    $stmt->bindParam(":usu",$usuario);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && $pass==$results["clave"] ) 
    {
    $message = 'bienvenido';
    
    echo $message;
    }
    else {
    $message = 'usuario y clave incorrecto';
    header("location:../../vistas/Fun.php");     
    }
  }
  if (!empty($usuario) && !empty($pass)) 
  {
  	echo $usuario;
  	echo $pass;
    $stmt = $con->prepare('SELECT * FROM `administrador` WHERE Usuario_Administrador=:usu');
    $stmt->bindParam(":usu",$usuario);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && $pass==$results["clave"] ) 
    {
    $message = 'bienvenido';
    
    echo $message;
    }
    else {
    $message = 'usuario y clave incorrecto';
    header("location:../../vistas/Admin.php");     
    }
  }
  
?>
<html>
	<head>
		<title>Administrar Libro</title>
		<link rel="stylesheet" href="css/estilos.css">
	</head>	
	<body>
		<header>
		<div>
			<div id="marca">
          <h1><span class="resaltado">SKYFALL</span>accounting world<br> Bienvenido Administrador</h1>
		</div>
			
		</header>
		<form >
			<a  href="ingresar.php" class="boton1">Ingresar Usuario</a><br><br>
			<a  href="IngresarFun.php" class="boton1">Ingresar Funcionario</a><br><br>
			<a  href="Adm.php" class="boton1">Ingresar Administrador</a><br><br>
			<a href="mostrar.php" class="boton1">Ver</a>
		</form>
				
		<footer>
			Administrar Libro 2017
		</footer>
	</body>
</html>
