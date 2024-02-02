<?php

class Role{
    private string $_nomRole;

    public function __construct(string $nomRole){
        $this->_nomRole = $nomRole;
    }

    // --------------------------------------- GETTER/SETTER ROLE -------------------------------------------------
    public function get_nomRole()
    {
        return $this->_nomRole;
    }

    public function set_nomRole($_nomRole)
    {
        $this->_nomRole = $_nomRole;

        return $this;
    }

    // --------------------------------------- TOSTRING -------------------------------------------------
    public function __toString(){
        return "$this->_nomRole";
    }

    // --------------------------------------- METHODES CUSTOM -------------------------------------------------


}