<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités</title>
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/actualites.css">
    <link rel="stylesheet" href="Assets/CSS/styleManifs.css">
</head>
<body>
<?php require 'Assets/CSS/NavBar.php'; ?>

<main>
<section class="actualites">
    <?php
    include 'php/model.php';

    $db = new Model();

    // Récupération des actualités
    $actualites = $db->getManifestations();

    // Affichage des actualités
    foreach ($actualites as $actu) {
        echo "<div class='actu'>";
        if ($actu['path_manif_img']) {
            echo "<img src='{$actu['path_manif_img']}' alt='Image de {$actu['nom_manif']}'>";
        }
        echo "<h2>{$actu['nom_manif']}</h2>";
        echo "<p>{$actu['desc_manif']}</p>";
        echo "<p>Date: {$actu['date_manif']}</p>";
        echo "</div>";
    }
    ?>
</section>
</main>

</body>
</html>