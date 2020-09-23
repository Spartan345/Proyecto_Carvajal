<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
     <meta name="viewport" content="width=device-width">
    <meta name="description" content="Diseño y Desarrollo web">
    <meta name="keywords" content="diseño web, desarrollo web, seo, posicionamiento web">
    <meta name="author" content="Tatiana carvajal">
    <title>Desarrollo web</title>
    <link rel="stylesheet" href="../css/estilos.css">
  
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Proyecto ejemplo</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body class="d-flex align-items-center" style="background-image: url('../img/fond.jpg'); background-size: 100% 100%; background-repeat: no-repeat;">
    <div class="container">
      <div class="row">
        <div class="col-md-4 offset-md-4">
          <div class="card text-white shadow-lg" style="background-color: rgba(0,0,0,.5);">
            <div class="card-header text-center">
              <h4 class="font-weight-bold">Ingreso Administrador</h4>
            </div>
            <div class="card-body">
              <form action="../modelos/CRUD(3)/index.php" method="post">
                <div class="form-group">
                  <label for="usuario">Usuario</label>
                  <input type="text" name="usu" id="usu" class="form-control" placeholder="Usuario" required>
                </div>
                <div class="form-group">
                  <label for="contrasenia">Contraseña</label>
                  <input type="password" name="pass" id="pass" class="form-control" placeholder="Contrasenia" required>
                </div>
                <div class="form-group">
                  <input type="submit" value="Aceptar" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </body>

</html>
