<?php
$numeroBase = 10 ;//se definen las variables
$factorial =1;

$i=1;

while ($i<=$numeroBase){//se establece el bucle while para generar el factorial
    $factorial *= 1;
    $i++;
}
echo "este es el siguiente numero factorial: ".$i."<br/>"."<br/>";



$numeroAleatorios =[];//se crea la variable del array
for ($i=0 ;$i<20;$i++){
    $numeroAleatorios[]= rand(1,100);//nos indica el rango aleatorio en el que se puede generar un numero
}
for ($i=0;$i<count($numeroAleatorios);$i++) {//le decimos que nos ordene los numeros de mayor a menor
    for ($j = $i + 1; $j < count($numeroAleatorios); $j++) {
        if ($numeroAleatorios[$i] < $numeroAleatorios[$j]) {
            $temp = $numeroAleatorios[$i];//intercambian numeros
            $numeroAleatorioss[$i] = $numeroAleatorios[$j];
            $numeroAleatorioss[$j] = $temp;
        }
    }
}
echo "los numeros aleatorios son los siguientes : "."<br/>";
foreach ($numeroAleatorios as $numeroAleatorio){
    echo "$numeroAleatorio";
}




?>