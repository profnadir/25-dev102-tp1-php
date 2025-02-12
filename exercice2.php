<?php 

    $prix_table = 150;
    $prix_armoire = 150;
    $nombre = 10;

    $prix_ht = $prix_armoire * $nombre;

    echo "Le prix pour les $nombre armoires est $prix_ht <br/>";

    if($prix_armoire  < $prix_table){
        echo "Le prix $prix_armoire de l'armoire est inférieur au prix $prix_table de la table";
    }
    else if($prix_armoire  > $prix_table){
        echo "Le prix $prix_armoire de l'armoire est superieur au prix $prix_table de la table";
    }
    else {
        echo "Le prix $prix_armoire de l'armoire est égal au prix $prix_table de la table";

    }

    echo "<br/> Application 2 <br/>";

    $nombre_secondes = 3850;

    //$heures = (int)($nombre_secondes / 3600);
    $heures = floor($nombre_secondes / 3600);
    
    $minutes = (int)(($nombre_secondes % 3600) / 60);

    //$secondes = $nombre_secondes % 60;
    $secondes = ($nombre_secondes % 3600) % 60;

    echo "$heures h : $minutes m : $secondes s";

?>