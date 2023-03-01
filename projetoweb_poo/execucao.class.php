<?php

//importação
require_once("automoveis.class.php");

class teste{
    private $automoveis;

    public function __construct(){
        //objeto chamado pessoa que receba a classe Pessoa
        $automoveis = new automoveis();
        //passar um valor para o metodo setNome
        $automoveis->setTipo("<b>Tipo: Ferrari" ."<br>");
        //imprimir o valor do matodo getNome
        echo $automoveis->getTipo();
        
       //resultado da cor do carro
        $automoveis->setCor("Cor: vermelho" ."<br>");
        echo $automoveis->getCor();

        //resultado da placa
        $automoveis->setPlaca("Placa: JKL-0001" ."<br>");
        echo $automoveis->getPlaca();

      //resultado numeros de portas
        $automoveis->setNumeroDeportas("Numeros de portas: 4" ."<br>");
        echo $automoveis->getNumeroDeportas();

        //resultado do carro
        $automoveis->setTipo("<br>Tipo: Porsche" ."<br>");
        echo $automoveis->getTipo();

        //resultado da cor do carro
        $automoveis->setCor("Cor: Cinza" ."<br>");
        echo $automoveis->getCor();

        //resultado da placa
        $automoveis->setPlaca("Placa: MHZ-4345" ."<br>");
        echo $automoveis->getPlaca();

        //resultado numeros de portas
        $automoveis->setNumeroDeportas("Numeros de portas: 2" ."<br>");
        echo $automoveis->getNumeroDeportas();

    }
}new teste();
?>