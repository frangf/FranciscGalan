<?php

$EUROS=$POUNDS=0;
$RATE=0.89;

if ($_GET)
      $EUROS=$_GET['EUROS'];

if ($_GET)
      $POUNDS=$_GET['POUNDS'];

#----------------------------------FUNCTION----------------------------------#
function Multiplicacion($EUROS, $RATE)
{
    return ($EUROS * $RATE);
}

?>

<HTML>
<head>
    <title>Forms_PHP_exercises_2_FGalan</title>
</head>
<body>
  <h2>Currency converter</h2>
  <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
    <p>EUROS: <input type="number" name="EUROS" value="<?php echo $EUROS;?>" /></p>
    <p>EXCHANGE RATE: <input type="number" name="RATE" value="<?php echo $RATE;?>" /></p>
    <p>POUNDS: <input type="number" name="POUNDS" value="<?php echo Multiplicacion($EUROS, $RATE);?>"></p>
    <input type="submit" VALUE="Submit">
  </FORM>
</body>
</HTML>
