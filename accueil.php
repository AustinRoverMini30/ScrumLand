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
    <link rel="stylesheet" href="Assets/CSS/acutalite.css">
    <script src="Assets/JS/actualite.js" defer></script>
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
        <?php require 'php/acutalite.php'; ?>
        <!-- Section Aperçu des Sections -->
        <section id="sections">
            <h2>🔍 Découvrez ScrumLand</h2>
            <div class="section-grid">
                <div class="section-card">
                    <h3>🌊 Situation Géographique</h3>
                    <p>Des paysages naturels exceptionnels entre lacs, forêts et montagnes.</p>
                </div>
                <div class="section-card">
                    <h3>📊 Démographie</h3>
                    <p>Une ville jeune, multiculturelle et en pleine expansion économique.</p>
                </div>
                <div class="section-card">
                    <h3>🏛️ Gouvernance</h3>
                    <p>Une administration moderne axée sur l'innovation et la transparence.</p>
                </div>
                <div class="section-card">
                    <h3>🌱 Écologie</h3>
                    <p>Une référence mondiale en matière de développement durable et écologique.</p>
                </div>
                <div class="section-card">
                    <h3>🚀 Technologie</h3>
                    <p>Un pôle technologique d’innovation pour un avenir intelligent.</p>
                </div>
                <div class="section-card">
                    <h3>🎭 Culture</h3>
                    <p>Des infrastructures et des événements culturels pour tous les goûts.</p>
                </div>
            </div>
        </section>
        <?php require 'numUrgences.php'; ?>

        <!-- Pied de page -->
        <footer id="footer">
            <p>&copy; 2024 Ville de ScrumLand. Tous droits réservés.</p>
        </footer>
    </main>
</body>
</html>
