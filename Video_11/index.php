<?php 

trait Persona2{

	public $nombre;

	public function mostrarNombre(){
		echo $this->nombre;
	}

	abstract function asignarNombre($nombre);
}

trait Trabajador{
	protected function mensaje(){
		echo "M nombre es : ";
	}
}


class Persona {
	use Persona2, Trabajador;

	public function asignarNombre($nombre){
		$this->nombre = $nombre . self::mensaje();
	}
}

$persona = new Persona();
$persona->asignarNombre("Eligio");
$persona->mostrarNombre();

 ?>