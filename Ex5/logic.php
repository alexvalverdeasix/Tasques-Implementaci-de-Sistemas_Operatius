<?php
$preu = $_POST["preu"];
$iva = $_POST["iva"];
$resultat = $preu + ($preu * $iva / 100);
    echo "Preu: $preu €<br>";
    echo "IVA: $iva %<br>";
    echo "Preu final: $resultat €";
?>

