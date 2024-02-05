<?php

class Film{
    private string $_titre;
    private int $_anneeSortie;
    private int $_duree;
    private string $_synopsis;
    private Realisateur $_realisateur;
    private Genre $_genre;
    private array $_listeCasting;


    public function __construct(string $titre, int $anneeSortie, int $duree, Realisateur $realisateur, Genre $genre){
        $this->_titre = $titre;
        $this->_anneeSortie = $anneeSortie;
        $this->_duree = $duree;
        $this->_realisateur = $realisateur;
        $this->_genre = $genre;
        $this->_realisateur->ajouterFilm($this);
        $this->_genre->ajouterFilmDeGenre($this);
    }
    
    // --------------------------------------- GETTER/SETTER TITRE -------------------------------------------------
    
    public function getTitre()
    {
        return $this->_titre;
    }


    public function setTitre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DATE SORTIE -------------------------------------------------

    public function getAnneeSortie()
    {
        return $this->_anneeSortie;
    }

    public function setAnneeSortie($anneeSortie)
    {
        $this->_anneeSortie = $anneeSortie;

        return $this;
    }

    // --------------------------------------- GETTER/SETTER DUREE -------------------------------------------------

    public function getDuree()
    {
        return $this->_duree;
    }

    public function setDuree($_duree)
    {
        $this->_duree = $_duree;

        return $this;
    }

   // --------------------------------------- GETTER/SETTER SYNOPSIS -------------------------------------------------

    public function getSynopsis()
    {
        return $this->_synopsis;
    }

    public function setSynopsis($_synopsis)
    {
        $this->_synopsis = $_synopsis;

        return $this;
    }

    // --------------------------------------- AFFICHAGE -------------------------------------------------

    public function __toString(): string{
        return "$this->_titre ($this->_anneeSortie)";
    }

    public function afficherFilm(){
        return "$this, Durée : $this->_duree minutes";
    }

    public function afficherCasting(){
        $result= "<h3>Casting de $this :</h3>";
        $result .= "<ul>";

        foreach ($this->_listeCasting as $acteurs){
        $result.="<li>".$acteurs."</li>";
        }

        $result.= "</ul>";
        $result .= "<p>---------------------------------------------------------------</p>";
        echo $result;
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

    // comparateur / fonction de comparaison entre 2 films
    public static function comparerTab($a, $b) {
        // si return -1 => a<b => l'ordre ne sera pas changé (entre a et b dans le tableau)
        // si return  1 => a>b => l'ordre sera changé (entre a et b dans le tableau)
        // si return  0 => a==b => impossible de les comparer => l'ordre ne sera pas changé (entre a et b dans le tableau)

        // opérateur ternaire :   CONDITION ? SIVRAI : SINON

        // 1. date de sortie ASC
        if ($a->getAnneeSortie() != $b->getAnneeSortie()) {
            return $a->getAnneeSortie() < $b->getAnneeSortie() ? -1 : 1;
        } else {
            // 2. durée ASC
            if ($a->getAnneeSortie() != $b->getAnneeSortie()) {
                return $a->get_duree() < $b->get_duree() ? -1 : 1;
            } else {
                // sinon impossible de comparer
                return 0;
            }
        }
    }

    //Permet d'ajouter un synopsis au film si on le souhaite (optionnel)
    public function ajouterSynopsis (string $synopsis){
        $this->_synopsis = $synopsis;
    }

    //ajoute un casting (acteur et son rôle) à la liste du casting du film
    public function fillListeCasting (Casting $casting){
        $this->_listeCasting[]= $casting;
    }
}