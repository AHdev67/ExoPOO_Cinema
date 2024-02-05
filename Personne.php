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

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER PRENOM -------------------------------------------------

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER SEXE -------------------------------------------------

    public function getSexe()
    {
        return $this->_sexe;
    }

    public function setSexe($_sexe)
    {
        $this->_sexe = $_sexe;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DATE NAISSANCE -------------------------------------------------

    public function getDateNaissance()
    {
        return $this->_dateNaissance;
    }

    public function setDateNaissance($_dateNaissance)
    {
        $this->_dateNaissance = $_dateNaissance;

        return $this;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

}