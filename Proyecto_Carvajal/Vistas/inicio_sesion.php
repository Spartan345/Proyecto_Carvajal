<?php

require "../modelos/registros.php";
$message='';
  if (!empty($usuario) && !empty($pass)) 
  {
    $stmt = $con->prepare('SELECT * FROM `login` WHERE usuario=:usu');
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
    header("location:index.php");     
    }
  }
else{}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Diseño y Desarrollo web">
	  <meta name="keywords" content="diseño web, desarrollo web, seo, posicionamiento web">
  	<meta name="author" content="Render2Web">
    <title>accounting world</title>
    <link rel="stylesheet" href="../css/estilos.css">
  </head>
  <body>
    <header>
      <div class="contenedor">
        <div id="marca">
          <h1><span class="resaltado">SKYFALL</span>accounting world</h1>
        </div>
        <nav>
          <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li class="actual"><a href="servicios.php">Servicios</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="cabecera">
      <div class="contenedor">
        <h1>ASOCIA E INTEGRA</h1>
        <p>INVERTIR NO ES ARRIEGADO, LO ARRIESGADO ES NO INVERTIR EN LA EDUCACION FINANCIERA</p>
      </div>
    </section>

    <section id="boletin">
      <div class="contenedor">
        <h1>Subscríbete a nuestro boletín</h1>
        <form>
          <input type="email" placeholder="Ingrese el Email...">
          <button type="submit" class="boton1">Subscríbete</button>
        </form>
      </div>
    </section>

    <section id="cajas">
      <div class="contenedor">
        <section id="juandiego">
    </section>
    <p>Accounting world  la mejor empresa contable  y abrirle  las puestas para nuevos proyectos en el extranjero y que ya no haga auditoría financiera a micro y macro empresas sin que también se le abran las puestas en las multinacionales.
Hoy en día la empresa está  muy firme financieramente y frente a los bancos es una maravilla según reportes del administrador; logramos entrar a las instalaciones y hacerles una encuesta a algunos funcionarios de la empresa como tal. El levantamiento de información nos brindó las  herramientas para crear y modificar nuestro software para satisfacer las necesidades de la empresa y solucionar los problemas ya mencionados.
</p>

    <footer>
      <p>Skyfall Asocia e integre</p>
    </footer>
  </body>
</html>
