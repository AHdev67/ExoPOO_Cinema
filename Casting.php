<?php

class Casting{
    private Film $_film;
    private Acteur $_acteur;
    private Role $_role;

    public function __construct(Film $film, Acteur $acteur, Role $role){
        $this->_film = $film;
        $this->_acteur = $acteur;
        $this->_role = $role;
        $this->_acteur->ajouterCasting($this);
        $this->_film->fillListeCasting($this);
        $this->_role->ajouterActeur($this);
    }

    // --------------------------------------- GETTER/SETTER FILM ------------------------------------------------- 
    public function getFilm()
    {
        return $this->_film;
    }

    public function setFilm($_film)
    {
        $this->_film = $_film;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER ACTEUR -------------------------------------------------

    public function getActeur()
    {
        return $this->_acteur;
    }

    public function setActeur($_acteur)
    {
        $this->_acteur = $_acteur;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER ROLE -------------------------------------------------

    public function getRole()
    {
        return $this->_role;
    }

    public function setRole($_role)
    {
        $this->_role = $_role;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "$this->_acteur dans le rôle de $this->_role.";
    }

    public function afficherRole(){
        return "$this->_film, Rôle : $this->_role.";
    }

    public function afficherActeur(){
        return "$this->_acteur, dans le rôle de $this->_role.";
    }

    public function afficherActeurFilm(){
        return "$this->_acteur, dans $this->_film";
    }
    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    //Getter spécifique pour récuperer la valeur de la propriété _dateSortie de l'objet Film qu'on passe en paramètre à l'objet Casting. 
    public function getAnneeSortie(){
        return $this->_film->getAnneeSortie();
    }

    //méthode de tri basée sur l'année de sortie du film
    public static function comparerCasting ($a, $b){
        if ($a->getAnneeSortie() != $b->getAnneeSortie()) {
            return $a->getAnneeSortie() < $b->getAnneeSortie() ? -1 : 1;
        } else {
            if ($a->getAnneeSortie() != $b->getAnneeSortie()) {
                return $a->get_duree() < $b->get_duree() ? -1 : 1;
            } else {
                return 0;
            }
        }
    }
}