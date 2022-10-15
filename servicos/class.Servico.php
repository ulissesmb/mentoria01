<?php

class Servico {

    private $nome;
    private $valor;

    function __construct(){
        echo "oi v2";
    }
    public function setNome($param){
        $this->nome = $param;
    }

    public function setValor($param){
        $this->valor = $param;
    }

    public function registros(){
        echo "mostrar registros";
    }

    function __toString(){
        if(is_null($this->Servico)) {
            return 'NULL';
        }
        return $this->Servico;
    }

}

?>