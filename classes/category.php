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

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->_nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->_nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getOrdreAffichage()
    {
        return $this->_ordreAffichage;
    }

    /**
     * @param mixed $ordreAffichage
     */
    public function setOrdreAffichage($ordreAffichage): void
    {
        $this->_ordreAffichage = $ordreAffichage;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->_id = $id;
    }


}


?>;