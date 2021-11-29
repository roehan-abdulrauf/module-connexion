<?php

$sql = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
$request = mysqli_query($sql, "SELECT * FROM utilisateurs");
$resultat = mysqli_num_rows($request);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <title> Projet module de connexion </title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="in.css" />
</head>

<body>
    <header>
        <section class="titre-header">
            <div>
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
                        <h2> <a href="https://github.com/roehan-abdulrauf/module-connexion">Lien Github</a></h2>
                    </li>
                    <li>
                        <h2> <a href="deconnexion.php">Deconnexion</a></h2>
                    </li>
                </ul>
            </div>
        </section>
    </header>
    <main>
        <div class="tarr">
            <h6> BIENVENUE SUR VOTRE TABLEAU DE BORD ADMIN</h6>
        </div>
        <table class="table" align="center">
            <thead class="border">
                <tr>
                    <th class="border" scope="col">ID</th>
                    <th class="border" scope="col">LOGIN</th>
                    <th class="border" scope="col">PRENOM</th>
                    <th class="border" scope="col">NOM</th>
                    <th class="border" scope="col">PASSWORD</th>
                    <th class="border" scope="col">SUPPRIMER</th>
                </tr>
            </thead>
            <tbody class="border">
                <?php

                /*une autre manière de faire
     foreach($res AS $key => $value){
        echo '<tr>';
        foreach($value AS $key2 => $value2){
        echo '<td>'.$value2.'</td>';
        }
        echo '</tr>';
     }*/

                while ($row = mysqli_fetch_array($request)) {
                    echo "<tr><td>$row[id]</td>";
                    echo "<td>$row[login]</td>";
                    echo "<td>$row[prenom]</td>";
                    echo "<td>$row[nom]</td>";
                    echo "<td>$row[password]</td>";
                    echo "<td><a href=\"supprimerprofil.php?id=$row[id]\">supprimer</a></td></tr>";
                }
                ?>
            </tbody>
        </table>
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
                    <h3><a href="https://github.com/roehan-abdulrauf/module-connexion">Lien Github</a></h3>
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

<style>
    table {
        border-collapse: collapse;
        margin-bottom: 8%;
        width: 40%;
        font-size: 170%;
    }

    th {
        border: 1px solid black;
        padding: 3px
    }

    td {
        border: 1px solid black;
        padding: 3px;

    }
</style>