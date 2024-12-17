<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Urgence</title>
    <!-- Liens vers les feuilles de style CSS -->
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/numUrgence.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header id="header">
        <canvas id="canvas"></canvas>
        <h1>Mairie de Votre Ville</h1>
        <p>Bienvenue sur le site officiel de la mairie</p>
    </header>

    <!-- Contenu principal -->
    <main>
        <!-- Section Numéros d'Urgence -->
        <section id="urgence" class="emergency">
            <h3>🚨 Numéros d'Urgence</h3>
            <ul>
                <li>🚑 SAMU (Urgences médicales) : <strong>15</strong></li>
                <li>🚓 Police / Gendarmerie : <strong>17</strong></li>
                <li>🚒 Pompiers : <strong>18</strong></li>
                <li>🌍 Numéro d'urgence européen : <strong>112</strong></li>
                <li>🏢 Urgences municipales : <strong>01 23 45 67 89</strong></li>
            </ul>
        </section>
    </main>

    <!-- Pied de page -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>
</body>
</html>
