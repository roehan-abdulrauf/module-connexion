
<?php
session_start();
$sql = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
if (isset($_SESSION['login'])) {

    $userid = $_GET['id'];
    var_dump($_GET);

    $request = "DELETE FROM utilisateurs where id = '$userid'";

    $result = mysqli_query($sql, $request);

    header("Location: admin.php");

    mysqli_close($sql);
}

?>