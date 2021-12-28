<?php 

require 'menu.php'; 

$arrayExample = [
    [
        'nombre' => 'Jesus', 
        'apellido' => 'Araujo'
    ],
    [
        'nombre' => 'Steven', 
        'apellido' => 'Carrascal'
    ],
];

for ($i=0; $i < count($arrayExample); $i++) { 
    echo "Hola mi nombre es " . $arrayExample[$i]['nombre'] . "<br>";
    echo "Hola mi apellido es " . $arrayExample[$i]['apellido'] . "<br>";
}

function getArray($array){
    echo $array;
}

// Funcion para setear el array
function setArray($array){
    $array = $array;
    echo $array;
}

?>

<form action="">
    <p>Username <input type="text"></p>
    <p>Password <input type="password"></p>
    <p><input type="submit" value="Enviar"></p>
</form>

