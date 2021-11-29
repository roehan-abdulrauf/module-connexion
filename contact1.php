<!DOCTYPE html>
<html>

<head>
    <title> Page inscription </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="in.css" />
</head>

<body>
    <header>
        <section class="titre-header">
            <div>
                <ul class="navbar">
                    <li>
                        <h2> <a href="index.php">Accueil</a></h2>
                    </li>
                    <li>
                        <h2> <a href="admin.php">Tableau de bord</a></h2>
                    </li>
                    <li>
                        <h2> <a href="profiladmin.php">Profil</a></h2>
                    </li>
                    <li>
                        <h2> <a href="contact1.php">Contact</a></h2>
                    </li>
                    <li>
                        <h2> <a href="deconnexion.php">Deconnexion</a></h2>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main>
        <div align="center">
            <div class="table-forme">
                <h2>Vous avez une question? <br>Ecrivez-nous on vous répond au plus vite!</h2>
            </div>
            <form action="#" method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1>PAREDE</h1>
                            <label for="nom">Votre nom complet</label>
                            <input type="text" id="nom" name="nom" placeholder="Martin ..." required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="email">Votre adresse e-mail</label>
                            <input type="email" id="email" name="email" placeholder="...@laplateforme.io" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="numero">Votre numéro de téléphone</label>
                            <input type="text" id="numéro" name="numéro" placeholder="+33..." required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="sujet">Le sujet de votre message</label>
                            <input type="text" id="sujet" name="sujet" placeholder="sujet" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="message">Votre message</label>
                            <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <button type="submit">Envoyer mon message</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-dark">
            <div class="row">
                <div class="but">
                    <h3><a href="index.php">Accueil</a></h3>
                </div>
                <div class="but">
                    <h3><a href="profiladmin.php">Tableau de bord</a></h3>
                </div>
                <div class="but">
                    <h3> <a href="admin.php">Profil</a></h3>
                </div>
                <div class="but">
                    <h3><a href="contact1.php">Contact</a></h3>
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