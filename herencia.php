<?php

class Vehiculo{
	//atributos
	public $motor = false;
	public $marca;
	public $color;

	//metodos
	protected function estado(){
		//va a identificar si el motor está encendido o apagado
		if($this->motor==true)
		{
			echo "El motor está encendido";
		}
		else{
			echo "El motor está apagado";
		}
	}

	public function encender(){
		if($this->motor==true){
			echo "cuidado, el motor ya está encendido<br>";
		}
		else{
			echo "el motor ahora está encendido<br>";
			$this->motor=true;
		}
	}
}

class Moto extends Vehiculo();{
	public function estadoMoto(){
		$this->estado();//llamamo al método protected estado
	}

}

$moto = new Moto();
$moto->estadoMoto();

?>