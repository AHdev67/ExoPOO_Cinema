<?php

class Genre{
    private string $_genre;
    private array $_listeFilms;

    public function __construct(string $genre){
        $this->_genre = $genre;
    }

    // --------------------------------------- GETTER/SETTER GENRE -------------------------------------------------
    public function getGenre()
    {
        return $this->_genre;
    }

    public function setGenre($_genre)
    {
        $this->_genre = $_genre;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(){
        return "$this->_genre";
    }

    public function afficherListeFilms(){
        $result= "<h3>Films de $this :</h3>";
        $result .= "<ul>";

        usort($this->_listeFilms, [Film::class,"comparerTab"]);

        foreach ($this->_listeFilms as $films){
            $result.="<li>".$films."</li>";
        }

        $result.= "</ul>";
        $result .= "<p>---------------------------------------------------------------</p>";
        echo $result;
    }
    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function fillListeFilms(Film $film){
        $this->_listeFilms[]= $film;
    }
}