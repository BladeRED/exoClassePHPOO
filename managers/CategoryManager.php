<?php

class CategoryManager extends Dbmanager
{

    public function __construct()
    {
        parent::__construct();
    }

//récupère tout
    public function getAll()
    {

        $categories = [];
        $req = $this->bdd->query("SELECT * FROM category ORDER BY ordre_affichage");
        $req->execute();
        $result = $req->fetchAll();

        foreach ($result as $categ) {

            $categories[] = new Category($categ["id"], $categ["nom"], $categ["ordre_affichage"]);

        }

        return $categories;

    }

    //récupére un ID //
    public function getOne($id)
    {

        $query = $this->bdd->prepare("SELECT * FROM category WHERE id = :id");
        $query->execute(["id" => $id]);
        $res = $query->fetch();


    }

    // create

    public function create(Category $category)
    {

        $req = $this->bdd->prepare("INSERT INTO category (nom, ordre_affichage) VALUES(:nom, :ordre_affichage)");
        $req->execute(["nom" => $category->getNom(), "ordre_affichage" => $category->getOrdreAffichage()]);

        $category->setId($this->bdd->lastInsertId());

        return $category;

    }

    //delete

    public function delete($id)
    {

        $req = $this->bdd->prepare("DELETE FROM category WHERE id =:id");
        $req->execute(["id" => $id]);
    }

    //edit

    public function edit(Category $category)
    {

        $req = $this->bdd->prepare("UPDATE category SET nom =:nom, ordre_affichage = :ordre_affichage WHERE id =:id");
        $req->execute(["nom" => $category->getNom(), "ordre_affichage" => $category->getOrdreAffichage(), "id" => $category->getId()]);
    }

}


?>;



