<?php
class Type{
    // variables
    private $_code;
    private $_type;


    // Constructor
    public function __construct($code, $type){
        $this->_code = $code;
        $this->_type = $type;
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "code" : return $this->_code; break;
            case "type" : return $this->_type; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "code" : $this->_code = $value; break;
            case "type" : $this->_type = $value; break;
        }
    }
}

?>
