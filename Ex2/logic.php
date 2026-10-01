<?php
if(
    isset($_POST["€"])
) {
    $Euros = $_POST["€"];
    $dolares = $Euros * 1.17;
    echo "$Euros euros son $dolares dolares";
}