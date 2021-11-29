<!DOCTYPE html>
<html>

<head>
    <title> Page inscription </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="moduleconnexion.css" />
</head>

<body>
    <main>
        <div align="center">
            <h1>PAREDE </h1>
            <form action="#" method="POST">
                <table class="form-input">
                    <tr>
                        <td>
                            <h1>Se connecter </h1>
                            <label>Identifiant</label>
                            <input type="text" name="login" placeholder="Entrer le nom" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label>Mot de passe</label>
                            <input type="password" name="password" placeholder="Entrer le mot de passe" minlength="5" required>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <button type="submit" name="connecter">Me connecter</button>
                        </td>
                    </tr>
                </table>
                <?php
                session_start();
                if (isset($_POST['connecter'])) {
                    $login = htmlspecialchars($_POST['login']);
                    $password = htmlspecialchars($_POST['password']);

                    $sql = mysqli_connect('localhost', 'root', '', 'moduleconnexion');

                    if (!$sql) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    $request = "SELECT login, password FROM utilisateurs WHERE login='$login' and password='$password'";

                    $result = mysqli_query($sql, $request) or die("Connection failed: " . mysqli_connect_error());

                    $rows = mysqli_num_rows($result);

                    if ($rows == 1) {
                        $_SESSION['login'] = $login;
                        header("Location: tableaudebord.php");
                    }
                    if ($login == "admin" && $password == "admin") {
                        header("Location: admin.php");
                    } else {
                        echo '<h3 style="color:#F96E69 ;">Le nom d\'utilisateur ou le mot de passe est incorrect.</h3>';
                    }

                    mysqli_close($sql);
                }
                ?>
                <p>Pas encore inscrit? <a class="connect-here" href="inscription.php">Créer un nouveau compte</a></p>
            </form>
    </main>
</body>

</html>