<?php
/*
    include 'model.php';
    //$model=new Model();
    
    //$lstEvent=$model->getManifestation();

    $lstEvent=[
        ['12/12/2024','Fête de la musique','Une fête de la musique organisé sur la place centrale'],
        ['11/12/2024','1 Marché de Noël','Un marché organisé devant la salle polyvalente'],
        ['11/12/2024','2 Marché de Noël','Un marché organisé devant la salle polyvalente'],
        ['11/12/2024','3 Marché de Noël','Un marché organisé devant la salle polyvalente'],
        ['11/12/2024','4 Marché de Noël','Un marché organisé devant la salle polyvalente']];
    
    if (isset($_POST['valDepart'])){
        $valDepart=$_POST['valDepart'];
        if ($valDepart<0){
            $valDepart=count($lstEvent);
        }
    }else{
        $valDepart=0;
    }
    $limite=$valDepart+3;
    $index=$valDepart;
    ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../Assets/CSS/testActu.css">
            <title>Actualités</title>
        </head>
        <body>
        <div id='listeActualite'>
    <?php
    while ($index<$limite){
        ?>
            <div>
                <h1 id='titre'> <?php echo $lstEvent[$index%count($lstEvent)][1] ?></h1>
                <p id='titre'> <?php echo $lstEvent[$index%count($lstEvent)][2] ?></p>
                <p id='titre'> <?php echo $lstEvent[$index%count($lstEvent)][0] ?></p>
            </div>
        <?php
        $index=$index+1;
    }
    ?>
        </div>
        <div class="pagination">
            <form method="POST" class="pagination-form">
                <input type="hidden" id="valDepart" name="valDepart" value="<?php echo $valDepart - 1; ?>">
                <button type="submit"><-</button>
            </form>
            <form method="POST" class="pagination-form">
                <input type="hidden" id="valDepart" name="valDepart" value="<?php echo $valDepart + 1; ?>">
                <button type="submit">-></button>
            </form>
            
        </div>
    </body>
</html>
*/

$lstEvent = [
    ['12/12/2024', 'Fête de la musique', 'Une fête de la musique organisé sur la place centrale'],
    ['11/12/2024', '1 Marché de Noël', 'Un marché organisé devant la salle polyvalente'],
    ['11/12/2024', '2 Marché de Noël', 'Un marché organisé devant la salle polyvalente'],
    ['11/12/2024', '3 Marché de Noël', 'Un marché organisé devant la salle polyvalente'],
    ['11/12/2024', '4 Marché de Noël', 'Un marché organisé devant la salle polyvalente']
];

// Vérifie si une requête AJAX a été faite
if (isset($_POST['valDepart'])) {
    $valDepart = (int)$_POST['valDepart'];
    $limite = $valDepart + 3;
    if ($valDepart<0){
        $valDepart=count($lstEvent);
    }
    $response = [];

    while ($valDepart < $limite) {
        $response[] = $lstEvent[$valDepart%count($lstEvent)];
        $valDepart++;
    }

    echo json_encode($response);
    exit; // Terminer le script après avoir renvoyé la réponse
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/CSS/testActu.css">
    <title>Actualités</title>
</head>
<body>
<div id='listeActualite'></div>
<div class="pagination">
    <button id="prevBtn"><-</button>
    <button id="nextBtn">-></button>
</div>

<script>
    let valDepart = 0;

    function loadEvents() {
        const xhr = new XMLHttpRequest();
        xhr.open('POST', '', true); // Envoie la requête au même fichier
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function () {
            if (this.status === 200) {
                const events = JSON.parse(this.responseText);
                const listeActualite = document.getElementById('listeActualite');
                listeActualite.innerHTML = ''; // Efface les événements précédents
                events.forEach(event => {
                    listeActualite.innerHTML += `
                        <div>
                            <h1 id='titre'>${event[1]}</h1>
                            <p id='titre'>${event[2]}</p>
                            <p id='titre'>${event[0]}</p>
                        </div>
                    `;
                });
            }
        };
        xhr.send('valDepart=' + valDepart);
    }

    document.getElementById('nextBtn').addEventListener('click', function () {
        valDepart += 1; // Incrémente pour le suivant
        loadEvents();
    });

    document.getElementById('prevBtn').addEventListener('click', function () {
        if (valDepart > 0) {
            valDepart -= 1; // Décrémente pour le précédent
            loadEvents();
        }
    });

    // Charge les événements initiaux
    loadEvents();
</script>
</body>
</html>
