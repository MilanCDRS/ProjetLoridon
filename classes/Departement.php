<?php
class Departement{
    //Variables 
    private $numero;
    private $code;
    private $nom;
    private $blason;

    //Constructor
    public function __construct($numero, $code, $nom, $blason){
        $this->numero=$numero;
        $this->code= $code;
        $this->nom=$nom;
        $this->blason=$blason;
    }

    //Getters
    public function __get($propriete) {
        switch ($propriete) {
            case "numero" : return $this->_numero; break;
            case "code" : return $this->_code; break;
            case "nom" : return $this->_nom; break;
            case "blason" : return $this->_blason; break;
        }
    }

    //Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "numero" : $this->_numero = $value; break;
            case "code" : return $this->_code = $value; break;
            case "nom" : return $this->_nom = $value; break;
            case "blason" : return $this->_blason = $value; break;
        }
    }
    
}
?>
