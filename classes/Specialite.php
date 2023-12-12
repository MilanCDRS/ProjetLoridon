<?php
class Specialite{
    // variables
    private $_id;
    private  $_departement;
    private $_lib;
    private  $_type;
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
        $this->_note = $this->GetNote();
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "id" : return $this->_id;
            case "departement" : return $this->_departement;
            case "lib" : return $this->_lib;
            case "type" : return $this->_type;
            case "ingredients" : return $this->_ingredients;
            case "description" : return $this->_description;
            case "urlImg" : return $this->_urlImg;
            case "note" : return $this->_note;
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
            case "urlImg" : $this->_urlImg = $value; break;
            case "note" : $this->_note = $value; break;
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

    public function GetNote(){
        $notes = GetNotes($this->_id);
        $notesTotal = count($notes);
        $cNote = 0;
        foreach ($notes as $note) {
            $cNote+=$note->note;
        }
        if ($cNote > 0)
        {$cNote /= $notesTotal;}
        round($cNote,0.1);
        return $cNote;
    }
}

?>
