<?php

// Classe qui représente en objet notre catégorie en bdd //

class Category{

    private $_id;
    private $_nom;
    private $_ordreAffichage;

    /**
     * @param $_id
     * @param $_nom
     * @param $_ordreAffichage
     */
    public function __construct($_id, $_nom, $_ordreAffichage)
    {
        $this->_id = $_id;
        $this->_nom = $_nom;
        $this->_ordreAffichage = $_ordreAffichage;
    }

    public function getId(){return $this->_id;}


}


?>;