<?php
class Departement{
    private $numero;
    private $code;
    private $nom;
    private $blason;

    public function __construct($numero, $code, $nom, $blason){
        $this->numero=$numero;
        $this->code= $code;
        $this->nom=$nom;
        $this->blason=$blason;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function getCode(){
        return $this->code;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getBlason(){
        return $this->blason;
    }
}
?>