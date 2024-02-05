<?php

class Role{
    private string $_nomRole;
    private array $_listeActeurs;

    public function __construct(string $nomRole){
        $this->_nomRole = $nomRole;
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

        foreach ($this->_listeActeurs as $acteur){
            $result .= "<li>".$acteur."</li>";
        }

        $result .=  "</ul>";
        $result .= "<p>---------------------------------------------------------------</p>";
        echo $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    //ajoute un acteur à la liste d'acteurs ayant joué ce rôle
    public function ajouterActeur(Casting $acteur){
        $this->_listeActeurs[]= $acteur->afficherActeurFilm();
    }

}