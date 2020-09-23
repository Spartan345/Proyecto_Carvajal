<?php
// incluye la clase Db
require_once('conexion.php');
 
	class Crudaccouting{
		// constructor de la clase
		public function __construct(){}
 
		// método para insertar, recibe como parámetro un objeto de tipo libro
		public function insertar($libro)
		{
			$db=Db::conectar();
			$insertar=$db->prepare('INSERT INTO `login`(`usuario`, `clave`, `correo`, `documento`, `nombre`, `apellido`,`Telefono`,`Tipo_Documento`,`Direcccion`)VALUES(:usu,:contra,:correo,:doc,:nom,:ap,:tel,:TD,:Dir)');
			$insertar->bindValue('usu',$libro->getusuario());
			$insertar->bindValue('contra',$libro->getContraseña());
			$insertar->bindValue('correo',$libro->getCorreo());
			$insertar->bindValue('doc',$libro->getDocumento());
			$insertar->bindValue('nom',$libro->getNombre());
			$insertar->bindValue('ap',$libro->getApellido());
			$insertar->bindValue('tel',$libro->getTel());
			$insertar->bindValue('TD',$libro->getTD());
			$insertar->bindValue('Dir',$libro->getDir());
			$insertar->execute();
 
		}

		 public function insertarFun($libro)
		{
			$db=Db::conectar();
			$insertar=$db->prepare('INSERT INTO `funcionario`(`Nombre_Funcionario`, `Apellido_Funcionario`, `Numero_Doc_Funcionario`, `Correo_Funcionario`, `Usuario_Funcionario`, `clave`, `Telefono`, `Especialidad`)VALUES(:nom,:ap,:doc,:correo,:usu,:contra,:tel,:Esp)');
			$insertar->bindValue('usu',$libro->getusuario());
			$insertar->bindValue('contra',$libro->getContraseña());
			$insertar->bindValue('correo',$libro->getCorreo());
			$insertar->bindValue('doc',$libro->getDocumento());
			$insertar->bindValue('nom',$libro->getNombre());
			$insertar->bindValue('ap',$libro->getApellido());
			$insertar->bindValue('tel',$libro->getTel());
			$insertar->bindValue('Esp',$libro->getEsp());
			$insertar->execute();
 
		}
		public function insertarAdm($libro)
		{
			$db=Db::conectar();
			$insertar=$db->prepare('INSERT INTO `administrador`(`Nombre_Administrador`, `Apellido_Administrador`, `Usuario_Administrador`, `clave`, `Numero_Doc_Administrador`, `Correo_Administrador`, `Telefono`)VALUES(:nom,:ap,:usu,:contra,:doc,:correo,:tel)');
			$insertar->bindValue('usu',$libro->getusuario());
			$insertar->bindValue('contra',$libro->getContraseña());
			$insertar->bindValue('correo',$libro->getCorreo());
			$insertar->bindValue('doc',$libro->getDocumento());
			$insertar->bindValue('nom',$libro->getNombre());
			$insertar->bindValue('ap',$libro->getApellido());
			$insertar->bindValue('tel',$libro->getTel());
			$insertar->execute();
 
		}
		// método para mostrar todos los libros
		public function mostrarLogin(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM login');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new accouting();
				$myLibro->setApellido($libro['apellido']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setCorreo($libro['correo']);
				$myLibro->setContraseña($libro['clave']);
				$myLibro->setusuario($libro['usuario']);
				$myLibro->setDocumento($libro['documento']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
		public function mostrarAdmin(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM administrador');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new accouting();
				$myLibro->setApellido($libro['Apellido_Administrador']);
				$myLibro->setNombre($libro['Nombre_Administrador']);
				$myLibro->setCorreo($libro['Correo_Administrador']);
				$myLibro->setContraseña($libro['clave']);
				$myLibro->setusuario($libro['Usuario_Administrador']);
				$myLibro->setDocumento($libro['Numero_Doc_Administrador']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
		public function mostrarAdqui(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM adquisicion');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new accouting();
				$myLibro->setApellido($libro['Id_Adquisicion']);
				$myLibro->setNombre($libro['Fecha_Adquisicion']);
				$myLibro->setCorreo($libro['Subtotal_Adquisicion']);
				$myLibro->setContraseña($libro['Iva_Adquisicion']);
				$myLibro->setusuario($libro['Total_Adquisicion']);
				$myLibro->setDocumento($libro['Valor_Adquisicion']);
				$myLibro->setAD($libro['Valor_Adquisicion']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
		public function mostrarAdj(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM adquisicion');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new accouting();
				$myLibro->setApellido($libro['Id_Adjudicacion']);
				$myLibro->setNombre($libro['Id_Funcionario FK']);
				$myLibro->setCorreo($libro['Fecha_Adjudicacion']);
				$myLibro->setContraseña($libro['Iva_Adquisicion']);
				$myLibro->setusuario($libro['subtotal_Adjudicacion']);
				$myLibro->setDocumento($libro['iva_Adjudicacion']);
				$myLibro->setAD($libro['Total_Adjudicacion']);
				$myLibro->setId_Cliente_FK($libro['Id_Cliente FK']);
				$myLibro->setDoc_Cliente($libro['Doc_Cliente']);
				$myLibro->setDoc_Funcionario($libro['Doc_Funcionario']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}
		public function mostrarFun(){
			$db=Db::conectar();
			$listaLibros=[];
			$select=$db->query('SELECT * FROM funcionario');
 
			foreach($select->fetchAll() as $libro){
				$myLibro= new accouting();
				$myLibro->setApellido($libro['Apellido_Funcionario']);
				$myLibro->setNombre($libro['Nombre_Funcionario']);
				$myLibro->setCorreo($libro['Correo_Funcionario']);
				$myLibro->setContraseña($libro['clave']);
				$myLibro->setusuario($libro['Usuario_Funcionario']);
				$myLibro->setDocumento($libro['Numero_Doc_Funcionario']);
				$listaLibros[]=$myLibro;
			}
			return $listaLibros;
		}

 
		// método para eliminar un libro, recibe como parámetro el id del libro
		public function eliminar($usuario){
			$db=Db::conectar();
			$eliminar=$db->prepare('DELETE FROM login WHERE usuario=:usu');
			$eliminar->bindValue(':usu',$usuario);
			$eliminar->execute();
		}
 
		// método para buscar un libro, recibe como parámetro el id del libro
		public function obtenerLibro($usuario){
			$db=Db::conectar();
			$select=$db->prepare('SELECT * FROM login WHERE usuario=:usu');
			$select->bindValue(':usu',$usuario);
			$select->execute();
			$libro=$select->fetch();
				$myLibro= new accouting();
				$myLibro->setApellido($libro['apellido']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setCorreo($libro['correo']);
				$myLibro->setContraseña($libro['clave']);
				$myLibro->setusuario($libro['usuario']);
				$myLibro->setDocumento($libro['documento']);
				$listaLibros[]=$myLibro;
			return $myLibro;
		}
 
		// método para actualizar un libro, recibe como parámetro el libro
		public function actualizar($libro){
			$db=Db::conectar();
			$actualizar=$db->prepare('UPDATE login  SET `usuario`=:usu,`clave`=:contra,`correo`=:Correo,`documento`=:doc,`nombre`=:nom,`apellido`=:ap WHERE usuario=:usu');
			$actualizar->bindValue(':usu',$libro->getusuario());
			$actualizar->bindValue(':contra',$libro->getContraseña());
			$actualizar->bindValue(':Correo',$libro->getCorreo());
			$actualizar->bindValue(':doc',$libro->getDocumento());
			$actualizar->bindValue(':nom',$libro->getNombre());
			$actualizar->bindValue(':ap',$libro->getApellido());
			$actualizar->execute();
		}
	}
?>
