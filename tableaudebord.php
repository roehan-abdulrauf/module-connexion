<?php
session_start()
?>

<!DOCTYPE html>
<html>

<head>
    <title> Projet module de connexion </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="module-connexion.css" />
</head>

<body>
    <header>
        <section>
            <div>
                <ul class="navbar">
                    <li>
                        <h2> <a href="accueiluser.php">Accueil</a></h2>
                    </li>
                    <li>
                        <h2> <a href="tableaudebord.php">Tableau de bord</a></h2>
                    </li>
                    <li>
                        <h2> <a href="profil.php">Profil</a></h2>
                    </li>
                    <li>
                        <h2> <a href="contact2.php">Contact</a></h2>
                    </li>
                    <li>
                        <h2> <a href="deconnexion.php">Deconnexion</a></h2>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main>
        <h1 class="res">Bienvenue sur notre site web <?php echo $_SESSION["login"]; ?> </h1>
        <section id="Devis">
            <section id="nous-contacter">
                <h2>Nous Contacter</h2>
                <p>Vous pouvez nous joindre sur le:<br> 00 01 02 03 04 <br>
                    ou par email: Parede@laplateforme.io<br>
                    adresse: 8 bis rue D'Hozier 13002 Marseille</p>
            </section>
            <div class="photo-devis">
                <img widht="650" height="450" src="https://zupimages.net/up/21/41/zfxg.jpg" alt="" />
            </div>
            <div class="form-devis">
                <h2>Remplissez le formulaire pour obtenir un devis gratuit.</h2>
                <form action="/page-traitement-donnees" method="post">
                    <div>
                        <label for="nom">Votre nom complet</label>
                        <input type="text" id="nom" name="nom" placeholder="Martin ..." required>
                    </div>
                    <div>
                        <label for="email">Votre adresse e-mail</label>
                        <input type="email" id="email" name="email" placeholder="...@laplateforme.io" required>
                    </div>
                    <div>
                        <label for="numéro">Votre numéro de téléphone</label>
                        <input type="text" id="numéro" name="numéro" placeholder="+33..." required>
                    </div>
                    <div>
                        <label for="sujet">Le sujet de votre message</label>
                        <input type="text" id="sujet" name="sujet" placeholder="sujet" required>
                    </div>
                    <div>
                        <label for="message">Votre message</label>
                        <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
                    </div>
                    <div>
                        <button type="submit">Envoyer mon message</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>
        <div class="footer-dark">
            <div class="row">
                <div class="but">
                    <h3><a href="accueiluser.php">Accueil</a></h3>
                </div>
                <div class="but">
                    <h3><a href="tableaudebord.php">Tableau de bord</a></h3>
                </div>
                <div class="but">
                    <h3> <a href="profil.php">Profil</a></h3>
                </div>
                <div class="but">
                    <h3><a href="contact2.php">Contact</a></h3>
                </div>
                <div class="but">
                    <h3><a href="deconnexion.php">Deconnexion</a></h3>
                </div>
            </div>
            <div class="raw">
                <div class="horaire">
                    <h5 class="titre-h">HORAIRE D'OUVERTURE</h5>
                    <p> Lun-Ven: 09h-18h <br>
                        Sam-Dim: Fermé</p>
                </div>
                <div>
                    <p class="copyright">Parede © 2021</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>