<?php
if(
    isset($_POST["nombre"]) && 
    isset($_POST["cognom"]) &&
    isset($_POST["Email"]) && 
    isset($_POST["missatge"]) 
) {
    $nom = $_POST["nombre"];
    $cognom = $_POST["cognom"];
    $email = $_POST["Email"];
    echo "Missatge rebut, $nom. Gracies per contactar. Et respondem a $email";
    echo "<br><a href='logic.html'><button>Tornar</button></a>";
}
?>