<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-nous</title>
    <link rel="stylesheet" href="Assets/CSS/General.css">
    <link rel="stylesheet" href="Assets/CSS/stylesContact.css">
</head>
<body>
    <!-- En-tête de la page -->
    <header id="header">
        <canvas id="canvas"></canvas>
        <h1>Contactez-nous 📞</h1>
        <p>Nous sommes là pour répondre à toutes vos questions et demandes.</p>
        <nav>
            <a href="index.php">Accueil</a> | 
            <a href="calendrier.php">Calendrier</a> | 
            <a href="histoire.php">Notre histoire</a> | 
            <a href="contact.php">Contact</a> | 
            <a href="actualites.php">Actualités</a> | 
            <a href="elus.php">Nos élus</a>
        </nav>
    </header>

    <!-- Section Informations de Contact -->
    <section class="contact-infos">
        <h2>Informations de Contact 📧</h2>
        <p>Vous avez une question ou une demande particulière ? N'hésitez pas à nous contacter !</p>
        <p><strong>Par téléphone :</strong> 06 12 50 00 12</p>
        <p><strong>Par mail :</strong> <a href="mailto:contact@scrumland.fr">contact@scrumland.fr</a></p>
    </section>

    <!-- Section Formulaire de Contact -->
    <section class="div-shadow">
        <h2>Envoyez-nous un message 📝</h2>
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

    <!-- Pied de page -->
    <footer id="footer">
        <p>&copy; 2024 Ville de ScrumLand. Tous droits réservés.</p>
        <nav>
            <a href="index.php">Accueil</a> | 
            <a href="histoire.php">Histoire</a> | 
            <a href="contact.php">Contact</a>
        </nav>
        <p>Site multilingue | Responsive design | Mentions légales</p>
    </footer>

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
</body>
</html>