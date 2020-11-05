<?php
#Creacion del vector
/*$Meses["Enero"]="happy new year";
$Meses["Febrero"]=29;*/

$Asignaturas= array(
        array(
            "code"=> 1234,
            "  name"=>" BDD<br>",
        ),
        array(
            "code"=> 5678,
            "  name"=>" REDES<br>",
        ),
        array(
             "code"=> 9123,
              "  name"=>" S.O",
        ),
);


foreach ($Asignaturas as $Curso){
  foreach ($Curso as $Asignatura => $Año) {
    echo "<b>$Asignatura</b> : $Año";
  }
}
/*echo $Meses['Enero'];
echo "<br>".$Meses['Febrero'];*/
?>
