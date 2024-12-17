<?php
include 'php/model.php';
$model = new Model();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil - Ville de ScrumLand</title>
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/accueil.css">
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/numUrgence.css">
</head>
<body>
    <!-- Barre de Navigation -->
    <?php require './Assets/CSS/NavBar.php'; ?>
    <!-- Contenu principal -->
    <main>
        <!-- Description Courte -->
        <section id="intro">
            <h2>🌍 Une Ville Entre Mer et Montagne</h2>
            <p>
                Située dans le sud ensoleillé de la France, ScrumLand est une ville dynamique nichée entre les montagnes des Alpes et les rives de la Méditerranée. Son climat idéal, ses infrastructures modernes et son engagement écologique en font un lieu de vie unique.
            </p>
            <div class="btn-container">
                <a href="presentation.php" class="btn">Découvrir la Présentation</a>
                <a href="histoire.php" class="btn">Explorer l'Histoire</a>
            </div>
        </section>
        <?php $model->getAllImages() ?>
</body>
</html>
