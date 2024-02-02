<?php

class Acteur extends Personne{
    private array $_filmographie;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
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

    // --------------------------------------- TOSTRING -------------------------------------------------

    public function __toString(): string{
        return $this->_prenom." ".$this->_nom;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

}