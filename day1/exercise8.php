<?php 
    $colors = array("bleu", "rouge", "jaune");

    foreach ($colors as $value){
         if ($value == "bleu"){
        echo "La couleur préférée de Louis est le " . $value. "<br/>";
        }
        elseif ($value == "rouge"){
            echo " Pour sa peinture, André a utilisé du " . $value. "<br/>";
        }
        else {
        echo " Anis n'a pas de chemise " . $value. "<br/>";
        }
    }