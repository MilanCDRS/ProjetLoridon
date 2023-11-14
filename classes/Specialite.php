<?php
class Specialite{
    // variables
    private $_id;
    private $_numeroDep;
    private $_lib;
    private $_codeType;
    private $_ingredients;
    private $_description;
    private $_url_image;


    // Constructor
    public function __construct($id, $numeroDep, $lib, $codeType, $ingredients, $description){
        $this->_id = $id;
        $this->_numeroDep = $numeroDep;
        $this->_lib = $lib;
        $this->_codeType = $codeType;
        $this->_ingredients = $ingredients;
        $this->_description = $description;
        //$this->_url_image = "images/departement/$id.png";
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "id" : return $this->_id; break;
            case "numeroDep" : return $this->_numeroDep; break;
            case "lib" : return $this->_lib; break;
            case "codeType" : return $this->_codeType; break;
            case "ingredients" : return $this->_ingredients; break;
            case "description" : return $this->_description; break;
            case "url_image" : return $this->_url_image; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "id" : $this->_id = $value; break;
            case "numeroDep" : $this->_numeroDep = $value; break;
            case "lib" : $this->_lib = $value; break;
            case "codeType" : $this->_codeType = $value; break;
            case "ingredients" : $this->_ingredients = $value; break;
            case "description" : $this->_description = $value; break;
            case "url_image" : $this->_url_image = $value; break;
        }
    }
}

?>
