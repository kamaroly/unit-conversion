<?php 

namespace Kamaro\UnitConversion;

class Temperature{

	private float $celsius;

	function __construct(float $celsius){
		$this->celsius = $celsius;
	}

	public static function fromCelsius(float $celsius): self
	{
		return new static($celsius);
	}

	public function toFahrenheit(): float	{
		
		return ($this->celsius * 1.8) + 32;
	}
}