<?php
// Classe de gestion bdd

abstract class Dbmanager
{

    protected $bdd;

    public function __construct()
    {

        $this->bdd = new PDO("mysql:host=localhost;dbname=demo_poo;charset=utf8", "root", "");

    }

}


?>;