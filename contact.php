<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="Assets/CSS/stylesContact.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Accueil</a></li>
            <li><a href="index.php">Calendrier</a></li>
            <li><a href="index.php">Notre histoire</a></li>
            <li><a href="index.php">Contact</a></li>
            <li><a href="index.php">Actualités</a></li>
            <li><a href="index.php">Nos élus</a></li>
        </ul>
    </nav>
</header>

<main>

    <section class="contact-infos">
        <h1>Contactez-nous</h1>
        <p>Vous avez une question ou une demande particulière ? N'hésitez pas à nous contacter !</p>
        <p>Par téléphone : 06 12 50 00 12</p>
        <p>Par mail : <a href="mailto:contact@scrumland.fr">contact@scrumland.fr</a></p>
    </section>

    <section class="div-shadow">
        <p>Vous pouvez nous envoyer un message en remplissant le formulaire ci-dessous :</p>
        <form action="submit_contact.php" method="post">
            <div class="div-form">
                <label for="lastName">Nom :</label>
                <input type="text" id="lastName" name="lastName" required>
            </div>
            <div class="div-form">
                <label for="firstName">Prénom :</label>
                <input type="text" id="firstName" name="firstName" required>
            </div>
            <div class="div-form">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="div-form">
                <label for="object">Objet :</label>
                <input type="text" id="object" name="object" required>
            </div>
            <div class="div-form">
                <label for="message">Message :</label>
                <textarea id="message" name="message" required spellcheck="true"></textarea>
            </div>
            <div class="div-form">
                <button type="submit">Envoyer</button>
            </div>
        </form>
    </section>
</main>

<footer>
    <p>© 2023 ScrumLand. Tous droits réservés.</p>
</footer>
</body>
</html>