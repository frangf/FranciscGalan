<?php
//Variables definition
$mac=$is_valid_mac=null;

//Include statement
include 'form_re-sit_mkt_validation.php';

if ($_GET){//params are visible on url
  //mac - input text mac
  $mac=$_GET['mac'];
  if(isset($mac)){ //si la variable $mac ha sigut inicialitzada i no es null
     $is_valid_mac = macValidation($mac);
   }
  //mac - seleccionada de la llista
  //SI QUITAS EL FOREACH NOS PERMITE VER LA PAGINA SIN ERRORES
  foreach ($mac as $macs) {
    echo "$macs";
  }
  //SI DECLARAMOS ESTA VARIABLE PODEMOS HACER QUE FUNCIONE EL FORM OUTPUT
  //$macs=$_GET['macs'];

  if(isset($macs)){//si la variable que conté la mac seleccionada de la llista de macs ha sigut inicialitzada i no es null
     $is_valid_macs = macValidation($macs);
   }
  //message
  //utilitza la condició if not emprant el caracter ! per a donar un valor al missatge
  if(!$mac)
    $messageMac="Please fill in this field";//missatge
  //En este parametro pongo macs ya que deberia ser asi, pero da un error.
  //En cambio si ponemos mac el error se elimina y podemos ver mas resultados.
  if(!$macs)
    $messageMacs="Please fill in this field"; // missatge

}
?>
<HTML>
<head>
    <title>Re-sit marking task Form</title>
</head>
<body>
    <H2>Re-sit marking task Form</H2>
    <h5>Ompli la informació del formulari per a validar el format de les direccions MAC .</h3>
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
        <!--name-->
        <b>Mac:</b>
        <INPUT TYPE="text" NAME="mac" value="<?php echo $mac;?>" size=30  required>
          <!--
           0A-00-27-00-00-14
           D2-C5-D3-68-E5-33
           E2-C5-D3-68-E5-33
           D0-C5-D3-68-E5-33
           D0-C5-D3-68-E5-32
         -->
       <!--macs-->
          <br><br><b> Macs:</b><br><br>
       <select name="macs[]">
           <option value="0A-00-27-00-00-14" >0A-00-27-00-00-14</option>
           <option value="D2-C5-D3-68-E5-33" >D2-C5-D3-68-E5-33</option>
           <option value="E2-C5-D3-68-E5-33" >E2-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-33" >D0-C5-D3-68-E5-33</option>
           <option value="D0-C5-D3-68-E5-32" >D0-C5-D3-68-E5-32</option>
       </select>
      <br><br>
      <INPUT TYPE="submit" VALUE="validar mac & macs" required>
    </FORM>

    <?php

    //si $is_valid_mac i $is_valid_macs han sigut inicialitzades i no son null
    if((isset($is_valid_mac))&&(isset($is_valid_macs))){
        echo "<p><b>Form output</b></p>";
      if (!$mac) //si la mac (introduida al inut text) no es valida. Utilitza condició de negació !
         echo "<p>NOT valid</p>";//mostra el missatge
      else
         echo "<p>OK</p>"; //mostra missatge (es valida)

      if (!$macs)//si la mac (seleccionada de la llista) no es valida. Utilitza condició de negació !
          echo "<p>NOT VALID</p>";//mostra missatge
      else
        echo "<p>OK<br>";//mostra missatge (es valida)
    }
  ?>
</body>
</HTML>
