<?php

class Genre{
    private string $_genre;

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

    // --------------------------------------- TOSTRING -------------------------------------------------

    public function __toString(){
        return "$this->_genre";
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------

}