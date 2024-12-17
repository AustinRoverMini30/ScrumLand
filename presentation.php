<?php
include 'php/model.php';
$model=new Model();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenue à ScrumLand</title>
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/presentation.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header id="header">
        <canvas id="canvas"></canvas>
        <h1>Bienvenue à ScrumLand 🌳🏙️</h1>
        <p>Une ville où modernité, nature et technologie s’harmonisent pour bâtir le futur.</p>
        <nav>
            <a href="#geographie">Situation Géographique</a> | 
            <a href="#demographie">Démographie</a> | 
            <a href="#politique">Gouvernance</a> | 
            <a href="#ecologie">Écologie</a> | 
            <a href="#technologie">Technologie</a> | 
            <a href="#culture">Culture</a>
        </nav>
    </header>

    <!-- Section Situation Géographique -->
<section id="geographie">
    <h2>Situation Géographique 🌊</h2>
    <p>
        Située dans le <strong>sud ensoleillé de la France</strong>, ScrumLand est une ville qui combine harmonieusement paysages naturels et modernité urbaine. Nichée entre les majestueuses montagnes verdoyantes des Alpes et les rivages de la mer Méditerranée, elle offre un cadre exceptionnel pour les amoureux de la nature et des activités en plein air.
    </p>

    <h3>Caractéristiques géographiques :</h3>
    <ul>
        <li><strong>Lac cristallin :</strong> D’une superficie de <strong>12 km²</strong>, ce lac d’eau douce est classé au patrimoine naturel régional pour sa pureté exceptionnelle et ses écosystèmes aquatiques uniques. Ses rives accueillent chaque année des milliers de visiteurs pour se ressourcer en pleine nature.</li>
        <li><strong>Forêts protégées :</strong> Les vastes étendues forestières environnantes sont le refuge d’une faune et flore remarquables. On y trouve des espèces rares telles que les <em>lynx boréaux</em>, des cerfs majestueux, et une multitude d’oiseaux migrateurs. 🦌🦅</li>
        <li><strong>Climat méditerranéen :</strong> Avec <strong>280 jours de soleil</strong> par an, ScrumLand bénéficie d’un climat idéal, caractérisé par des étés chauds et des hivers doux. Ce climat propice favorise une agriculture locale florissante et attire les touristes tout au long de l’année.</li>
    </ul>

    <h3>Topographie et paysages naturels :</h3>
    <p>
        Le relief de ScrumLand est marqué par des collines douces et des vallées fertiles, traversées par des rivières serpentines qui se jettent dans le lac principal. Les montagnes environnantes offrent des paysages époustouflants, notamment en hiver lorsque les sommets sont enneigés, formant un contraste saisissant avec les zones verdoyantes des plaines.
    </p>

    <h3>Activités en plein air 🌿🚴‍♂️</h3>
    <p>
        ScrumLand est un véritable paradis pour les amateurs d’activités de plein air. La ville met en avant des infrastructures respectueuses de l’environnement pour permettre à tous de profiter de sa nature préservée :
    </p>
    <ul>
        <li><strong>Randonnées pédestres et VTT :</strong> Plus de <strong>100 km de sentiers balisés</strong> serpentent à travers forêts, montagnes et rives, menant à des <em>belvédères panoramiques</em> offrant des vues à couper le souffle sur le lac et la vallée environnante.</li>
        <li><strong>Sports nautiques :</strong> Le lac est idéal pour des activités comme la <em>planche à voile</em>, le <em>kayak</em>, et le <em>paddle</em>. Pour les amateurs de pêche, des zones spécifiques permettent une <strong>pêche responsable</strong> respectant la faune aquatique.</li>
        <li><strong>Camping écologique :</strong> Plusieurs aires de camping équipées d’<strong>installations solaires</strong> et de zones de recyclage permettent de séjourner au cœur de la nature tout en minimisant l’empreinte environnementale.</li>
        <li><strong>Observation de la faune :</strong> Des tours d’observation ont été installées dans les réserves naturelles, permettant aux visiteurs d’admirer les animaux sans les déranger.</li>
    </ul>
    <h3>Impact économique et touristique 💼🌍 :</h3>
    <p>
        La richesse naturelle de ScrumLand en fait une destination touristique incontournable :
    </p>
    <ul>
        <li><strong>Écotourisme :</strong> Les visiteurs affluent pour profiter des activités nature tout en respectant l’environnement.</li>
        <li><strong>Activités saisonnières :</strong> En hiver, les montagnes accueillent des stations de ski familiales, tandis qu’en été, les berges du lac se transforment en plages animées.</li>
        <li><strong>Produits locaux :</strong> L’agriculture biologique autour de ScrumLand permet de proposer des produits frais tels que miel, fromages, et vins locaux, prisés par les habitants et les touristes.</li>
    </ul>

    <?php $model->getImages(1); ?>

    <p>
        Grâce à son emplacement stratégique entre mer et montagne, ScrumLand est un véritable joyau géographique où chaque saison apporte son lot d’opportunités pour les résidents comme pour les visiteurs. Que vous soyez amateur de détente, de sport ou de découverte, ScrumLand vous promet des moments inoubliables dans un cadre exceptionnel.
    </p>
</section>


    <!-- Section Démographie et Structure -->
<section id="demographie">
    <h2>Démographie et Urbanisme 🏢</h2>
    <p>
        ScrumLand est une ville en pleine expansion, habitée par une population jeune, dynamique et multiculturelle. Avec <strong>25 000 citoyens</strong>, elle se démarque par sa croissance démographique maîtrisée et une qualité de vie exceptionnelle.
    </p>

    <h3>Profil démographique 📊 :</h3>
    <ul>
        <li><strong>42% de jeunes adultes</strong> entre 18 et 35 ans, composés principalement d’étudiants, de jeunes professionnels et d'entrepreneurs.</li>
        <li>Une <strong>diversité culturelle</strong> remarquable avec plus de <strong>30 nationalités représentées</strong>, favorisant un esprit de tolérance et d’innovation.</li>
        <li>Un <strong>taux d’emploi élevé de 96%</strong>, porté par les secteurs technologique, touristique et écologique.</li>
        <li>Une répartition équilibrée entre familles, retraités et nouveaux arrivants, grâce à une politique d'accueil inclusive.</li>
    </ul>

    <h3>Structure urbaine et planification 🏙️ :</h3>
    <p>
        ScrumLand est conçue pour être une ville du <strong>futur durable</strong> avec une urbanisation harmonieuse, respectueuse de l'environnement et des besoins de ses citoyens :
    </p>
    <ul>
        <li><strong>Zones piétonnes et vélo-friendly 🚲 :</strong> Chaque quartier est relié par des sentiers piétons et pistes cyclables sécurisées, réduisant la dépendance aux voitures.</li>
        <li><strong>Logements écoresponsables :</strong> Les immeubles résidentiels utilisent des <em>matériaux durables</em> avec des toitures végétalisées, panneaux solaires et systèmes de récupération d'eau de pluie.</li>
        <li><strong>Jardins partagés et espaces verts :</strong> Chaque quartier dispose de <em>jardins communautaires</em> favorisant l’agriculture urbaine et le lien social entre les habitants.</li>
        <li><strong>Mobilité verte :</strong> Un réseau de <em>tramways électriques</em> et de <em>bus à hydrogène</em> relie les principaux points de la ville pour un transport écologique et efficace.</li>
    </ul>

    <h3>Les quartiers de ScrumLand 🏡 :</h3>
    <p>
        ScrumLand est organisée en <strong>quartiers thématiques</strong>, chacun avec une identité unique et des services adaptés :
    </p>
    <ul>
        <li><strong>Quartier Technologique :</strong> Un hub d’innovation regroupant startups, espaces de coworking et laboratoires de recherche.</li>
        <li><strong>Quartier Résidentiel Vert :</strong> Conçu pour les familles, avec des parcs, écoles et logements écologiques.</li>
        <li><strong>Quartier Culturel :</strong> Animé par des théâtres, musées interactifs et bibliothèques modernes.</li>
        <li><strong>Quartier Historique :</strong> Préservation des bâtiments anciens avec des rénovations modernes respectueuses du patrimoine.</li>
        <li><strong>Quartier Écologique :</strong> Projet pilote incluant des habitations autonomes en énergie et zéro déchet.</li>
    </ul>

    <h3>Services urbains modernes 🚍 :</h3>
    <p>
        ScrumLand est équipée d’infrastructures modernes pour garantir une haute qualité de vie à ses citoyens :
    </p>
    <ul>
        <li><strong>Centres de santé connectés :</strong> Des hôpitaux et cliniques utilisant des technologies intelligentes pour des soins rapides et efficaces.</li>
        <li><strong>Éducation de pointe :</strong> Des écoles et universités dotées d’équipements numériques, offrant des programmes en écologie, technologie et innovation.</li>
        <li><strong>Inclusion sociale :</strong> Programmes d’aide pour les familles, jeunes diplômés et retraités, incluant des logements à loyer modéré.</li>
        <li><strong>Smart City :</strong> Des systèmes de gestion des déchets automatisés et un éclairage urbain intelligent réduisant la consommation énergétique.</li>
    </ul>

    <h3>Initiatives communautaires 🤝 :</h3>
    <p>
        ScrumLand met en place des projets pour renforcer la cohésion sociale et favoriser un environnement inclusif :
    </p>
    <ul>
        <li>Des <strong>marchés locaux</strong> chaque semaine, promouvant les produits régionaux et l’économie circulaire.</li>
        <li>Des événements communautaires comme les <strong>journées du voisinage</strong> pour renforcer les liens entre résidents.</li>
        <li>Des programmes d’insertion professionnelle pour les jeunes et les personnes éloignées de l’emploi.</li>
        <li>Un <strong>réseau de bibliothèques connectées</strong> offrant des livres physiques et numériques pour tous.</li>
    </ul>

    <img src="Assets/Images/ville-structure.jpg" alt="Vue de la ville moderne de ScrumLand" width="100%">

    <p>
        ScrumLand est ainsi une ville <strong>équilibrée et dynamique</strong>, où modernité, écologie et bien-être des habitants sont au cœur des priorités. Grâce à ses infrastructures innovantes et ses initiatives inclusives, elle attire chaque année de nouveaux résidents séduits par son cadre de vie exceptionnel.
    </p>
</section>


   <!-- Section Politique et Gouvernance -->
<section id="politique">
    <h2>Politique et Gouvernance 🏛️</h2>
    <p>
        ScrumLand est dirigée par une équipe municipale visionnaire, menée par le maire actuel, <strong>Julien Moreau</strong>, connu pour son engagement en faveur d'une ville durable, connectée et inclusive. Avec une gouvernance axée sur la <strong>transparence</strong>, l'<strong>innovation</strong> et la <strong>participation citoyenne</strong>, ScrumLand met en œuvre des politiques progressistes pour améliorer la qualité de vie de ses habitants.
    </p>

    <h3>Principes directeurs de la gouvernance :</h3>
    <ul>
        <li><strong>Transparence démocratique :</strong> Les assemblées municipales sont <em>diffusées en direct</em> et accessibles en replay sur la plateforme numérique officielle de la ville.</li>
        <li><strong>Inclusion sociale :</strong> Des projets participatifs sont proposés pour inclure toutes les tranches d'âge, des jeunes enfants aux seniors, dans la construction de la ville.</li>
        <li><strong>Innovation sociale et économique :</strong> Des aides financières sont disponibles pour les étudiants, travailleurs indépendants et startups, afin de stimuler l’économie locale.</li>
    </ul>

    <h3>Projets en cours 🛠️ :</h3>
    <p>
        Pour concrétiser sa vision d’une ville moderne et résiliente, ScrumLand développe actuellement plusieurs projets phares :
    </p>
    <ul>
        <li>
            <strong>Centre de réemploi et recyclage des déchets électroniques 🔄 :</strong> 
            Situé au cœur du quartier écologique, ce centre favorise la récupération et le recyclage des appareils électroniques. Les citoyens peuvent y déposer leurs anciens équipements, qui sont réparés ou transformés pour être réutilisés dans les écoles et associations locales.
        </li>
        <li>
            <strong>Modernisation de l’éclairage public 💡 :</strong> 
            La rénovation complète des systèmes d’éclairage urbain est en cours avec l’installation de <strong>lampadaires LED intelligents</strong>. Ces dispositifs s’ajustent automatiquement en fonction de la luminosité ambiante et réduisent la consommation énergétique de 45%.
        </li>
        <li>
            <strong>Application "Smart ScrumLand" 📱 :</strong>
            Une nouvelle application mobile permet aux citoyens de signaler en temps réel les problèmes urbains (voirie, éclairage défectueux, déchets abandonnés). Chaque signalement est transmis directement aux services municipaux pour une résolution rapide.
        </li>
        <li>
            <strong>Parc urbain citoyen 🌳 :</strong> 
            L’aménagement d’un parc communautaire entièrement conçu avec les idées des citoyens. Des zones de détente, des terrains de sport et un potager collectif y seront installés.
        </li>
    </ul>

    <h3>Participation citoyenne 🤝 :</h3>
    <p>
        ScrumLand a mis en place une plateforme interactive pour permettre aux habitants de prendre part activement aux décisions de la ville :
    </p>
    <ul>
        <li><strong>Budgets participatifs :</strong> Les citoyens peuvent proposer et voter pour des projets financés par la municipalité.</li>
        <li><strong>Consultations publiques :</strong> Les habitants sont invités à donner leur avis sur les grands projets d’infrastructure.</li>
        <li><strong>Ateliers citoyens :</strong> Des rencontres régulières sont organisées pour co-construire des solutions innovantes sur des thèmes comme la mobilité, l'écologie et la culture.</li>
    </ul>

    <h3>Innovations numériques et administratives 💻 :</h3>
    <p>
        La mairie de ScrumLand est pionnière dans l’utilisation des technologies numériques pour simplifier la vie des citoyens :
    </p>
    <ul>
        <li><strong>Portail numérique de la mairie :</strong> Accès en ligne aux démarches administratives : demandes de permis, inscriptions scolaires, et consultations d'actes officiels.</li>
        <li><strong>Blockchain citoyenne :</strong> Une innovation unique pour garantir la transparence des votes municipaux.</li>
        <li><strong>Intelligence artificielle :</strong> Utilisée pour optimiser les transports publics, gérer les déchets et prévoir les besoins en énergie.</li>
    </ul>

    <img src="Assets/Images/mairie.jpg" alt="Hôtel de ville de ScrumLand" width="100%">

    <h3>Objectifs à long terme 🎯 :</h3>
    <p>
        ScrumLand s’est fixé des objectifs ambitieux pour les prochaines décennies afin de devenir une référence mondiale en matière de gouvernance durable :
    </p>
    <ul>
        <li><strong>Neutralité carbone d’ici 2030 :</strong> Grâce à des politiques énergétiques innovantes et des projets de verdissement urbain.</li>
        <li><strong>Zéro déchet d’ici 2040 :</strong> Mise en place d’un programme de tri intelligent et de réduction à la source des déchets.</li>
        <li><strong>Ville connectée et autonome :</strong> Développement d’une <em>smart city</em> entièrement connectée pour améliorer l'efficacité des services publics.</li>
    </ul>

    <p>
        À travers ces initiatives, ScrumLand s’impose comme un modèle de <strong>gouvernance moderne, transparente et innovante</strong>, plaçant les citoyens au cœur des décisions pour un avenir durable et solidaire.
    </p>
</section>


   <!-- Section Écologie et Développement Durable -->
<section id="ecologie">
    <h2>Écologie et Développement Durable 🌱</h2>
    <p>
        ScrumLand s’engage résolument dans une transition écologique ambitieuse en plaçant la nature et le développement durable au cœur de ses priorités. Grâce à une gouvernance visionnaire et des initiatives locales innovantes, la ville aspire à devenir une référence mondiale en matière d’<strong>écologie urbaine</strong>.
    </p>

    <h3>Infrastructures écologiques 🏙️ :</h3>
    <ul>
        <li>
            <strong>Réseau de parcs urbains connectés :</strong> 
            ScrumLand dispose de plus de <strong>15 parcs urbains</strong>, interconnectés par des corridors écologiques. Ces espaces verts favorisent la biodiversité et permettent aux citoyens de profiter d’environnements naturels sans quitter la ville.
        </li>
        <li>
            <strong>Fermes solaires flottantes ☀️ :</strong> 
            Situées sur le lac, ces fermes solaires produisent actuellement <strong>70% de l’électricité</strong> consommée par la ville. Cette initiative réduit significativement l’empreinte carbone de ScrumLand tout en optimisant l’utilisation des surfaces aquatiques.
        </li>
        <li>
            <strong>Mobilité verte :</strong> 
            Un réseau de transports 100% écologiques composé de <em>bus à hydrogène</em>, de <em>tramways électriques</em> et de bornes de recharge solaire pour véhicules électriques.
        </li>
        <li>
            <strong>Gestion innovante des déchets 🔄 :</strong>
            ScrumLand a mis en place un système de <strong>tri automatisé</strong> et de <strong>compostage collectif</strong> permettant de réduire les déchets envoyés en décharge de 65%. Des zones de collecte intelligentes indiquent en temps réel leur capacité pour optimiser les tournées.
        </li>
    </ul>

    <h3>Préservation de la faune et de la flore 🌳🦌 :</h3>
    <p>
        ScrumLand s’investit dans la protection et la restauration de ses écosystèmes locaux :
    </p>
    <ul>
        <li>
            <strong>Réintroduction d’espèces menacées :</strong> 
            Des programmes collaboratifs avec des biologistes ont permis la réintroduction réussie du <em>lynx boréal</em> et de plusieurs espèces d’oiseaux migrateurs dans les réserves naturelles.
        </li>
        <li>
            <strong>Jardin botanique 🌼 :</strong> 
            Le jardin botanique de ScrumLand abrite plus de <strong>500 espèces rares</strong> de plantes et fleurs, certaines menacées à l’échelle mondiale. Ce site est également un espace éducatif où des ateliers de sensibilisation sont organisés pour les écoliers.
        </li>
        <li>
            <strong>Réserves naturelles :</strong> 
            Trois réserves naturelles protégées permettent d’observer des animaux sauvages tout en respectant leur habitat naturel. Des sentiers d’observation balisés ont été aménagés pour minimiser les perturbations humaines.
        </li>
        <li>
            <strong>Verdissement urbain :</strong> 
            Les toitures végétalisées, jardins partagés et murs végétaux contribuent à l’amélioration de la qualité de l’air et à la réduction des îlots de chaleur urbains.
        </li>
    </ul>

    <h3>Innovations écologiques 💡 :</h3>
    <ul>
        <li>
            <strong>Bâtiments à énergie positive :</strong> 
            Les nouvelles constructions sont conçues pour produire plus d’énergie qu’elles n’en consomment, grâce à des panneaux photovoltaïques et des systèmes de récupération d'eau de pluie.
        </li>
        <li>
            <strong>Smart Grids (réseaux intelligents) :</strong> 
            Un système intégré gère en temps réel la consommation et la production d’énergie afin d’éviter tout gaspillage.
        </li>
        <li>
            <strong>Capteurs de qualité de l’air :</strong> 
            Installés dans toute la ville, ces capteurs surveillent en continu la pollution atmosphérique et permettent des interventions rapides pour maintenir un air sain.
        </li>
        <li>
            <strong>Éducation et sensibilisation :</strong> 
            Des programmes éducatifs dans les écoles et des événements tels que la <em>Journée Verte de ScrumLand</em> sensibilisent les citoyens à l’importance de la préservation de l’environnement.
        </li>
    </ul>

    <h3>Objectifs écologiques à long terme 🎯 :</h3>
    <p>
        ScrumLand s’est fixé des objectifs concrets pour un avenir durable :
    </p>
    <ul>
        <li><strong>Neutralité carbone d’ici 2030 :</strong> Réduction progressive des émissions grâce à des énergies renouvelables et des transports propres.</li>
        <li><strong>Zéro déchet d’ici 2040 :</strong> Optimisation du recyclage et du compostage pour éliminer complètement les déchets non réutilisables.</li>
        <li><strong>Développement de la biodiversité :</strong> Augmentation des espaces verts et création de nouvelles réserves écologiques pour protéger la faune et la flore.</li>
    </ul>

    <img src="Assets/Images/jardins-ecologiques.jpg" alt="Vue des parcs solaires et écologiques" width="100%">

    <p>
        ScrumLand s’impose ainsi comme une ville pionnière en matière d’<strong>innovation écologique</strong>. Grâce à des projets ambitieux et une participation citoyenne active, elle démontre que développement urbain et protection de l’environnement peuvent aller de pair. 🌍💚
    </p>
</section>


   <!-- Section Technologie et Innovation -->
<section id="technologie">
    <h2>Technologie et Innovation 💼🚀</h2>
    <p>
        À ScrumLand, la technologie est au cœur du développement économique, social et écologique. La ville s’impose comme un véritable <strong>hub technologique</strong>, attirant entreprises, chercheurs et entrepreneurs du monde entier grâce à des infrastructures modernes et une vision tournée vers l’avenir.
    </p>

    <h3>Le Pôle Technologique 📡 :</h3>
    <p>
        Le **Technopôle de ScrumLand** est un quartier dédié à l’innovation. Ce pôle d’excellence regroupe :
    </p>
    <ul>
        <li><strong>Startups innovantes :</strong> Plus de <em>50 jeunes entreprises</em> spécialisées dans l’IA, la cybersécurité, et les technologies vertes bénéficient d’incubateurs locaux pour développer leurs projets.</li>
        <li><strong>Espaces de coworking connectés :</strong> Des lieux collaboratifs équipés en haut débit et outils numériques pour favoriser la créativité et le travail d’équipe.</li>
        <li><strong>Centres de recherche :</strong> Des laboratoires spécialisés en <strong>robotique, énergies renouvelables</strong> et <strong>systèmes intelligents</strong> travaillent sur des solutions concrètes pour améliorer la vie quotidienne.</li>
        <li><strong>Partenariats internationaux :</strong> Des collaborations avec des entreprises et universités du monde entier permettent d’attirer les meilleurs talents.</li>
    </ul>

    <h3>Projets technologiques en cours 🚀 :</h3>
    <p>
        ScrumLand investit massivement dans des projets d’innovation pour construire une ville intelligente et durable :
    </p>
    <ul>
        <li>
            <strong>Réseau "Smart City" :</strong> 
            Déploiement de capteurs intelligents pour la gestion automatisée de la circulation, de l’éclairage et des déchets, optimisant les ressources tout en réduisant l’empreinte carbone.
        </li>
        <li>
            <strong>Laboratoires de robotique :</strong> 
            Conception de <em>robots urbains</em> pour l’entretien des espaces publics, la livraison automatisée et l'assistance aux personnes âgées.
        </li>
        <li>
            <strong>Énergies propres :</strong> 
            Développement de micro-centrales solaires intelligentes et de batteries de stockage innovantes pour alimenter la ville en électricité 100% verte.
        </li>
        <li>
            <strong>Transport autonome :</strong> 
            Mise en place d’un réseau de <em>navettes électriques autonomes</em> pour faciliter les déplacements tout en minimisant la pollution.
        </li>
    </ul>

    <h3>Éducation et inclusion numérique 📚💻 :</h3>
    <p>
        La technologie joue également un rôle central dans l’éducation et l’inclusion sociale à ScrumLand :
    </p>
    <ul>
        <li>
            <strong>Campus numérique :</strong> 
            Création d’une université technologique proposant des cursus en <em>intelligence artificielle, programmation, robotique</em> et <em>cybersécurité</em>.
        </li>
        <li>
            <strong>Écoles connectées :</strong> 
            Toutes les écoles sont équipées de <em>tableaux interactifs</em> et de <em>matériel informatique</em> pour favoriser l’apprentissage numérique dès le plus jeune âge.
        </li>
        <li>
            <strong>Formations gratuites :</strong> 
            Des ateliers numériques pour les seniors et les personnes éloignées du numérique sont organisés dans les bibliothèques et maisons de quartier.
        </li>
        <li>
            <strong>Hackathons et concours tech :</strong> 
            Des compétitions annuelles encouragent les étudiants et jeunes entrepreneurs à développer des projets innovants pour la ville.
        </li>
    </ul>

    <h3>Événements technologiques annuels 💡 :</h3>
    <p>
        ScrumLand accueille chaque année des événements majeurs qui rassemblent chercheurs, entreprises et passionnés de technologie :
    </p>
    <ul>
        <li><strong>Le Salon de l’Innovation Verte :</strong> Présentation des dernières technologies en énergies renouvelables et solutions écologiques.</li>
        <li><strong>ScrumLand Tech Week :</strong> Une semaine de conférences, d’ateliers et de démonstrations sur l’IA, la robotique et la ville connectée.</li>
        <li><strong>Startup Demo Day :</strong> Les jeunes entreprises locales présentent leurs innovations devant des investisseurs et experts du secteur.</li>
        <li><strong>Festival des Jeux Numériques :</strong> Un événement dédié aux jeux vidéo et à la réalité virtuelle avec des compétitions et ateliers.</li>
    </ul>

    <h3>Objectifs technologiques à long terme 🎯 :</h3>
    <ul>
        <li><strong>100% de couverture numérique :</strong> Offrir un accès Internet haut débit à tous les habitants, y compris dans les zones rurales.</li>
        <li><strong>Zéro blackout énergétique :</strong> Assurer une production d’énergie autonome et renouvelable grâce aux technologies intelligentes.</li>
        <li><strong>Transport 100% autonome d’ici 2035 :</strong> Faire de ScrumLand un modèle mondial pour la mobilité durable et connectée.</li>
    </ul>

    <img src="Assets/Images/technopole.jpg" alt="Technopole ScrumLand" width="100%">

    <p>
        ScrumLand est ainsi un exemple de ville où l’<strong>innovation technologique</strong> crée de nouvelles opportunités économiques, améliore le quotidien des citoyens et contribue activement à la transition écologique. Grâce à ses infrastructures modernes et ses projets ambitieux, elle attire les talents et entreprises du futur. 💼🌍🚀
    </p>
</section>


    <!-- Section Culture et Loisirs -->
<section id="culture">
    <h2>Culture et Loisirs 🎭🎉</h2>
    <p>
        ScrumLand est une ville où la culture et les loisirs occupent une place centrale, offrant aux habitants et aux visiteurs une expérience riche et variée. Alliant tradition, modernité et innovation, la ville propose un large éventail d'activités pour tous les âges et toutes les passions.
    </p>

    <h3>Infrastructures culturelles 🏛️ :</h3>
    <ul>
        <li>
            <strong>Musée interactif de ScrumLand 🖼️ :</strong> 
            Un musée moderne où la <em>réalité augmentée</em> et les <em>hologrammes</em> permettent de revivre les moments historiques marquants de la ville. Une salle dédiée présente les projets technologiques innovants ayant façonné ScrumLand.
        </li>
        <li>
            <strong>Bibliothèques connectées 📚 :</strong> 
            Dotées de collections numériques et physiques, les bibliothèques offrent des espaces de lecture immersifs ainsi que des ateliers numériques pour les jeunes et les seniors.
        </li>
        <li>
            <strong>Théâtre et salle de spectacles 🎭 :</strong> 
            Le théâtre municipal accueille chaque semaine des représentations locales et internationales, allant des pièces classiques aux spectacles modernes mêlant danse, musique et arts visuels.
        </li>
        <li>
            <strong>Parc d'attractions éco-responsable 🎢 :</strong> 
            Alimenté par des <em>énergies renouvelables</em>, ce parc propose des manèges innovants et des attractions interactives tout en sensibilisant les visiteurs à la préservation de l'environnement.
        </li>
    </ul>

    <h3>Événements culturels annuels 📅 :</h3>
    <p>
        ScrumLand est reconnue pour ses événements culturels qui rythment l’année et attirent des milliers de visiteurs :
    </p>
    <ul>
        <li>
            <strong>Concerts gratuits sur les berges du lac 🎶 :</strong> 
            Chaque week-end, des artistes locaux et nationaux se produisent dans un cadre idyllique, offrant des soirées musicales accessibles à tous.
        </li>
        <li>
            <strong>Festival International des Arts Numériques 💻 :</strong> 
            Un événement unique où les artistes présentent des œuvres interactives mêlant réalité virtuelle, intelligence artificielle et art traditionnel.
        </li>
        <li>
            <strong>Marché artisanal et gastronomique 🍽️ :</strong> 
            Un marché mensuel mettant en avant les produits locaux, les artisans et la gastronomie durable de la région.
        </li>
        <li>
            <strong>Ciné Plein Air 🎬 :</strong> 
            Durant l'été, des projections de films sont organisées au bord du lac et dans les parcs, offrant une expérience conviviale sous les étoiles.
        </li>
        <li>
            <strong>Festival du Patrimoine et des Traditions 🏰 :</strong> 
            Célébration des racines historiques de ScrumLand à travers des expositions, des reconstitutions historiques et des spectacles de rue.
        </li>
    </ul>

    <h3>Initiatives pour les jeunes 🎨 :</h3>
    <p>
        ScrumLand accorde une attention particulière à l'épanouissement culturel des jeunes :
    </p>
    <ul>
        <li>
            <strong>Centres d’arts créatifs :</strong> 
            Des ateliers de peinture, sculpture, musique et danse sont proposés dans des espaces dédiés pour encourager l’expression artistique.
        </li>
        <li>
            <strong>Hackathons culturels :</strong> 
            Des compétitions pour développer des projets numériques alliant technologie et culture, comme des applications de réalité augmentée pour les musées.
        </li>
        <li>
            <strong>Clubs de lecture et ciné-clubs :</strong> 
            Des activités organisées dans les bibliothèques pour promouvoir la lecture et la découverte du 7ème art.
        </li>
    </ul>

    <h3>Innovation culturelle 🚀 :</h3>
    <ul>
        <li>
            <strong>Réalité virtuelle et augmentée :</strong> 
            Déploiement de technologies immersives dans les musées et salles d'expositions pour rendre la culture interactive et accessible à tous.
        </li>
        <li>
            <strong>Applications culturelles mobiles 📱 :</strong> 
            Des applications dédiées permettent d’explorer les événements, les œuvres d’art et les lieux culturels de ScrumLand grâce à des visites guidées interactives.
        </li>
        <li>
            <strong>Art urbain et expositions éphémères 🎨 :</strong> 
            Les rues de ScrumLand accueillent régulièrement des œuvres d’art urbain et des expositions temporaires pour dynamiser les espaces publics.
        </li>
    </ul>

    <h3>Impact sur la communauté 💬 :</h3>
    <p>
        Grâce à ses nombreuses initiatives, ScrumLand favorise l’inclusion sociale, renforce le sentiment d’appartenance et encourage la créativité :
    </p>
    <ul>
        <li>Accessibilité garantie : Toutes les infrastructures culturelles sont adaptées aux personnes à mobilité réduite.</li>
        <li>Événements gratuits pour permettre à chacun de profiter de la culture.</li>
        <li>Programmes de financement pour les artistes locaux afin de promouvoir leurs talents et projets.</li>
    </ul>

    <img src="Assets/Images/festival.jpg" alt="Festival culturel à ScrumLand" width="100%">

    <p>
        ScrumLand s'impose comme une ville où la <strong>culture</strong>, les <strong>loisirs</strong> et l'<strong>innovation</strong> s’unissent pour créer une vie dynamique et inspirante. Que ce soit à travers ses événements grandioses, ses infrastructures modernes ou ses initiatives inclusives, chaque citoyen peut s’épanouir et s’enrichir culturellement. 🎭🌟
    </p>
</section>


    <!-- Pied de page -->
    <footer id="footer">
        <p>&copy; 2024 Ville de ScrumLand. Tous droits réservés.</p>
        <nav>
            <a href="#geographie">Géographie</a> | 
            <a href="#demographie">Démographie</a> | 
            <a href="#politique">Gouvernance</a> | 
            <a href="#ecologie">Écologie</a> | 
            <a href="#technologie">Technologie</a> | 
            <a href="#culture">Culture</a>
        </nav>
    </footer>
</body>
</html>
