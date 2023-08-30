<?php

   $horas = readline("horas: ");
   $minutos = readline("minutos: ");
   $segundos = readline("segundos: ");
   $a = 5;
   
   $segundos_de_horas = ($horas * 3600) ;
   $segundos_de_minutos = ($minutos * 60) ;

   $segundos += ($segundos_de_horas + $segundos_de_minutos);

   echo $a + 1 ;
   echo "\n";
   
   echo "El total de segundos son: $segundos";

   

   echo "\n";

   










?>
