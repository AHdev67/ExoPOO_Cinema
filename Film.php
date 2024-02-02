<?php

class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private array $_listeCasting;


    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_realisateur->fillFilmographie($this);
        $this->_genre->fillListeFilms($this);
    }
    
    // --------------------------------------- GETTER/SETTER TITRE -------------------------------------------------
    
    public function get_titre()
    {
        return $this->_titre;
    }


    public function set_titre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DATE SORTIE -------------------------------------------------

    public function get_dateSortie(): DateTime
    {
        return $this->_dateSortie;
    }

    public function set_dateSortie($_dateSortie)
    {
        $this->_dateSortie = $_dateSortie;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DUREE -------------------------------------------------

    public function get_duree()
    {
        return $this->_duree;
    }

    public function set_duree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

   // --------------------------------------- GETTER/SETTER SYNOPSIS -------------------------------------------------

    public function get_synopsis()
    {
        return $this->_synopsis;
    }

    public function set_synopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(): string{
        return "$this->_titre (".$this->get_dateSortie()->format("Y").")";
    }

    public function afficherFilm(){
        return "$this, Durée : $this->_duree minutes";
    }

    public function afficherCasting(){
        $result= "Casting de $this :<br>-------------------------------------<br><ul>";
        foreach ($this->_listeCasting as $acteurs){
        $result.="<li>".$acteurs."</li><br>";
        }
        $result.= "</ul><br>";
        return $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function addSynopsis (string $synopsis){
        $this->_synopsis = $synopsis;
    }

    public function fillListeCasting (Casting $casting){
        $this->_listeCasting[]= $casting;
    }
}