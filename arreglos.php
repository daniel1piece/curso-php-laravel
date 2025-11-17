<?php 
    // Formas de declarar un arreglo
    $arreglo_01 = array("e1", 2, "e2", 25, 5.6);
   
    $arreglo_02 = ["Elemento1", 4, "Elemento2", 25, 56, true, false];

    // Clave valor array
    $arreglo_03 = array(
        'nombre' => 'Daniel',
        'edad' => 32,
        'celular' => 71254328,
        'estatura' => 1.82
    );
    //Agregando un campo
    $arreglo_03['email'] = 'danie1.ts1.hy@gmail.com';   

    // echo '<pre>';
    //  var_dump($arreglo_02);
    // echo '</pre>';

    echo '<pre>';
     var_dump($arreglo_03);
    echo '</pre>';
    echo '<pre>';
     var_dump($arreglo_03['edad']);
    echo '</pre>';
    echo '<pre>';
     var_dump($arreglo_03['celular']);
    echo '</pre>';

     // Modificando valores
    $arreglo_03['celular'] = 71578595;

    echo '<pre>';
     var_dump($arreglo_03['email']);
    echo '</pre>';
    echo '<pre>';
     var_dump($arreglo_03['celular']);
    echo '</pre>';

    // Eliminando el ultimo elemento del array
    print array_pop($arreglo_03);

    // Encotrar valores en el arregloe
    echo '<br>';
    var_dump(in_array(32, $arreglo_03));
    var_dump(in_array(25, $arreglo_03));
?>