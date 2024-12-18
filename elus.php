<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des élus municipaux</title>
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/listeElu.css">
</head>
<body>
<?php require 'Assets/CSS/NavBar.php'; ?>

<main>
<section class="elus">
        <?php

        include 'php/model.php';

        $db = new Model();

        // Récupération des données des élus
        $elus = $db->getElus();

        // Affichage des élus
        foreach ($elus as $elu) {
            echo "<div class='elu'>";
            echo "<img src='{$elu['path_elu_img']}' alt='Photo de {$elu['pren_elu']} {$elu['nom_elu']}'>";
            echo "<h2>{$elu['pren_elu']} {$elu['nom_elu']}</h2>";
            echo "<p>{$elu['resp_elu']}</p>";
            echo "</div>";
        }
        ?>
    </section>
</main>

<script>
    const canvas = document.getElementById('canvas');
    const ctx = canvas.getContext('2d');
    canvas.width = document.getElementById('header').clientWidth;
    canvas.height = document.getElementById('header').clientHeight;

    const points = [];
    const numPoints = 200;
    const maxDistance = 70;

    class Point {
        constructor(x, y, isMouse = false) {
            this.x = x;
            this.y = y;
            this.vx = Math.random() * 2 - 1;
            this.vy = Math.random() * 2 - 1;
            this.isMouse = isMouse;
            this.radius = isMouse ? 2 : Math.random() * 3 + 1;
        }

        update() {
            if (!this.isMouse) {
                this.x += this.vx;
                this.y += this.vy;

                if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
            }
        }

        draw() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
            ctx.fill();
        }
    }

    function init() {
        for (let i = 0; i < numPoints; i++) {
            points.push(new Point(Math.random() * canvas.width, Math.random() * canvas.height));
        }
        points.push(new Point(0, 0, true));
    }

    function animate() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        for (let i = 0; i < points.length; i++) {
            points[i].update();
            points[i].draw();

            for (let j = i + 1; j < points.length; j++) {
                const dx = points[i].x - points[j].x;
                const dy = points[i].y - points[j].y;
                const distance = Math.sqrt(dx * dx + dy * dy);

                if (distance < maxDistance) {
                    ctx.beginPath();
                    ctx.moveTo(points[i].x, points[i].y);
                    ctx.lineTo(points[j].x, points[j].y);
                    ctx.stroke();
                }
            }
        }

        requestAnimationFrame(animate);
    }

    canvas.addEventListener('mousemove', (event) => {
        const rect = canvas.getBoundingClientRect();
        points[points.length - 1].x = event.clientX - rect.left;
        points[points.length - 1].y = event.clientY - rect.top;
    });

    init();
    animate();
</script>

<?php include 'footer.php'; ?>

</body>
</html>