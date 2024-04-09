<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Folifenua Portfolio</title>

    <meta name="google-site-verification" content="weQlYNuk9BVSfufuJnx0k-S6TZZZsWIO_0ShOCMOvwY" />

    <!-- Définition de l'image pour les aperçus sur les réseaux sociaux -->
    <meta property="og:image" content="images/backgroundAccueil.png">

    <!-- Balises pour la description -->
    <meta name="description"
        content="folifenuaweb est un portfolio de création de site web, de la conception au développement">
    <meta property="og:description"
        content="folifenuaweb est un portfolio de création de site web, de la conception au développement">

    <!-- Balises pour le titre -->
    <meta property="og:title" content="Folifenua Portfolio">
    <meta name="twitter:title" content="Folifenua Portfolio">

    <!-- Balises pour l'URL -->
    <meta property="og:url" content="https://folifenuaweb.vercel.app/">
    <meta name="twitter:url" content="https://folifenuaweb.vercel.app/">

    <!-- Balises pour le type de site -->
    <meta property="og:type" content="website">
    <meta name="twitter:card" content="summary_large_image">

    <!-- Balises pour le nom de votre site -->
    <meta property="og:site_name" content="Folifenua Portfolio">

    <!-- Fonts Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Pacifico&display=swap"
        rel="stylesheet">

    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/2f8dc96037.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <!-- header design -->
    <header>
        <a href="#" class="logo">FolifenuaWeb</a>

        <i class='bx bx-menu' id="menu-icon"></i>

        <nav class="navbar">
            <a href="#home" class="active">Accueil</a>
            <a href="#about">A propos</a>
            <a href="#skills">Compétences</a>
            <a href="#portfolio">Portfolio</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>

    <!-- design section accueil -->
    <section class="home" id="home">
        <div class="home-content">
            <h3>bonjour, je suis</h3>
            <h1>Joëlle Taufana</h1>
            <h3>Et je suis <span class="multiple-text"></span></h3>
            <p>En reconversion professionnelle, je me suis engagée dans une formation intensive pour valider un titre
                RNCP de niveau 6 en "Conception et développement d'applications". Actuellement à la recherche d'un
                stage,
                je souhaite élargir et renforcer mes compétences techniques.</p>
            <div class="social-media">
                <a href="www.linkedin.com/in/joelle-taufana"><i class='bx bxl-linkedin-square'></i></a>
                <a href="https://github.com/JoeTaufana"><i class='bx bxl-github'></i></a>
            </div>
            <a href="../documents/TAUFANA_JOELLE_DEVELOPPEUSE.pdf" download="TAUFANA_JOELLE_DEVELOPPEUSE.pdf"
                class="btn">Télécharcher CV</a>
        </div>
        <div class="home-img">
            <img src="../images/joe.png" alt="">
        </div>
    </section>

    <!--design section A propos  -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="../images/joe.png" alt="">
        </div>

        <div class="about-content">
            <h2 class="heading">A propos de <span>Moi</span></h2>
            <h3>Future Conceptrice et développeuse Frontend</h3>
            <p>Ayant principalement évolué dans le domaine du commerce et ayant également fondé ma propre entreprise
                artisanale,
                j'ai acquis des compétences précieuses qui enrichissent mon parcours actuel de reconversion.
                Ma passion pour l'apprentissage autodidacte m'a toujours guidée, et bien que mon intérêt pour
                l'informatique ait été présent,
                je n'avais pas encore eu l'opportunité de m'y former. Aujourd'hui, après avoir franchi le cap,
                je suis pleinement engagée dans cette nouvelle voie qui conforte mon choix</p>
            <a href="#" class="btn">En savoir +</a>
        </div>
    </section>

    <!-- design section skills -->
    <section class="skills" id="skills">
        <h2 class="heading">Mes <span> Compétences</span> </h2>

        <div class="skills-container">
            <div class="skills-box">
                <i class='bx bxs-paint'></i>
                <h3>Conception</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas atque quis excepturi dignissimos cupiditate id sequi quod optio pariatur cum.</p>
                <a href="" class="btn">Voir Plus</a>
            </div>

            <div class="skills-box">
                <i class='bx bx-code'></i>
                <h3>Développement Web</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas atque quis excepturi dignissimos cupiditate id sequi quod optio pariatur cum.</p>
                <a href="" class="btn">Voir Plus</a>
            </div>

            <div class="skills-box">
                <i class='bx bxs-data'></i>
                <h3>Base de données</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quas atque quis excepturi dignissimos cupiditate id sequi quod optio pariatur cum.</p>
                <a href="" class="btn">Voir Plus</a>
            </div>
        </div>

        <h2 class="heading">Les <span>technologies</span></h2>
        <h3>Frontend</h3>
        <div class="skills-container">
            <div class="skills-box">
                <i class='bx bxl-html5'></i>
                <h3>HTML5</h3>
            </div>

            <div class="skills-box">
                <i class='bx bxl-css3'></i>
                <h3>CCS</h3>
            </div>

            <div class="skills-box">
                <i class='bx bxl-javascript'></i>
                <h3>JS</h3>
            </div>
        </div>
        <h3>Backend</h3>
        <div class="skills-container">
            <div class="skills-box">
                <i class='bx bxl-php'></i>
                <h3>PHP</h3>
            </div>

            <div class="skills-box">
                <i class="fa-brands fa-symfony"></i>
                <h3>symfony</h3>
            </div>

            <div class="skills-box">
                <i class='bx bxs-data'></i>
                <h3>SQL</h3>
            </div>
        </div>
        <h3>UI/UX Design</h3>
        <div class="skills-container">
            <div class="skills-box">
                <i class='bx bxl-figma'></i>
                <h3>Figma</h3>
            </div>
        </div>


    </section>

    <!-- design section portfolio -->
    <section class="portfolio" id="portfolio">
        <h2 class="heading">Mes derniers <span>Projets</span></h2>

        <div class="portfolio-container">
            <!-- <div class="portfolio-box">
                    <img src="images/backgroundAccueil.png" alt="">
                    <div class="portfolio-layer">
                        <h4>CV Perso</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nostrum.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/backgroundAccueil.png" alt="">
                    <div class="portfolio-layer">
                        <h4>CV Perso</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nostrum.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div>

                <div class="portfolio-box">
                    <img src="images/backgroundAccueil.png" alt="">
                    <div class="portfolio-layer">
                        <h4>CV Perso</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In, nostrum.</p>
                        <a href="#"><i class='bx bx-link-external'></i></a>
                    </div>
                </div> -->

            <div class="portfolio-box">
                <img src="../images/tesPtitesMains.png" alt="">
                <div class="portfolio-layer">
                    <h4>Tes p'tites mains vertes</h4>
                    <p>Projet réalisé en 2 jours, en équipe, lors d'un hackaton au profit de l'association.</p>
                    <a href="https://tes-ptites-mains-vertes.vercel.app/"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../images/logo.LillePacifique.png" alt="">
                <div class="portfolio-layer">
                    <h4>Lille du Pacifique</h4>
                    <p>Projet qui sera présenté lors de la soutenance.</p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>

            <div class="portfolio-box">
                <img src="../images/backgroundAccueil.png" alt="">
                <div class="portfolio-layer">
                    <h4>Portfolio</h4>
                    <p>Exercice d'entraînement </p>
                    <a href="#"><i class='bx bx-link-external'></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- design section contact -->

    <section class="contact" id="contact">
        <h2 class="heading">Contactez-<span>Moi!</span></h2>

        <?php include ('mailer.php'); ?>
        <form action="mailer.php" method="POST">
            <div class="input-box">
                <input type="text" name="nom" placeholder="Nom" maxlength="30" required>
                <input type="email" name="email" placeholder="Adresse mail"
                    pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
            </div>
            <div class="input-box">
                <input type="tel" name="telephone" pattern="[0-9]{10}" placeholder="Téléphone" required>
                <input type="text" name="sujet" placeholder="Sujet" maxlength="100" required>
            </div>
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Votre message" maxlength="500"
                required></textarea>


            <button type="submit" name="submit" class="btn">Envoyer</button>
        </form>
    </section>

    <!-- design footer -->
    <footer class="footer">
        <div class="footer-text">
            <p> 2024 Joëlle Taufana </p>
        </div>
        <div class="footer-iconTop">
            <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
        </div>

    </footer>

    <!-- Scroll reveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- writting typed -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <!-- Custom js -->
    <script src="script.js"></script>
</body>

</html>