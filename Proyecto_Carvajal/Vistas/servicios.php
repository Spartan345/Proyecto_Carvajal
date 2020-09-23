<?php

require "../modelos/registros.php";
$message='';
  if (!empty($usuario) && !empty($contra)) 
  {
    $stmt = $con->prepare('SELECT * FROM `funcionario` WHERE `Usuario_Funcionario`=:usu');
    $stmt->bindParam(":usu",$usuario);
    $stmt->execute();
    $results = $stmt->fetch(PDO::FETCH_ASSOC);
    if (count($results) > 0 && $contra==$results["clave"] ) 
    {
    $message = 'bienvenido';
    
    echo $message;
    } 
    else {
    $message = 'usuario y clave incorrecto';
    header("location:../modelos/CRUD(3)/funcionario.php"); 
    echo $message;    
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
    <title>SKYFALL Desarrollo web | Servicios</title>
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
            <li><a href="inicio_sesion.php">inicio</a></li>
            <li><a href="nosotros.php">Nosotros</a></li>
            <li class="actual"><a href="servicios.php">Servicios</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="boletin">
      <div class="contenedor">
        <h1>Subscríbete a nuestro boletín</h1>
        <form>
          <input type="email" placeholder="Ingrese el Email...">
          <button type="submit" class="boton1">Suscribirse</button>
        </form>
      </div>
    </section>

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          <h1>Servicios</h1>
          <ul id="servicios">
            <li>
              <h3>administracion contable</h3>
              <p>La contabilidad es un proceso de información que comprende tres aspectos, la causación, efectivo y acumulación, los cuales se ejecutan en los tres estados financieros simultáneamente: Estado de resultados, Flujo de caja y Balance general. Las funciones son: recolectar, identificar, medir, clasificar, codificar, acumular, registrar, emitir estados financieros, interpretar, analizar, evaluar e informar, y hacer el seguimiento al desarrollo de las operaciones de un ente económico, en forma clara, completa y fidedigna.</p>
              <p>Precio: $0 - $0</p>
            </li>
            <li>
              <h3>accounting world</h3>
              <p>proyecto lleva acabo la organización financiera de una empresa de auditorias contables brindándole seguridad al cliente Manteniendo un vínculo comunicativo entre los actores de la empresa para mayor satisfacción</p>
            </li>
            <li>
              <h3>asesoria tributaria</h3>
              <p>El servicio de asesoría tributaria comprende la implementación de controles y procedimientos necesarios para la adecuada aplicación de las normas tributarias, de manera que le permita a las compañías hacer una racionalización de los impuestos y recursos financieros. Las operaciones de la compañía son analizadas, al igual que las declaraciones tributarias, se verifica el cumplimiento de las normas fiscales y se brinda una asesoría de las respuestas a los requerimientos de las autoridades fiscales.

 

</p>
              <p>Precio: $0</p>
            </li>
          </ul>
        </article>

        <aside id="lateral">
          <div class="oscuro">
            <h3>Que hacemos</h3>
            <p>dar un apoyo informatico partiendo de los conocimientos previos adquiridos en el centro de formacion enfocados a dar diversas espectativas y mejoras a entornos laborales</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>skyfall, 
accounting world Copyright &copy; 2018</p>
    </footer>
  </body>
</html>
