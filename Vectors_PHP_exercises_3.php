<?php
/*Vector time of a day*/
$tiempo[0]="Morning ";
$tiempo[1]="Noon ";
$tiempo[2]="Afternoon ";
$tiempo[3]="Evening ";
$tiempo[4]="Night";
/*Vector dishes of a restaurant*/
$platos=array("Beef with mushroom sauce","spaghetti carbonara","Spanish omelette");
/*Vector alarm sounds*/
$horas=array(8,12,14,16,20);
/*Vector components*/
$componentes[0]="PC";
$componentes[1]="Mouse";
$componentes[2]="Keyboard";
$componentes[3]="i3core";
$componentes[4]="8GB RAM";
$componentes[5]="1TB";

echo "---------------------------------------------------<br>";

/*Echo de Tiempo*/
echo "Vector: tiempo de un dia<br>";
echo "Numero de elementos: " .sizeof($tiempo);
for($T=0 ; $T<count($tiempo); $T++)
echo "<br>".$tiempo[$T];

echo "<br>---------------------------------------------------<br>";

/*Echo de Platos Restautante*/
echo "Vector: platos de un restaurante<br>";
echo "Numero de elementos: " .sizeof($platos);
for($T=0 ; $T<count($platos); $T++)
echo "<br>".$platos[$T];

echo "<br>---------------------------------------------------<br>";

/*Echo de Horas que suena la alarma*/
echo "Vector: platos de un restaurante<br>";
echo "Numero de elementos: " .sizeof($horas);
for($H=0 ; $H<count($horas); $H++)
echo "<br>".$horas[$H];

echo "<br>---------------------------------------------------<br>";

/*Echo de Listas de componentes*/
echo "Vector: platos de un restaurante<br>";
echo "Numero de elementos: " .sizeof($componentes);
for($C=0 ; $C<count($componentes); $C++)
echo "<br>".$componentes[$C];

echo "<br>---------------------------------------------------<br>";

?>
