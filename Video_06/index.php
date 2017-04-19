<?php 

class Vehiculo{
	//Atributos
	public $motor = false;
	public $marca;
	public $color;

	//Métodos
	protected function estado(){
		if ($this->motor) {
			echo "Elmotor esta encendido<br>";
		} else {
			echo "El motor esta apagado<br>";
		}
		
	}

	public function encender(){
		if ($this->motor) {
			echo "Cuidado el motor esta encendido<br>";
		} else {
			echo "El motor ahora esta encendido<br>";
			$this->notor = true;
		}
		
	}
}

class Moto extends Vehiculo {

	public function estadoMoto(){
		$this->estado();	
	}
	
}

$moto = new Moto();
$moto->estadoMoto();


 ?>