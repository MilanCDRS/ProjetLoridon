<?php
class Favori{
    // variables
    private $_identUser;
    private $_idSpecialite;

    // Constructor
    public function __construct($identUser, $idSpecialite){
        $this->_identUser = $identUser;
        $this->_idSpecialite = $idSpecialite;
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "identUser" : return $this->_identUser; break;
            case "idSpecialite" : return $this->_idSpecialite; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "identUser" : $this->_identUser = $value; break;
            case "idSpecialite" : $this->_idSpecialite = $value; break;
        }
    }
}

?>
