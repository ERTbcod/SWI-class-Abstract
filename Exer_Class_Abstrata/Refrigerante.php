<?php

require_once 'Bebida.php';

class Refrigerante extends Bebida{

    private $retornavel;

    public function setRetornavel($retornavel){
        $this->retornavel = $retornavel;
    }

    public function getRetornavel(){
        return $this->retornavel;
    }

    public function mostrarBebida()
    {
        
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