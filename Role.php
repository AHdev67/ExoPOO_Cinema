<?php

class Role{
    private string $_nomRole;
    private array $_castings;

    public function __construct(string $nomRole){
        $this->_nomRole = $nomRole;

        $this->_castings = [];
    }

    // --------------------------------------- GETTER/SETTER ROLE -------------------------------------------------
    public function getNomRole()
    {
        return $this->_nomRole;
    }

    public function setNomRole($_nomRole)
    {
        $this->_nomRole = $_nomRole;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "$this->_nomRole";
    }

    public function afficherListeActeurs(){

        $result = "<h3>Acteurs ayant incarné $this :</h3>";
        $result .=  "<ul>";

        foreach ($this->_castings as $casting){
            $result .= "<li>".$casting->getActeur()." (".$casting->getFilm().")"."</li>";
        }

        $result .=  "</ul>";
        $result .= "<p>---------------------------------------------------------------</p>";
        echo $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    //ajoute un casting à la liste des castings
    public function ajouterCasting(Casting $casting){
        $this->_castings[] = $casting;
    }
}