<?php
session_start();

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
    <title>Informació</title>
</head>
<body>

<p>Usuari: <?php echo $_SESSION["usuari"]; ?></p>

<?php
if ($_SESSION["pagina"] == 1) {
    echo "<h1>Pàgina d'informació 1</h1>";
    echo "<p>Aquesta és la primera pàgina d'informació.</p>";
} else {
    echo "<h1>Pàgina d'informació 2</h1>";
    echo "<p>Aquesta és la segona pàgina d'informació.</p>";
}
?>

<a href="login.php?pagina=1">Pàgina 1</a>

<br><br>

<a href="login.php?pagina=2">Pàgina 2</a>

<br><br>

<a href="index.html">Tornar al login</a>

</body>
</html>
