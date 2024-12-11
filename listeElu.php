<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élus municipaux</title>
    <link rel="stylesheet" href="Assets/CSS/listeElu.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="calendrier.php">Calendrier</a></li>
            <li><a href="histoire.php">Notre histoire</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="actualites.php">Actualités</a></li>
            <li><a href="elus.php">Nos élus</a></li>
        </ul>
    </nav>
    <h1>Liste des élus municipaux</h1>
</header>

<main>
    <section class="elus">
        <?php
        // Exemple de données des élus
        $elus = [
            ["nom" => "Dupont", "prenom" => "Jean", "photo" => "images/jean_dupont.jpg"],
            ["nom" => "Martin", "prenom" => "Marie", "photo" => "images/marie_martin.jpg"],
            ["nom" => "Durand", "prenom" => "Pierre", "photo" => "images/pierre_durand.jpg"],
            ["nom" => "Lefevre", "prenom" => "Sophie", "photo" => "images/sophie_lefevre.jpg"],
            ["nom" => "Moreau", "prenom" => "Luc", "photo" => "images/luc_moreau.jpg"],
            ["nom" => "Simon", "prenom" => "Claire", "photo" => "images/claire_simon.jpg"]
        ];

        // Affichage des élus
        foreach ($elus as $elu) {
            echo "<div class='elu'>";
            echo "<img src='{$elu['photo']}' alt='Photo de {$elu['prenom']} {$elu['nom']}'>";
            echo "<h2>{$elu['prenom']} {$elu['nom']}</h2>";
            echo "</div>";
        }
        ?>
    </section>
</main>

<footer>
    <nav>
        <a href="index.html">Accueil</a> |
        <a href="histoire.html">Histoire</a> |
        <a href="contact.html">Contact</a>
    </nav>
    <p>Site multilingue | Responsive design | Mentions légales</p>
    <p>&copy; 2024 Ville de ScrumLand. Tous droits réservés.</p>
</footer>
</body>
</html>