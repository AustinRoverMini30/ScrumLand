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
            <h2> Nos commerces :</h2>
        </section>
        <?php $model->getAllImages() ?>