<?php

$alumnos = array();

for ($i = 0; $i<=10 ;$i++){
    $alumno = array(
        "nombre" => "alumno".$i,
        "curso"=> "Curso".$i,
        "nota"=>rand(60,100),
    );
    $alumnos []=  $alumno ;
}
foreach ($alumnos as $alumno){
    echo "nombre:".$alumno["nombre"]."<br/>";
    echo "Curso:".$alumno["curso"]."<br/>";
    echo  "Nota:".$alumno["nota"]."<br/>"."<br/>";
}

?>