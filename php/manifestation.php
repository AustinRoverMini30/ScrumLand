<?php    
    $lstEvent = $model->getManifestations();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/manifestation.css">
    <script src="Assets/JS/manifestation.js" defer></script>
</head>
<body>
<div class="carousel-container">
    <div id="listeManifestation">
        <?php foreach ($lstEvent as $event){?>
            
            <div class="manifestation">
                <h1><?php echo $event['nom_manif']; ?></h1>
                <p><?php echo $event['desc_manif']; ?></p>
                <img src="<?php echo $event['path_manif_img']?>" alt="img">
                <p><?php echo $event['date_manif']; ?></p>
            </div>
        <?php } ?>
    </div>
</div>

<div class="pagination">
    <button id="prevBtn" onclick="moveCarousel(-1)">←</button>
    <button id="nextBtn" onclick="moveCarousel(1)">→</button>
</div>

</body>
</html>