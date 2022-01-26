<?php

require "managers/Dbmanager.php";
require "classes/category.php";
require "managers/CategoryManager.php";
require "managers/User.php";
require "classes/Client.php";
require "classes/utilisateur.php";

require "classes/article.php";

$categoryManager = new CategoryManager();
$categories = $categoryManager->getAll();
$userAdmin = new utilisateur(1, "Lampe à l'heure", "Vlad", "Dracule_moi@vampire.ts", "Transylvator", "lesangdetesmorts",);
$userClient = new Client(1, "Pigeon", "Jean-Rémichel", "jemefaisarnaque@toutletemps.fr", "VictimeDu42", "azerty", "Chaussure");
$articles = [new article("article1", 2, 5.99, "https://maPhoto.jpg"), new article("article2", 2, 5.99, "https://maPhoto.jpg"), new article("article3", 2, 5.99, "https://maPhoto.jpg")]
?>;

<!DOCTYPE html>
<html>

<?php include 'parts/head.php' ?>


<body>

<div class="collapse navbar-collapse" id="navBarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <?php

        foreach ($categories as $category) {

            echo(' <li class ="nav-item active">
    <a class="nav-link" href=#">' . $category->getNom() . '</a>
 
</li>');
        }

        ?>
    </ul>
</div>

<table class="table table-dark table-striped mb-5 animate__animated animate__jello">
    <thead>
    <tr>
        <th scope="col">Nom</th>
        <th scope="col">Quantité</th>
        <th scope="col">Prix</th>
        <th scope="col">Photo</th>

    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($articles as $article) {


        echo(' <tr>
                <th scope="row">' . $article->getName() . '</th>
                <td>' . $article->getQuantity() . '</td>
                <td>' . $article->getPrice() . '</td>
                <td>' . $article->getPhoto() . '</td>
            </tr>');
    }

    ?>
    </tbody>
</table>


</body>

</html>