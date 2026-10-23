<?php
session_start();

if (!isset($_SESSION["samarreta"])) {
    $_SESSION["samarreta"] = 0;
    $_SESSION["pantalons"] = 0;
}

if (isset($_POST["samarreta"])) {
    $_SESSION["samarreta"] += $_POST["samarreta"];
}

if (isset($_POST["pantalons"])) {
    $_SESSION["pantalons"] += $_POST["pantalons"];
}

if (isset($_POST["buidar"])) {
    $_SESSION["samarreta"] = 0;
    $_SESSION["pantalons"] = 0;
}

$total = $_SESSION["samarreta"] * 20
       + $_SESSION["pantalons"] * 30;
?>

<h1>La meva cistella</h1>

<p>Samarretes: <?php echo $_SESSION["samarreta"]; ?></p>
<p>Pantalons: <?php echo $_SESSION["pantalons"]; ?></p>

<p>Preu total: <?php echo $total; ?> €</p>

<form method="post">
    <input type="submit" name="buidar" value="Buidar cistella">
</form>

<a href="index.html">Tornar a la botiga</a>
