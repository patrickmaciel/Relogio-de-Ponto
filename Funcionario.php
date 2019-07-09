<?php

class Funcionario {

public $nsr;
public $registro;
public $data;
public $hora;
public $pis;


public function getNsr() {
	return $this->nsr;
}
public function setNsr($nsr) {
	$this->nsr = $nsr;
	return $this;
}


public function getRegistro() {
	return $this->registro;
}
public function setRegistro($registro) {
	$this->registro = $registro;
	return $this;
}


public function getData() {
	return $this->data;
}
public function setData($data) {
	$this->data = $data;
	return $this;
}


public function getHora() {
	return $this->hora;
}
public function setHora($hora) {
	$this->hora = $hora;
	return $this;
}


public function getPis() {
	return $this->pis;
}
public function setPis($pis) {
	$this->pis = $pis;
	return $this;
}
 


}

?>