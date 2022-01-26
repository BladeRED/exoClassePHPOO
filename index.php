<?php
require "User.php";
require "Client.php";
require "utilisateur.php";
require "article.php";

$userAdmin = new utilisateur(1, "Lampe à l'heure", "Vlad", "Dracule_moi@vampire.ts", "Transylvator", "lesangdetesmorts",);
$userClient = new Client(1, "Pigeon", "Jean-Rémichel", "jemefaisarnaque@toutletemps.fr", "VictimeDu42", "azerty", "Chaussure");

$articles = [new article("article1", 2, 5.99, "https://maPhoto.jpg"), new article("article2", 2, 5.99, "https://maPhoto.jpg"), new article("article3", 2, 5.99, "https://maPhoto.jpg")]
?>;

<!DOCTYPE html>
<html>

<?php include 'parts/head.php' ?>


<body>

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