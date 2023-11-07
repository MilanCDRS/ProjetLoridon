<?php
class Region{
    //Variables 
    private $code;
    private $libelle;

    //Constructor
    public function __construct($code, $libelle){
        $this->code=$code;
        $this->libelle=$libelle;
    }

    //Getters
    public function __get($propriete) {
        switch ($propriete) {
            case "code" : return $this->_code; break;
            case "libelle" : return $this->_libelle; break;
        }
    }

    //Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "code" : $this->_code = $value; break;
            case "libelle" : return $this->libelle = $value; break;
        }
    }
    
}
?>
