<?php

    $Variable_de_control = 0;
    
   do{
            $place = readline("A que tienda quieres llegar: ");

            if($place == "FIN"){

                $Variable_de_control = 1;
            }

            $n1 = 1;
            $n2 = 1;
            $i = 2;
            //echo "0, 1, ";
            while ($i < $place){
                $nt = $n2;
                $n2 = $n1 + $n2;
                $n1 = $nt;
                $i++;
                //echo "$n2, ";
            };
            echo "\n";
            echo "La cantidad de caminos hasta la tienda $place son $n2";
            echo "\n";

            //este reto no lo realize yo... condenada sea

    }while($Variable_de_control == 0);






?>