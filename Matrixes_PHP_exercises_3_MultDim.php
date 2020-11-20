<?php

$Restaurant = array
(
  array("Breakfast: ","Milk ","Coffe ","Toast ","Oats",),
  array("<br>","Lunch: ","Spanish Omelet ","Spaguetti ","beans ","bacon"),
  array("<br>","Dinner: ","Soup ","Cheese ","Fruit ","Yogurt")
);

echo $Restaurant[0][0],$Restaurant[0][1],$Restaurant[0][2],$Restaurant[0][3],$Restaurant[0][4];
echo $Restaurant[1][0],$Restaurant[1][1],$Restaurant[1][2],$Restaurant[1][3],$Restaurant[1][4],$Restaurant[1][5];
echo $Restaurant[2][0],$Restaurant[2][1],$Restaurant[2][2],$Restaurant[2][3],$Restaurant[2][4],$Restaurant[2][5];
//visusi correction // Els arrays multimiensionals també s'han de recorrer amb un bucle foreach com el que tens a continuació
foreach ($Restaurant as $var1) {
  foreach ($var1 as $valor1) {
    echo $valor1;
    }
}
?>
