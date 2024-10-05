<?php

require_once 'Bebida.php';

class Suco extends Bebida{
    
    private $sabor;

    public function setSabor($sabor){
        $this->sabor = $sabor;
    }

    public function getSabor(){
        return $this->sabor;
    }

    public function mostrarBebida()
    {
        return "Suco: " . $this->getNome() . "Sabor: $this->sabor, Preço:" . $this->getPreco();
    }

    public function verificarPreco($preco)
    {
        $retorno = false;
        if($this->getPreco() < 25){
            $retorno = true;
        }
        return $retorno;
    }
}
?>