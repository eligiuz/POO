<?php 

class Pagina{

	//Atributos
	public $nombre = "Código facilito";
	public static $url = "www.codigofacilito.com";


	//Metodos
	public function bienvenida(){
		echo "Bienvenidos a <b> " . $this->nombre . "</b> la pagina es <b>" . self::$url . "</b><br>";
	}
}

$pagina = new Pagina();
$pagina->bienvenida();

 ?>