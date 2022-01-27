<?php

class ArticleManager extends Dbmanager
{

    public function __construct()
    {
        parent::__construct();
    }

//récupère tout
    public function getAll()
    {

        $articles = [];
        $req = $this->bdd->query("SELECT * FROM article ORDER BY id");
        $req->execute();
        $result = $req->fetchAll();

        foreach ($result as $art) {

            $articles[] = new Article($art["id"], $art["name"], $art["quantity"], $art["price"], $art["photo"]);

        }

        return $articles;

    }

    //récupére un ID //
    public function getOne($id)
    {

        $query = $this->bdd->prepare("SELECT * FROM article WHERE id = :id");
        $query->execute(["id" => $id]);
        $res = $query->fetch();


    }

    // create

    public function create(Article $article)
    {

        $req = $this->bdd->prepare("INSERT INTO article (name, quantity,  price, photo) VALUES(:name, :quantity, :price, :photo)");
        $req->execute(["nom" => $article->getNom(), "quantity" => getQuantity(), "price" => $article->getPrice(), "photo" => getPhoto()]);

        $article->setId($this->bdd->lastInsertId());

        return $article;

    }

    //delete

    public function delete($id)
    {

        $req = $this->bdd->prepare("DELETE FROM article WHERE id =:id");
        $req->execute(["id" => $id]);
    }

    //edit

    public function edit(Article $article)
    {

        $req = $this->bdd->prepare("UPDATE article SET name =:name, quantity = :quantity, price = :price, photo = :photo WHERE id =:id");
        $req->execute(["name" => $article->getName(), "quantity" => $article->getQuantity(), "price" => $article->getPrice(), "photo" => $article->getPhoto(), "id" => $article->getId()]);
    }

}


?>;



