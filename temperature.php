<?php
class Temperature {
	private $k;
	
	public function __construct($value, $type) {
		if($type == 'K') {
			if($value < 0) {
				throw new Exception('Temperatura ponizej zera bezwzglednego');
			} else {
				$this->k = $value;
			}
		} else if($type == 'C') {
			if($value < -273.15) {
				throw new Exception('Temperatura ponizej zera bezwzglednego');
			} else {
				$this->k = $value + 273.15;
			}
		} else if($type == 'F') {
			if($value < -273.15) {
				throw new Exception('Temperatura ponizej zera bezwzglednego');
			} else {
				$this->k = ($value + 459.67) * (5/9);
			}
		}
	}
	
	/* Zwraca temperature w stopniach Celsjusza */
	public function getCelsius() {
		return $this->k - 273.15;
	}
	
	/* Zwraca temperaturę w stopniach Farenheita */
	public function getFahrenheit() {
		return ($this->k * 1.8) - 459.67;
	}
	
	/* Zwraca temperaturę w Kelwinach */
	public function getKelvin() {
		return $this->k;
	}
}
?>
