<?php 

include("../Conexion/Conexion.php");
include("../Beans/Personas.php");

class PersonasServicio {


	/**
	 * Insertar
	 */
	public function insertar($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "INSERT INTO " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		// ejectuar consulta
		return $conexion->ejecutar($sql);
	}



	/**
	 * Obtener por ID
	 */
	public function ObtenerPorID($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

		return mysqli_fetch_object($consulta);

	}


	/**
	 * Obtener Todos
	 */
	public function ObtenerTodos() {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

		$resultados = array();
		while ($row = mysqli_fetch_object($consulta)) {
			$resultados[] = $row;
		}

		return $resultados;	

	}


	/**
	 * Eliminar
	 */
	public function Eliminar($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "DELETE " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

	}


	/**
	 * Actualizar
	 */
	public function update($objeto) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "UP DATE " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		// ejectuar consulta
		mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

	}
	/**
	 * Obtener por Nombre
	 */
	public function ObtenerPorNombre($id) {

		// abrir conexión BD
		$conexion = new Conexion();

		// generar SQL del DAO
		$sql =  "SELECT * FROM " sthis->tabla."(id_personas,direccion,cumpleaños,telefono,estatus,fechaDeCreacion);"

		// ejectuar consulta
		$consulta = mysqli_query($conexion->obtener(), $sql);

		// cerrar conexión BD
		$conexion->cerrar();

		return mysqli_fetch_object($consulta);

	}
	
	private function crearObjeto($resultado){
		$personas = new Personas();
		$persona->idPersonas=$resultado->idPersonas;
		$persona->direccion=$resultado->direccion;
		$persona->telefono=$resultado->telefono;
		$persona->cumpleaños=$resultado->cumpleaños;
		$persona->estatus=$resultado->estatus;
		$persona->fechaDeCreacion=$resultado->fechaDeCreacion;

		
		return persona;
	}
	
	
	
	
	
	
	

}