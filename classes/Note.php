<?php
class Note{
    // variables
    private $_identUser;
    private $_idSpecialite;
    private $_note;

    // Constructor
    public function __construct($identUser, $idSpecialite, $note){
        $this->_identUser = $identUser;
        $this->_idSpecialite = $idSpecialite;
        $this->_note = $note;
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "identUser" : return $this->_identUser; break;
            case "idSpecialite" : return $this->_idSpecialite; break;
            case "note" : return $this->_note; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "identUser" : $this->_identUser = $value; break;
            case "idSpecialite" : $this->_idSpecialite = $value; break;
            case "note" : $this->_note = $value; break;
        }
    }
}

?>
