<?php

$arrayExample = [
    [
        'nombre' => 'Jesus', 
        'Apellido' => 'Araujo'
    ],
    [
        'nombre' => 'Steven', 
        'Apellido' => 'Carrascal'
    ],
];

for ($i=0; $i < count($arrayExample); $i++) { 
    echo "Hola mi nombre es " . $arrayExample[$i]['nombre'];
}


// echo $arrayExample[0]['nombre'];

// Funcion para setear el array
function setArray($array){
    $array = $array;
    echo $array;
}