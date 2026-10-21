<?php

setcookie("majoredat", $_POST["edat"], time() + 3600);
setcookie("idioma", $_POST["idioma"], time() + 3600);
setcookie("moneda", $_POST["moneda"], time() + 3600);

$edat = $_POST["edat"];
$idioma = $_POST["idioma"];
$moneda = $_POST["moneda"];

if ($edat == "no") {

    if ($idioma == "ca") {
        echo "No et podem vendre alcohol si ets menor d'edat.";
    } elseif ($idioma == "es") {
        echo "No podemos venderte alcohol si eres menor de edad.";
    } else {
        echo "We cannot sell alcohol to underage customers.";
    }

} else {

    if ($idioma == "ca") {
        echo "<h1>Els nostres productes</h1>";
        $vi = "Vi Les Terrasses";
        $cava = "Cava";
    } elseif ($idioma == "es") {
        echo "<h1>Nuestros productos</h1>";
        $vi = "Vino Les Terrasses";
        $cava = "Cava";
    } else {
        echo "<h1>Our products</h1>";
        $vi = "Les Terrasses Wine";
        $cava = "Sparkling Wine";
    }

    if ($moneda == "eur") {
        $preu1 = "39 €";
        $preu2 = "15 €";
    } elseif ($moneda == "gbp") {
        $preu1 = "34 £";
        $preu2 = "13 £";
    } else {
        $preu1 = "42 $";
        $preu2 = "16 $";
    }

    echo "<p>$vi: $preu1</p>";
    echo "<p>$cava: $preu2</p>";
}

echo '<p><a href="bodega.html">Tornar</a></p>';

?>