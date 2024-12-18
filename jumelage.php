<?php
// Données des villes jumelées
$jumelage = [
    [
        'nom' => 'Novgorod',
        'pays' => 'Russie',
        'description' => "Novgorod, une ville historique située en Russie, est célèbre pour ses monuments médiévaux et son riche patrimoine culturel."
    ],
    [
        'nom' => 'Shirakawa-go',
        'pays' => 'Japon',
        'description' => "Shirakawa-go, une charmante ville japonaise classée au patrimoine mondial, mêle traditions ancestrales et modernité technologique."
    ],
    [
        'nom' => 'Yayama',
        'pays' => 'Congo',
        'description' => "Yayama, une ville dynamique du Congo, reconnue pour sa culture locale et ses paysages naturels impressionnants."
    ]
];
?>

<body>
    <h1>Jumelage de ScrumLand</h1>
    <p>Découvrez les villes jumelées avec ScrumLand :</p>

    <ul>
        <?php foreach ($jumelage as $ville) : ?>
            <li>
                <h2><?php echo htmlspecialchars($ville['nom']); ?> (<?php echo htmlspecialchars($ville['pays']); ?>)</h2>
                <p><?php echo htmlspecialchars($ville['description']); ?></p>
            </li>
        <?php endforeach; ?>
    </ul>

    <p>Le jumelage favorise l'échange culturel et économique entre les villes partenaires, renforçant ainsi les liens internationaux.</p>
</body>

