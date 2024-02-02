<?php

class Film{
    private string $_titre;
    private DateTime $_dateSortie;
    private int $_duree;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Genre $_genre;


    public function __construct(string $titre, string $dateSortie, int $duree, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_dateSortie = new DateTime($dateSortie);
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_realisateur->fillFilmographie($this);
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

    public function get_dateSortie()
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
        return "$this->_titre ( ".$this->_dateSortie.")";
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    public function addSynopsis (string $synopsis){
        $this->_synopsis = $synopsis;
    }
}