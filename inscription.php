<!DOCTYPE html>
<html>

<head>
    <title> Page inscription </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="in.css" />
</head>

<body>
    <main>
        <div align="center">
            <div>
                <h1>PAREDE</h1>
                <form method="POST">
                    <table class="form-input">
                        <tr>
                            <td>
                                <h1>S'inscrire</h1>
                                <label>Prenom</label>
                                <input type="text" name="prenom" placeholder="Entre votre Prenom" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Nom</label>
                                <input type="text" name="nom" placeholder="entre votre Nom" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Identifiant</label>
                                <input type="text" name="login" placeholder="Entrer un identifiant" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Mot de passe</label>
                                <input type="password" name="password" placeholder="Entrer un mot de passe" minlength="8" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Confirmation mot de passe</label>
                                <input type="password" name="passwordverify" placeholder="Confirmer le mot de passe" required>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button type="submit" name="inscription">M'inscrire</button>
                            </td>
                        </tr>
                    </table>
                    <?php
                    //$sql->mysqli_real_string
                    session_start();
                    if (isset($_POST['inscription'])) {

                        $prenom = htmlspecialchars($_POST['prenom']);
                        $nom = htmlspecialchars($_POST['nom']);
                        $login =  htmlspecialchars($_POST['login']);
                        $password =  $_POST['password'];
                        $passwordverify = $_POST['passwordverify'];

                        $sql = mysqli_connect('localhost', 'root', '', 'moduleconnexion');

                        if (!$sql) {
                            die("Connection failed: " . mysqli_connect_error());
                        }

                        // $request = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('$login','$prenom','$nom','$password')";

                        if ($password ==  $passwordverify) {
                            $request = "INSERT INTO `utilisateurs` (`login`, `prenom`, `nom`, `password`) VALUES ('$login','$prenom','$nom','$password')";
                            mysqli_query($sql, $request);
                            header("location:./connexion.php");
                        } else {
                            echo '<h2 style="color:#F96E69 ;">veuillez rentrée les memes mot de passe.</h2>';
                        }

                        mysqli_close($sql);
                    }
                    ?>
                    <p>Déjà inscrit? <a class="connect-here" href="connexion.php">Connectez-vous ici</a></p>
                </form>
            </div>
    </main>
</body>

</html>