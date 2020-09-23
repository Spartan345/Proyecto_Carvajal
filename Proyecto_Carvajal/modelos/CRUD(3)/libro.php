<?php
	class accouting{
		private $usuario;
		private $nombre;
		private $Apellido;
		private $Correo;
 		private $Contraseña;
 		private $Documento;
 		
		function __construct(){}
 
		public function getNombre(){
		return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
 
		public function getApellido(){
			return $this->Apellido;
		}
 
		public function setApellido($Apellido){
			$this->Apellido = $Apellido;
		}
 
		public function getCorreo(){
		return $this->Correo;
		}
 
		public function setCorreo($Correo){
			$this->Correo = $Correo;
		}
		public function getusuario(){
			return $this->usuario;
		}
 
		public function setusuario($usuario){
			$this->usuario = $usuario;
		}
		public function getContraseña(){
			return $this->Contraseña;
		}
 
		public function setContraseña($Contraseña){
			$this->Contraseña = $Contraseña;
		}
		public function getDocumento(){
			return $this->Documento;
		}
 
		public function setDocumento($Documento){
			$this->Documento = $Documento;
		}
		public function getTD(){
			return $this->TD;
		}
 
		public function setTD($TD){
			$this->TD = $TD;
		}
		public function getTel(){
			return $this->Tel;
		}
 
		public function setTel($Tel){
			$this->Tel = $Tel;
		}
		public function getDir(){
			return $this->Dir;
		}
		public function setDir($Dir){
			$this->Dir = $Dir;
		}
		public function getEsp(){
			return $this->Esp;
		}
		public function setEsp($Esp){
			$this->Esp = $Esp;
		}
		public function getAD(){
			return $this->AD;
		}
 
		public function setAD($AD){
			$this->AD = $AD;
		}
		public function getId_Cliente_FK(){
			return $this->Id_Cliente_FK;
		}
 
		public function setId_Cliente_FK($Id_Cliente_FK){
			$this->Id_Cliente_FK= $Id_Cliente_FK;
		}
		public function getDoc_Cliente(){
			return $this->Doc_Cliente;
		}
 
		public function setDoc_Cliente($Doc_Cliente){
			$this->Doc_Cliente = $Doc_Cliente;
		}
		public function getDoc_Funcionario(){
			return $this->Doc_Funcionario;
		}
 
		public function setDoc_Funcionario($Doc_Funcionario){
			$this->Doc_Funcionario = $Doc_Funcionario;
		}
	}
?>
