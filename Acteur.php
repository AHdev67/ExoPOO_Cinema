<?php

class Acteur extends Personne{
    private array $_filmographie;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime ($dateNaissance);
    }

    // --------------------------------------- GETTER/SETTER FILMOGRAPHIE -------------------------------------------------

    public function get_filmographie()
    {
        return $this->_filmographie;
    }

    public function set_filmographie($_filmographie)
    {
        $this->_filmographie = $_filmographie;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(): string{
        return $this->_prenom." ".$this->_nom;
    }

    public function afficherFilmographie(){
        $result= "Films dans lesquels $this à joué :";
        foreach ($this->_filmographie as $films){
            $result.=$films."<br>";
        }
        return $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function fillFilmographie(Casting $casting){
        $this->_filmographie[]= $casting;
    }
}