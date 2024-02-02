<?php

class Casting{
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_acteur->fillFilmographie($this);
        $this->_film->fillListeCasting($this);
    }

    // --------------------------------------- GETTER/SETTER FILM ------------------------------------------------- 
    public function get_film()
    {
        return $this->_film;
    }

    public function set_film($_film)
    {
        $this->_film = $_film;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER ACTEUR -------------------------------------------------
    public function get_acteur()
    {
        return $this->_acteur;
    }

    public function set_acteur($_acteur)
    {
        $this->_acteur = $_acteur;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER ROLE -------------------------------------------------
    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($_role)
    {
        $this->_role = $_role;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "-$this->_acteur dans le rôle de $this->_role.";
    }

    public function afficherRole(){
        return "-$this->_film, Rôle : $this->_role.";
    }

    public function afficherActeur(){
        return "-$this->_acteur, dans le rôle de $this->_role.";
    }
    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

}