<?php
class User{
    // variables
    private $_ident;
    private $_mail;
    private $_mdp;
    private $_pseudo;
    private $_dateInscription;

    // Constructor
    public function __construct($ident, $mail, $mdp, $pseudo, $dateInscription){
        $this->_ident = $ident;
        $this->_mail = $mail;
        $this->_mdp = $mdp;
        $this->_pseudo = $pseudo;
        $this->_dateInscription = $dateInscription;
    }

    // Getters 
    public function __get($propriete) {
        switch ($propriete) {
            case "ident" : return $this->_ident; break;
            case "mail" : return $this->_mail; break;
            case "mdp" : return $this->_mdp; break;
            case "pseudo" : return $this->_pseudo; break;
            case "dateInscription" : return $this->_dateInscription; break;
        }
    }

    // Setters
    public function __set($propriete, $value) {
        switch ($propriete) {
            case "ident" : $this->_ident = $value; break;
            case "mail" : $this->_mail = $value; break;
            case "mdp" : $this->_mdp = $value; break;
            case "pseudo" : $this->_pseudo = $value; break;
            case "dateInscription" : $this->_dateInscription = $value; break;
        }
    }
}

?>
