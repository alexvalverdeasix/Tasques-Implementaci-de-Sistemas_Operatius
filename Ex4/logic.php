<?php

    if (isset($_POST["musica"])) {

        $musica = $_POST["musica"];

        if ($musica == "rock") {
            echo "<p>T'agrada el rock! </p>";
        }
        elseif ($musica == "pop") {
            echo "<p>T'agrada el pop! </p>";
        }
        elseif ($musica == "rap") {
            echo "<p>T'agrada el rap!</p>";
        }
        elseif ($musica == "clasica") {
            echo "<p>T'agrada la música clasica! </p>";
        }

    } else {
        echo "<p>No has seleccionat cap estil de música.</p>";
    }

    ?>


