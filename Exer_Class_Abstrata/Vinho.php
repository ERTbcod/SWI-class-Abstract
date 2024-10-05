<?php

require_once 'Bebida.php';

class Vinho extends Bebida{

    private $tipo;
    private $safra;

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getTipo(){
        return $this->tipo;
    }

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getSafra(){
        return $this->safra;
    }

    public function mostrarBebida(){
        return "Vinho: Nome: " . $this->getNome() . ", Safra: $this->safra, Tipo: $this->tipo, Preço: " . $this->getPreco();
    }

    public function verificarPreco($preco){
        $retorno = "Produto com o preço normal!";
        if($this->getPreco() < 25){
            $retorno = "Produto em Oferta!";
        }
        return $retorno;
    }
}

?>