<?php    
    $lstEvent = $model->getActualite();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Assets/CSS/actualite.css">
    <script src="Assets/JS/actualite.js" defer></script>
</head>
<body>
<div class="carousel-container">
    <div id="listeActualite">
        <?php foreach ($lstEvent as $event){?>
            
            <div class="actualite">
                <h1><?php echo $event['nom_actu']; ?></h1>
                <p><?php echo $event['desc_actu']; ?></p>
                <img src="<?php echo $event['path_act_img']?>" alt="img">
                <p><?php echo $event['date_actu']; ?></p>
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