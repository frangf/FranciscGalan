<?php
$Menu1['Desayuno']=array("Breakfast: ","Milk ","Coffe ","Toast ","Oats","<br>");
$Menu2['Almuerzo']=array("Lunch: ","Spanish Omelet ","Spaguetti ","beans ","bacon","<br>");
$Menu3['Comida']=array("Dinner: ","Soup ","Cheese ","Fruit ","Yogurt");


foreach ($Menu1 as $Desayuno) {
  foreach ($Desayuno as $valor1) {
    echo $valor1;
    }
}

foreach ($Menu2 as $Almuerzo) {
  foreach ($Almuerzo as $valor2) {
    echo $valor2;
    }
}

foreach ($Menu3 as $Comida) {
  foreach ($Comida as $valor3) {
    echo $valor3;
    }
}

?>
