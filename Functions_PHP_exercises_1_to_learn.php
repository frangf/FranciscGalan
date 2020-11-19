
<?php
function missatge($argument)
{
    echo "$argument<br>";
}

missatge("Aquest és l'argument que es passa en aquest exemple.");
?>

<br>
<br>

<?php
function suma($valor1, $valor2)
{
    return ($valor1 + $valor2);
}
echo "4+6 son: " .suma(4, 6);
?>

<br>
<br>

<?php
function resta($valor1, $valor2)
{
    return ($valor1 - $valor2);
}
echo "10-5 son: " .resta(10, 5);
?>

<br>
<br>

<?php
function multi($valor1, $valor2)
{
    return ($valor1 * $valor2);
}
echo "2*2 son: " .multi(2, 2);
?>

<br>
<br>

<?php
function divi($valor1, $valor2)
{
    return ($valor1 / $valor2);
}
echo "10/2 son: " .divi(10, 2);
?>

<br>
<br>

<?php
$nom = 'Francisco';

echo ("La codificació md5 de $nom és:<br>");
echo md5($nom);
?>
