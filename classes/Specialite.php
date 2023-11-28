<?php
class Specialite{
    // variables
    private $_id;
    private Departement $_departement;
    private $_lib;
    private Type $_type;
    private $_ingredients;
    private $_description;
    private $_urlImg;

    private $_note;


    // Constructors
    public function __construct($id, Departement $departement, $lib, Type $type, $ingredients, $description){
        $this->_id = $id;
        $this->_departement = $departement;
        $this->_lib = $lib;
        $this->_type = $type;
        $this->_ingredients = $ingredients;
        $this->_description = $description;
        $this->_urlImg = $this->GetUrlImg();
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "id" : return $this->_id; break;
            case "departement" : return $this->_departement; break;
            case "lib" : return $this->_lib; break;
            case "type" : return $this->_type; break;
            case "ingredients" : return $this->_ingredients; break;
            case "description" : return $this->_description; break;
            case "urlImg" : return $this->_urlImg; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "id" : $this->_id = $value; break;
            case "departement" : $this->_departement = $value; break;
            case "lib" : $this->_lib = $value; break;
            case "type" : $this->_type = $value; break;
            case "ingredients" : $this->_ingredients = $value; break;
            case "description" : $this->_description = $value; break;
            case "urlImg" : return $this->_urlImg; break;
        }
    }

    // récupere le chemin de l'image associée à la spécialité
    // Si il existe une image, alors elle est stockée dans le dossier suivant Images > Specialites 
    // le nom de l'image est son id 
    // si l'image n'est pas trouvée, alors elle n'existe pas et dans ce cas on associe une image exemple aléatoire dans le dossier Images > ImagesIcones > SansFond 

    public function GetUrlImg(){
        $url = "images/specialite/".$this->_id.".png";
        if(!file_exists($url)){
            $num = rand(1,2);
            $img= $this->_type->type;
            $url = "images/IconesSpe/SansFond/$img$num.png";
        }
        return $url;
    }
}

?>
