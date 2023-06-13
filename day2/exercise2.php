<?php

$tab = "kiwi, pomme, poire, litchi, rhubarbe";
$choice = "poire";

function searchingFruit ($tab, $choice){
    foreach ($tab as $value) {
        if ($value == "poire") {
            echo "Le fruit a été trouvé : " . $value;
        }
        else { 
            echo "Recherche infructueuse.";
        }
        
    }
}

?>