<?php
//incluye la clase ACCOUTINGy CrudLibro
require_once('crud_libro.php');
require_once('libro.php');
$crud= new Crudaccouting();
$Libro=new accouting();
$accion="f";

if (isset($_GET['accion'])) 
{
$accion=$_GET['accion'];
}
	// si el elemento insertar no viene nulo llama al crud e inserta un ...
	if (isset($_POST['insertar'])) {
		$Libro->setApellido($_POST['ap']);
		$Libro->setNombre($_POST['nombre']);
		$Libro->setCorreo($_POST['correo']);
		$Libro->setContraseña($_POST['contra']);
		$Libro->setusuario($_POST['usu']);
		$Libro->setDocumento($_POST['doc']);
		$Libro->setTel($_POST['Tel']);
		$crud->insertarAdm($Libro);
		header('Location: index.php');
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el ...
	}elseif(isset($_POST['actualizar'])){
		$Libro->setNombre($_POST['nombre']);
		$Libro->setApellido($_POST['apellido']);
		$Libro->setCorreo($_POST['Correo']);
		$Libro->setContraseña($_POST['Contraseña']);
		$Libro->setusuario($_POST['usuario']);
		$Libro->setDocumento($_POST['Documento']);
		$crud->actualizar($Libro);
		header('Location: index.php');
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un ...
	}elseif ($accion=='e') {
		$crud->eliminar($_GET['usuario']);
		header('Location: index.php');		
	// si la variable accion enviada por GET es == 'a', envía a la página actualizar.php
	}
