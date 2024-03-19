<<<<<<< HEAD
<?php
class Departement{
    //Variables 
    private $_numero;
    private $region;
    private $_nom;

    //Constructor
    public function __construct($numero, Region $region, $nom){
        $this->_numero = $numero;
        $this->_region = $region;
        $this->_nom = $nom;
    }

    //Getters
    public function __get($propriete) {
        switch ($propriete) {
            case "numero" : return $this->_numero; break;
            case "region" : return $this->_region; break;
            case "nom" : return $this->_nom; break;
        }
    }

    //Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "numero" : $this->_numero = $value; break;
            case "region" : $this->_region = $value; break;
            case "nom" : $this->_nom = $value; break;
        }
    }
    
}
?>
=======
<?php
class Departement{
    //Variables 
    private $_numero;
    private $region;
    private $_nom;

    //Constructor
    public function __construct($numero, Region $region, $nom){
        $this->_numero = $numero;
        $this->_region = $region;
        $this->_nom = $nom;
    }

    //Getters
    public function __get($propriete) {
        switch ($propriete) {
            case "numero" : return $this->_numero; break;
            case "region" : return $this->_region; break;
            case "nom" : return $this->_nom; break;
        }
    }

    //Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "numero" : $this->_numero = $value; break;
            case "region" : $this->_region = $value; break;
            case "nom" : $this->_nom = $value; break;
        }
    }
    
}
?>
>>>>>>> ae68efcb1830a03b35db876194fd4788b938839e
