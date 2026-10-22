
<?php

// Comptador de visites amb una cookie
$visites = 0;

if (isset($_COOKIE["visites"])) {
    $visites = (int) $_COOKIE["visites"];
}

if (isset($_POST["comprar"])) {
    $visites = (int) $_COOKIE["visites"];
} else {
    $visites++;
}

// Guardar les visites durant un dia
setcookie("visites", $visites, time() + 86400, "/");

$preu = 100;
$descompte = 0;
$missatge = "";

// Comprovar el codi
if (isset($_POST["comprar"])) {

    $codi = $_POST["codi"];

    if ($visites >= 10 && $codi == "BOTIGA50") {
        $descompte = 50;
        $missatge = "Compra amb un 50% de descompte!";

    } elseif ($visites >= 5 && $visites < 10
              && $codi == "BOTIGA20") {
        $descompte = 20;
        $missatge = "Compra amb un 20% de descompte!";

    } else {
        $missatge = "Codi incorrecte o no disponible.";
    }
}

$preuFinal = $preu - ($preu * $descompte / 100);

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Comptador de visites</title>
</head>
<body>

<h1>La meva botiga</h1>

<h2>Comptador de visites</h2>

<p>Nombre de visites: <?php echo $visites; ?></p>

<?php
if ($visites >= 10) {
    echo "<h3>Oferta exclusiva sols per a tu! Utilitza el codi BOTIGA50 per obtenir un 50% de descompte en les teves primeres compres a la botiga</h3>";

} elseif ($visites >= 5) {
    echo "<h3>Oferta exclusiva! Utilitza el codi BOTIGA20 per obtenir un 20% de descompte en les teves primeres compres a la botiga</h3>";
}
?>

<hr>

<h2>Samarreta</h2>

<p>Preu original: <?php echo $preu; ?> €</p>

<form method="post">
    <label>Codi de descompte:</label>
    <input type="text" name="codi">

    <button type="submit" name="comprar">Comprar</button>
</form>

<p><?php echo $missatge; ?></p>

<?php
if ($descompte > 0) {
    echo "<p>Descompte aplicat: $descompte%</p>";
    echo "<h3>Preu final: $preuFinal €</h3>";
}
?>

<br>

<form method="get">
    <button type="submit">Recargar página</button>
</form>

</body>
</html>

