<?php
//Variables definition
$mac=$is_valid_mac=null;

//Include statement
include 'form_re-sit_mkt_validation.php';

if ($_GET){//params are visible on url
  //mac - input text mac
  $mac=$_GET['mac'];
  if(isset($_GET['mac']) and $_GET['mac'] != null) //si la variable $mac ha sigut inicialitzada i no es null
     $is_valid_mac = macValidation($mac);

//EL FOREACH SI LO DESCARTAMOS NOS PERMITE QUE FUNCIONE LA PAGINA
//Si añadimos el foreach no funciona la pagina y da errores que no tienen logica.

  //mac - seleccionada de la llista
  //foreach ($_GET['macs'] as $macs)

  if(isset($_GET['macs']) and $_GET['macs'] != null)//si la variable que conté la mac seleccionada de la llista de macs ha sigut inicialitzada i no es null
     $is_valid_macs = macValidation($_GET['macs']);

//SI ELIMINAS LA SECCION DE MESSAGE NOS PERMITE ELIMINAR ERRORES INECESARIOS

  //message
  //utilitza la condició if not emprant el caracter ! per a donar un valor al missatge
  //if()
  //  $messageMac=;//missatge
  //if()
  //  $messageMacs=; // missatge
}

?>
<HTML>
<head>
    <title>Re-sit marking task Form</title>
</head>
<body>
    <H2>Re-sit marking task Form</H2>
    <h5>Ompli la informació del formulari per a validar el format de les direccions MAC .</h3>
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="get">
        <!--name-->
        <b>Mac:</b>
        <INPUT TYPE="text" NAME="mac" value="<?php if (isset($mac)) echo $mac; ?>" size=30 required>
          <!--
           0A-00-27-00-00-14
           D2-C5-D3-68-E5-33
           E2-C5-D3-68-E5-33
           D0-C5-D3-68-E5-33
           D0-C5-D3-68-E5-32
         -->
       <!--macs-->
          <br><br><b> Macs:</b><br><br>
       <select name="macs" required>
           <option value="0A-00-27-00-00-14" >0A-00-27-00-00-14</option>
           <option value="D2-C5-D3-68-E5-33" >D2-C5-D3-68-E5-33</option>
           <option value="E2-C5-D3-68-E5-33" >E2-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-33" >D0-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-32" >D0-C5-D3-68-E5-32</option>
       </select>
      <br><br>
      <INPUT TYPE="submit" VALUE="validar mac & macs">
    </FORM>

    <?php

    //si $is_valid_mac i $is_valid_macs han sigut inicialitzades i no son null
    if(isset($is_valid_mac) and isset($is_valid_macs)){
        echo "<p><b>Form output</b></p>";
      if (!$is_valid_mac) //si la mac (introduida al inut text) no es valida. Utilitza condició de negació !
         echo "<p>".$mac." is NOT valid</p>";//mostra el missatge
      else
         echo "<p>".$mac." OK</p>"; //mostra missatge (es valida)

      if (!$is_valid_macs)//si la mac (seleccionada de la llista) no es valida. Utilitza condició de negació !
          echo "<p>".$_GET['macs']." is NOT valid</p>";//mostra missatge
      else
        echo "<p>".$_GET['macs']." OK<br>";//mostra missatge (es valida)
    }
  ?>
</body>
</HTML>
