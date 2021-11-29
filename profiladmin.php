<?php
session_start();

$bdd = mysqli_connect("localhost", "root", "", "moduleconnexion");
$sesslogin = $_SESSION["login"];
$req = mysqli_query($bdd, "SELECT * FROM utilisateurs WHERE login = '$sesslogin'");
$res = mysqli_fetch_all($req, MYSQLI_ASSOC);
$login = $res[0]['login'];
$prenom = $res[0]['prenom'];
$nom = $res[0]['nom'];
$password = $res[0]['password'];

if (isset($_POST['modifier'])) {
    $prenom10 = $_POST['prenom'];
    $nom10 = $_POST['nom'];
    $login10 = $_POST['login'];
    $password10 = $_POST['passwordChange'];
    $requete = "UPDATE utilisateurs SET login='$login10', prenom='$prenom10', nom='$nom10', password='$password10' WHERE  login = '$sesslogin' ";

    $req2 = mysqli_query($bdd, $requete);
    header("Location: accueil.php");
    if ($req2) {
        echo  "vos information ont été modifier avec succès";
    }
}

?>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="module-connexion.css">
    <title>PAREDE - profil</title>
</head>

<body>
    <header>
        <section class="titre-header">
            <div class="wrap">
                <ul class="navbar">
                    <li>
                        <h2> <a href="accueiladmin.php">Accueil</a></h2>
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
            <h1>Vous etes sur le point de modifier vos informations <?php echo $_SESSION["login"]; ?></h1>
            <form method="post" action="">
                <table class="form-input">
                    <tr>
                        <td>
                            <h5>Ne remplissez que les champs concerner par le changement</h5>
                            <label>Prenom</label>
                            <input type="text" name="prenom" value='<?php echo $prenom ?>' />
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label>Nom</label>
                            <input type="text" name="nom" value='<?php echo $nom ?>' />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Identifiant</label>
                            <input type="text" name="login" value='<?php echo $login ?>' />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Ancien mot de passe</label>
                            <input type="password" name="password" />
                        </td>
                    <tr>
                        <td>
                            <label>Nouveau mot de passe</label>
                            <input type="password" name="passwordChange" />
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button type="submit" name="modifier">Modifier</button>
                        </td>
                </table>
            </form>
        </div>
    </main>
    <footer>
        <div class="footer-dark">
            <div class="row">
                <div class="but">
                    <h3><a href="accueiladmin.php">Accueil</a></h3>
                </div>
                <div class="but">
                    <h3><a href="admin.php">Tableau de bord</a></h3>
                </div>
                <div class="but">
                    <h3> <a href="profiladmin.php">Profil</a></h3>
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