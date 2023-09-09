<?php

    $hora = (int) readline("Que hora es?: ");
    $minutos = (int) readline("con que minutos?: ");
    $segundos = (int) readline("con que segundos?: ");
    $tiempo = readline("que momento del dia?(am/pm): ");

    if($tiempo == "pm" || $tiempo == "PM" || $tiempo == "Pm"){

        $hora += 12;

    }else if($tiempo == "am" || $tiempo == "AM" || $tiempo == "Am" && $hora == 12){
        $hora = 0;

    };
  
  
  
  
  
  
  
  
  
    echo "en Hora militar son las: ".$hora.": ".$minutos.": ".$segundos;

?>