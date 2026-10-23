<?php
session_start();

// Tancar sessió
if (isset($_GET["sortir"])) {
    session_destroy();
    header("Location: index.html");
    exit();
}
if (isset($_POST["entrar"])) {

    $usuari = $_POST["usuari"];
    $contrasenya = $_POST["contrasenya"];

    if ($usuari == $contrasenya) {
        $_SESSION["usuari"] = $usuari;
        $_SESSION["pagina"] = 1;
    } else {
        header("Location: index.html");
        exit();
    }
}

if (!isset($_SESSION["usuari"])) {
    header("Location: index.html");
    exit();
}

if (isset($_GET["pagina"])) {
    $_SESSION["pagina"] = $_GET["pagina"];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Pàgines d'informació</title>
</head>
<body>

<p>
    Usuari: <?php echo $_SESSION["usuari"]; ?>
    |
    <a href="login_ampl.php?sortir=1">Tancar sessió</a>
</p>

<?php
if ($_SESSION["pagina"] == 1) {

    echo "<h1>Pàgina d'informació 1</h1>";
    echo "<p>Aquesta és la primera pàgina d'informació.</p>";

} else {

    echo "<h1>Pàgina d'informació 2</h1>";
    echo "<p>Aquesta és la segona pàgina d'informació.</p>";

}
?>

<br>

<a href="login_ampl.php?pagina=1">Pàgina 1</a>

<br><br>

<a href="login_ampl.php?pagina=2">Pàgina 2</a>

</body>
</html>
