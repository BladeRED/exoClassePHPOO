<?php

require "managers/Dbmanager.php";
require "classes/category.php";
require "managers/CategoryManager.php";
require "classes/article.php";
require "managers/ArticleManager.php";
require "managers/User.php";
require "classes/Client.php";
require "classes/utilisateur.php";


$categoryManager = new CategoryManager();
$categories = $categoryManager->getAll();
$articleManager = new ArticleManager();
$articles = $articleManager->getAll();
$userAdmin = new utilisateur(1, "Lampe à l'heure", "Vlad", "Dracule_moi@vampire.ts", "Transylvator", "lesangdetesmorts",);
$userClient = new Client(1, "Pigeon", "Jean-Rémichel", "jemefaisarnaque@toutletemps.fr", "VictimeDu42", "azerty", "Chaussure");

?>;

<!DOCTYPE html>
<html>

<?php include 'parts/head.php' ?>


<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <?php

                foreach ($categories as $category) {

                    echo(' <li class ="nav-item active">
    <a class="nav-link" href=#">' . $category->getNom() . '</a>
 
</li>');
                }

                ?>
            </ul>
        </div>
    </div>
</nav>

<table class="table table-dark table-striped mb-5 animate__animated animate__jello">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix</th>
        <th scope="col">Photo</th>
        <th scope="col">Actions</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($articles as $article) {


        echo(' <tr>
                <th scope="row">' . $article->getName() . '</th>
                <td>' . $article->getQuantity() . '</td>
                <td>' . $article->getPrice() . '</td>
                <td><img src ="' . $article->getPhoto() . '" alt ="" class ="prout"></td>
                <td><a href="remove-player.php?id=' . $article["id"] . '" class ="btn btn-outline-danger">Delete</a></td>
            </tr>');
    }

    ?>
    </tbody>
</table>


</body>

</html>