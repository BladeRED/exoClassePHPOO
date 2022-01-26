<?php
// Classe de gestion bdd

abstract class Dbmanager
{

    protected $bdd;

    public function __construct()
    {

        $this->bdd = new PDO("mysql:dbname=demo_poo;host=127.0.0.1", "root", "");

    }

}


?>;