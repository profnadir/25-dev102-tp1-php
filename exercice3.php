<?php 

    for ($i=1; $i <= 1000; $i++) { 
        
        $somme = 0;

        for ($j=1; $j < $i; $j++) { 
            if($i % $j == 0){
                $somme += $j;
            }
        }

        if($somme == $i){
            echo $i."<br/>";
        }
    }

/*     $notes = [
                "cc1"=> 12,
                "cc2" => 17,
                "cc3" => 15,
                "efm" => 36
            ];

    var_dump($notes["cc1"]); */

    /* $t = [];
    $t[] = 12;
    $t[] = 17;
    $t[0] = 7; */

    //$t = [17,12,7,36,"test",true];


    $t = [
        "cc1"=> 12,
        "cc2" => 17,
        "cc3" => 15,
        "efm" => 36
    ];

    foreach ($t as $key => $item) {
        echo $key.":".$item."<br/>";
    }

    /* for($i=0 ; $i<count($t); $i++){
        echo $t[$i]."<br/>";
    } */

    /* foreach ($t as $item) {
        echo $item."<br/>";
    } */

    

    //var_dump($t);

    echo "<br/>";
    echo "<br/>";


    $nbre = 5;
    $somme = 0;

    for($i=1; $i<=$nbre ;$i++){
        $somme = $somme + $i;
    }

    echo "La somme de 1 a $nbre est égale a ".$somme;
    echo "<br/>";

    $code = 123;

    /* while($code != 123){
        echo "erreur";
    } */

   /*  do{
        echo "erreur";
    }
    while($code != 123) */

    $nbre2 = 5;
    $somme2 = 0;

    $i2 = 1;

    while($i2<=$nbre2){
        $somme2 += $i2;
        $i2++;
    }
    echo "La somme de 1 a $nbre2 est égale a ".$somme2;
    echo "<br/>";

?>

