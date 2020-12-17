<?php
//visusi corrections - Be attentive to solution in class
//Definició de variable i assignació de valor null
$finalPrice=$partialPrice2=$partialPrice=$viewsPrice=$genderPrice=$typePrice=$foodServices=$views=$gender=$type=null;

//Afegeix la inclucció per a incloure el fitxer de calcul de preus
Include 'form_AccRoom_calculation.php';
//comprova que hi ha request del metode get o post emprat
if ($_GET){
  //emmagatzemar en una variable el tipus de l'habitació seleccionada
  $type=$_GET['type'];
  //el tipus seleccionat sera un array
  foreach($_GET['type'] as $option)
    $type=$option;

  //emmagatzemar en una variable el genere de l'habitació seleccionada
  $gender=$_GET['gender'];

  //emmagatzemar en una variable si s'ha seleccionat l'habitació amb vistes o no
    $views=$_GET['views'];

//emmagatzemar en una variable els serveis de restauració seleccionats
  $foodServices=$_GET['foodServices'];

  //Si la variable $type ha sigut inicialitzada i no es null
  //calcular del preu del tipus d'habitació
  if(isset($type)){
       $typePrice = typePriceCalculation($type);//cridar a la funcio typePriceCalculation amb els parametres requerits
}
  //Si la variable $gender ha sigut inicialitzada i no es null
  //calcular del preu del genere de l'habitació
  if(isset($gender)){
    $genderPrice= genderPriceCalculation($gender);//cridar a la funcio genderPriceCalculation amb els parametres requerits
  }

  //Si la variable $views ha sigut inicialitzada i no es null
  //calcular del preu del segons les vistes de l'habitació
  if(isset($views)){
    $viewsPrice= viewsPriceCalculation($views);//cridar a la funcio viewsPriceCalculation amb els parametres requerits
  }

  //Si la variable $foodServices ha sigut inicialitzada i no es null
  //calcular del preu del segons els serveis seleccionats de l'habitació
    if(isset($foodServices)){
      $foodServicesPrice= foodServicesPriceCalculation($foodServices);//cridar a la funcio foodServicesPriceCalculation amb els parametres requerits
    }

  //si els preus del tipus i el genere de l'habitacio son major de 0
  //sumar-los i assignar el resultat a la variable $partialPrice
  if(($type)&&($gender) > 0)	 //visusi corrections - Be attentive to solution in class
    $partialPrice= ($type + $gender);	 //visusi corrections - Be attentive to solution in class
  //sino asignar valor 0 a $partialPrice
  else {
    return $partialPrice = 0;
  }

  //si els preus de les vistes i els serveis de restauracio diferent de 0
  //sumar-los i assignar el resultat a la variable $partialPrice2
  if(($views)&&($foodServices) !== 0)	 //visusi corrections - Be attentive to solution in class
    $partialPrice2= ($views + $foodServices);	 //visusi corrections - Be attentive to solution in class
  //sino asignar valor 0 a $partialPrice2
else {
  return $partialPrice2;	 //visusi corrections - Be attentive to solution in class
}

  //calcul del preu final
  //suma dels preus parcials calculats
  $finalPrice= ($partialPrice + $partialPrice2);

}//end GET
?>
<HTML>
<head>
    <title>Accommodation Form</title>
</head>
<body>
    <H2>Accommodation room details</H2>
    <h3>Fill the form with the details of the room you want to book, please.</h3>
<!--1. configura l'action per a recarregar la mateixa pagina-->
<!--1. configura el metode PHP que mostra els parametres a la url del navegador-->
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
       <!--room type-->
          <b>Room type:</b><br><br>
       <select name="type[]">
           <option value="single" selected>single</option>
           <option value="double">double</option>
       </select>
       <!--room gender-->
          <br><br><b>Room gender:</b><br><br>
          <input type="radio" name="gender" value="male" checked>Male<br>
          <input type="radio" name="gender" value="female">Female<br>
          <input type="radio" name="gender" value="mixed">Mixed<br>
      <!--room views-->
       <br><br>Room view:
      <input type="checkbox" name="views" value="yes" checked>

      <!--room type-->
       <br><br><b> Food service included:</b><br><br>
          <select name="foodServices[]" size="5" multiple>
            <option value="breakfast" selected>breakfast</option>
            <option value="lunch">lunch</option>
            <option value="snack">snack</option>
            <option value="dinner">dinner</option>
            <option value="drinks">drinks</option>
          </select>
      <br><br>
      <INPUT TYPE="submit" VALUE="Room price calculation">

    </FORM>

    <?php
    //Si s'ha calculat el preu, es a dir si $finalPrice no es null i té un valor
    if(isset($finalPrice)){
        //Mostrar el missatge amb el preu total
      return $finalPrice ;	 //visusi corrections - Be attentive to solution in class
    }
  ?>
</body>
</HTML>
