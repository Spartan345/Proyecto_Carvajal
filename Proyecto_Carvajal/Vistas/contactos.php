<?php

require "../modelos/registros.php";
$message='';
  if (!empty($usuario) && !empty($contra)) 
  {
    $stmt = $con->prepare('INSERT INTO `login`(`usuario`, `clave`) VALUES (:usu,:pass)');
    $stmt->bindParam(":usu",$usuario);
    $stmt->bindParam(":pass",$contra);
   
    if ($stmt->execute()) {
      echo " usuario creado exitosamente";
      
    } else {
      echo " usuario ya existente";
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
    <meta name="author" content="jenny rodriguez">
    <title>Desarrollo web</title>
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
            <li><a href="nosotros.php">Nosotros</a></li>
            <li class="actual"><a href="servicios.php">Servicios</a></li>
             <li><a href="contactos.php">Contacto</a></li>
          </ul>
        </nav>
      </div>
    </header>

    <section id="boletin">
      <div class="contenedor">
        
        <form id="formulario" action="index.php" method="POST">
          <input type="text" id="usu" name="usu" placeholder="Ingrese el usuario......">
          <input type="password" id="contra" name="contra" placeholder="Ingrese la contraseña.....">
          <button type="submit" value="submit" class="boton1">entrar</button>
          </form>
      </div>
    </section>

    <section id="main">
      <div class="contenedor">
        <article id="main-col">
          <h1>Registrarse</h1>
          <form id=formulario2 name="formulario2" action="contactos.php" method="post">
            <label>usuario</label>
            <input type="text" id="usu" name="usu" placeholder="Ingrese el usuario......">
            <br>
            <label>contraseña</label>
            <input type="password" id="contra" name="contra" placeholder="Ingrese la contraseña.....">
            <br>
            <input type="submit" name="enviar" value="Enviar">
          </form>
        </article>

        <aside id="lateral">
          <div class="oscuro">
            <h3>Que hacemos</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec varius auctor lacus nec feugiat. Phasellus sit amet ex ipsum. Praesent pharetra tincidunt tempor. Etiam velit eros, dapibus eget porta in, lacinia et magna</p>
          </div>
        </aside>
      </div>
    </section>

    <footer>
      <p>Graphel Desarrollo Web, Copyright &copy; 2017</p>
    </footer>
  </body>
</html>
