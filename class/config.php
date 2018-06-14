<?php 
	session_start();

	class Conectar{

		protected $dbh;

		protected function conexion(){
			$conectar = $this->dbh = new PDO("mysql:local=localhost; dbname=bd_svei","root","");
			$conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conectar;
		}

		public function set_names(){
			return $this->dbh->query("SET NAMES 'utf8'");
		}

		public function ruta(){
			return "http://localhost/CCRed%20SVEI/";
		}

		public static function invierte_fecha($fecha){
			$dia = substr($fecha, 8, 2);
			$mes = substr($fecha, 5, 2);
			$anio = substr($fecha, 0, 4);
			$correcta = $dia."-".$mes."-".$anio;
			return $correcta;
		}
	}
?>