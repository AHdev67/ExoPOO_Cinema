<?php

class Acteur extends Personne{
    private array $_filmographie;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime($dateNaissance);
        $this->_filmographie = [];
    }

    // --------------------------------------- GETTER/SETTER FILMOGRAPHIE -------------------------------------------------

    public function getFilmographie()
    {
        return $this->_filmographie;
    }

    public function setFilmographie($filmographie)
    {
        $this->_filmographie = $filmographie;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(): string{
        return $this->_prenom." ".$this->_nom;
    }

    public function afficherFilmographie(){

        $result = "<h3>Filmographie de $this :</h3>";
        $result .= "<ul>";

        usort($this->_filmographie, [Casting::class,"comparerCasting"]);

        foreach ($this->_filmographie as $role){
            $result .= "<li>".$role->afficherRole()."</li>";
        }

        $result .= "</ul>";
        $result .= "<p>---------------------------------------------------------------</p>";
        echo $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    //ajoute un film à la filmographie de l'acteur
    public function ajouterCasting(Casting $casting){
        $this->_filmographie[]= $casting;
    }
}