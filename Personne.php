<?php

class Personne{
    private string $_nom;
    private string $_prenom;
    private string $_sexe;
    private DateTime $_dateNaissance;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance){
        $this->_nom = $nom;
        $this->_prenom = $prenom;
        $this->_sexe = $sexe;
        $this->_dateNaissance = new DateTime ($dateNaissance);
    }

    // --------------------------------------- GETTER/SETTER NOM -------------------------------------------------

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER PRENOM -------------------------------------------------

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER SEXE -------------------------------------------------

    public function get_sexe()
    {
        return $this->_sexe;
    }

    public function set_sexe($_sexe)
    {
        $this->_sexe = $_sexe;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DATE NAISSANCE -------------------------------------------------

    public function get_dateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function set_dateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

}