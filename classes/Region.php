<?php
class Region{
    //Variables 
    private $_code;
    private $_libelle;

    //Constructor
    public function __construct($code, $libelle){
        $this->_code=$code;
        $this->_libelle=$libelle;
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
            case "libelle" : $this->_libelle = $value; break;
        }
    }
    
}
?>
