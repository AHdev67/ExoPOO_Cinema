<?php

class Role{
    private string $_nomRole;
    private array $_listeActeurs;

    public function __construct(string $nomRole){
        $this->_nomRole = $nomRole;
    }

    // --------------------------------------- GETTER/SETTER ROLE -------------------------------------------------
    public function get_nomRole()
    {
        return $this->_nomRole;
    }

    public function set_nomRole($_nomRole)
    {
        $this->_nomRole = $_nomRole;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "$this->_nomRole";
    }

    public function afficherListeActeurs(){
        $result= "Acteurs ayant incarné $this : <br>-------------------------------------<br>";
        foreach ($this->_listeActeurs as $acteur){
            $result.=$acteur."<br>";
        }
        $result.= "<br><br>";
        return $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function fillListeActeurs(Casting $acteur){
        $this->_listeActeurs[]= $acteur->afficherActeurFilm();
    }

}