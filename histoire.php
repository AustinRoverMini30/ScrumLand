<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histoire de ScrumLand</title>
</head>
<body>
    <!-- En-tête -->
    <header>
        <h1>Histoire de ScrumLand</h1>
        <p>De ses origines modestes à son rôle d'innovateur technologique</p>
        <nav>
            <a href="index.html">Accueil</a> | 
            <a href="#fondation">Fondation</a> | 
            <a href="#guerre-froide">Guerre Froide</a> | 
            <a href="#futur">Vers le Futur</a> | 
            <a href="contact.html">Contact</a>
        </nav>
    </header>

    <!-- Section Fondation -->
    <section id="fondation">
        <h2>Les Origines : Un Petit Village en Bois</h2>
        <p>
            La ville de <strong>ScrumLand</strong> a vu le jour en <strong>1950</strong>, fondée sur les rives d’un lac aux eaux cristallines. À cette époque, le village était principalement constitué de petites maisons en bois, habitées par des familles de pêcheurs et d’artisans.
        </p>
        <p>
            Le lac jouait un rôle central dans la vie des habitants. Il fournissait des ressources essentielles et servait de lieu de rassemblement. En été, les habitants s’y retrouvaient pour célébrer des fêtes locales et organiser des marchés saisonniers.
        </p>
        <img src="Assets/Images/lac-historique.jpg" alt="Vue historique du lac de ScrumLand" width="600">
    </section>

    <!-- Section Guerre Froide -->
    <section id="guerre-froide">
        <h2>La Guerre Froide : Un Tournant Technologique</h2>
        <p>
            Pendant la <strong>Guerre Froide</strong>, ScrumLand prit un tournant majeur en devenant un centre stratégique de recherche technologique. Les dirigeants locaux investirent massivement dans :
        </p>
        <ul>
            <li>La construction de <strong>laboratoires de pointe</strong> dédiés à l’informatique.</li>
            <li>Le développement des premières <em>méthodes agiles</em>, ancêtres de la célèbre méthodologie Scrum.</li>
            <li>L'accueil de <strong>scientifiques et ingénieurs</strong> du monde entier pour des projets collaboratifs.</li>
        </ul>
        <p>
            Durant cette période, le village se transforma en une petite ville moderne. Les premières équipes de recherche travaillaient en cycles courts et itératifs, posant les bases du travail collaboratif qui deviendra plus tard la **méthode Scrum**.
        </p>
        <blockquote>
            "<em>ScrumLand a été le berceau de la collaboration agile avant même que le monde ne la découvre</em>."  
            <br>– Un chercheur de l'époque.
        </blockquote>
        <img src="Assets/Images/laboratoire-guerre-froide.jpg" alt="Laboratoire technologique" width="600">
    </section>

    <!-- Section Vers le Futur -->
    <section id="futur">
        <h2>ScrumLand Aujourd'hui : Une Ville Tournée Vers l'Avenir</h2>
        <p>
            Grâce à son héritage technologique et son esprit novateur, ScrumLand est aujourd’hui reconnue comme une **ville futuriste et écologique**.
        </p>
        <h3>Ses axes de développement :</h3>
        <ol>
            <li><strong>Technologie :</strong> Promotion des nouvelles technologies telles que la **cybersécurité** et l’**intelligence artificielle**.</li>
            <li><strong>Éducation :</strong> Création de programmes de **bourses** pour les étudiants en informatique.</li>
            <li><strong>Écologie :</strong> Conservation du lac, développement des **énergies renouvelables** et promotion d’un **style de vie durable**.</li>
        </ol>
        <p>
            Chaque année, ScrumLand accueille des festivals dédiés à la technologie, aux arts et à l’environnement, rassemblant des visiteurs du monde entier.
        </p>
        <img src="Assets/Images/scrumland-futur.jpg" alt="Ville moderne et futuriste" width="600">
    </section>

    <!-- Témoignages -->
    <section id="temoignages">
        <h2>Ce qu'en disent les habitants</h2>
        <p>Découvrez ce que pensent les habitants de ScrumLand :</p>
        <ul>
            <li>🗣️ <em>"ScrumLand est un modèle pour le futur. La technologie et la nature y coexistent en parfaite harmonie."</em> – Lucas M.</li>
            <li>🗣️ <em>"C’est incroyable de voir comment notre petite ville est devenue un centre d’innovation mondial."</em> – Isabelle R.</li>
        </ul>
    </section>

    <!-- Pied de page -->
    <div id="footer"></div>

    <!-- Script pour importer le footer -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch("footer.html")
                .then(response => response.text())
                .then(data => {
                    document.getElementById("footer").innerHTML = data;
                })
                .catch(error => console.error("Erreur de chargement du footer :", error));
        });
    </script>
</body>
</html>
