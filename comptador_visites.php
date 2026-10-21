
<?php
session_start();

// Comptador de visites
if (!isset($_SESSION["visites"])) {
    $_SESSION["visites"] = 0;
}

if (!isset($_SESSION["comprat"])) {
    $_SESSION["comprat"] = false;
}

$missatge = "";

// Comprovar si ha comprat
if (isset($_POST["comprar"])) {

    $codi = $_POST["codi"];

    if ($_SESSION["comprat"] == true) {
        $missatge = "Ja has comprat amb descompte.";

    } elseif ($_SESSION["visites"] >= 10 && $codi == "BOTIGA50") {
        $missatge = "Compra feta amb un 50% de descompte!";
        $_SESSION["comprat"] = true;

    } elseif ($_SESSION["visites"] >= 5 &&
              $_SESSION["visites"] < 10 &&
              $codi == "BOTIGA20") {
        $missatge = "Compra feta amb un 20% de descompte!";
        $_SESSION["comprat"] = true;

    } else {
        $missatge = "Codi incorrecte o no disponible.";
    }

} else {
    $_SESSION["visites"]++;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>

<h1>La meva botiga</h1>

<p>Nombre de visites: <?php echo $_SESSION["visites"]; ?></p>

<?php
if ($_SESSION["comprat"] == false) {

    if ($_SESSION["visites"] >= 10) {
        echo "<p>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</p>";

    } elseif ($_SESSION["visites"] >= 5) {
        echo "<p>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</p>";
    }
}
?>

<h2>Samarreta: 20 €</h2>

<form action="comptador_visites.php" method="post">
    <label>Codi de descompte:</label>
    <input type="text" name="codi">

    <button type="submit" name="comprar">Comprar</button>
</form>

<p><?php echo $missatge; ?></p>

<p><a href="comptador_visites.html">Tornar a la pàgina inicial</a></p>

</body>
</html>
