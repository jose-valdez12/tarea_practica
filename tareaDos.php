<?php
$fecha_nacimiento ="2000-10-03";//creacion de un programa que calcule la edad.

$fecha_nacimiento = new DateTime($fecha_nacimiento);
$fecha_actual = new DateTime();
$edad = $fecha_actual ->diff($fecha_nacimiento)->y;


echo "el nacimiento de la persona es de : ".$edad."años";


if ($edad >= 18) {//las condicionales nos serviran para saber si es mayor de edad o no
    echo " Eres mayor de edad."."<br/>"."<br/>";
} else {
    echo " Eres menor de edad."."<br/>";
}


//se calculan cual de los dos numeros es mayor quel el otro.
$primerNumero =10;
$segundoNumero = 20;

if ($primerNumero > $segundoNumero){
    echo "el primer numero es mayor a :".$primerNumero."<br/>"."<br/>";
}else if ($segundoNumero>$primerNumero){
    echo "segundo numero no es mayor a: ".$segundoNumero."<br/>"."<br/>";
}
else{
    echo "los numeros son iguales";
}


$seleccion = 6;//se agrega una funcion para saber numero par.

if ($seleccion %2 ==0){
    echo "el siguiente numero es par : ".$seleccion;
}else {
    echo "el siguiente numero no es par : ".$seleccion;
}

?>