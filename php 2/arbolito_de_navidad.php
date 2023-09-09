<?php

    function arbolito_de_navidad($altura){

        $E = 0;
        $A = -1;
        for($i = 0; $i<$altura; $i++){
            $E = $altura - $i;
            $A = $A + 2;

            echo str_repeat(" ", $E). str_repeat("*", $A ). "\n";
        
        };
    }

    $altura = (int) readline("Que tan alto desea su arbolito?(*): ");

    arbolito_de_navidad($altura);

?>