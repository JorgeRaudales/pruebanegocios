<?php
    //Ejemplos de arreglos
    $arreglo= array(1,2,3,4,"texto",false);
    print_r($arreglo);
    
    echo "<br/>";
    $arreglo2= array("nombre"=>"fulano",
                     "apellido"=>"mengano");
    print_r($arreglo2);
    echo "<br/>";
    $arreglo2[]="esto no tiene llave";
    print_r($arreglo2);
    echo "<br/>";
    $personas[]=$arreglo2;
    $arreglo =$personas;
    
    print_r($personas);
?>