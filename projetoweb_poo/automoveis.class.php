<?php

class automoveis {
    private $tipo;
    private $cor;
    private $placa;
    private $numeroDeportas;

    public function getTipo(){
        return $this->tipo;
    }
    //metodo de alteração de valor d objeto
    public function setTipo($tipo){
     $this->tipo =$tipo;
    }
    
//cor
    public function getCor(){
        return $this->cor;
    }
    
    public function setCor($cor){
     $this->cor =$cor;
    }
    
//placa
    public function getPlaca(){
        return $this->placa;
    }
   
    public function setPlaca($placa){
     $this->placa =$placa;
    }
    
//numero de placas
    public function getNumeroDeportas(){
        return $this->numeroDeportas;
    }
   
    public function setNumeroDeportas($numeroDeportas){
     $this->numeroDeportas = $numeroDeportas;
    }
}
?>
