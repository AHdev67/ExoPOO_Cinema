<?php

class Genre{
    private string $_genre;
    private array $_listeFilms;

    public function __construct(string $genre){
        $this->_genre = $genre;
    }

    // --------------------------------------- GETTER/SETTER GENRE -------------------------------------------------
    public function get_genre()
    {
        return $this->_genre;
    }

    public function set_genre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "$this->_genre";
    }

    public function afficherListeFilms(){
        $result= "Films de $this : <br>-------------------------------------<br><ul>";
        foreach ($this->_listeFilms as $films){
            $result.="<li>".$films."</li><br>";
        }
        $result.= "</ul><br>";
        return $result;
    }
    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function fillListeFilms(Film $film){
        $this->_listeFilms[]= $film;
    }
}