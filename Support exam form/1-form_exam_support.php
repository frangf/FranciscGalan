<?php
//Variables definition
$name=$capitalisedName=$price=$discount=$discountQuantity=$finalPrice=$replacedMessage=null;

//Reference to php file where the functions are
include '1-form_exam_support_validation.php';

if ($_GET){
  //name format
  $name=$_GET['name'];
  //if the $name variable has been initialised and is not null
  if(($name))
     $capitalisedName = nameToCapitalLetters($name);
  //price value
  $price=$_GET['price'];
  //selected discount
   foreach ($_GET['discounts'] as $option)
    $discount = $option;

  //discountQuantity
  //if $discount and $price have been initialised and are not null
  if(isset($discount)&&($price)){
    $finalPrice=discountCalculation($discount,$price);
  }
  //message replacement
  //if $finalPrice is false using !
  if(!$finalPrice)
    $replacedMessage="Discount cannot be greater than price";
  else
    $replacedMessage=messageReplacement($capitalisedName,$finalPrice);
}//end
?>
<HTML>
<head>
    <title>Product Form</title>
</head>
<body>
    <H2>Product Form</H2>
    <h3>Fill the form with the product information, please.</h3>
    <!--use the METHOD that hide (don't show) the params in the url-->
  <FORM ACTION="<?php echo $_SERVER["PHP_SELF"];?>" METHOD="GET">
        <!--name-->
        <b>Name:</b>
        <INPUT TYPE="text" NAME="name" value="<?php echo $name;?>" >
        <!--price-->
        <br><br><b> Price:</b><br><br>
       <input type="text" name="price" value="<?php echo $price;?>" >
       <!--discount-->
          <br><br><b> Discount in €:</b><br><br>
       <select name="discounts[]">
           <option value="5" <?php if (isset($discount) && $discount=="5") echo "selected";?>>5</option>
           <option value="10" <?php if (isset($discount) && $discount=="10") echo "selected";?>>10</option>
           <option value="15" <?php if (isset($discount) && $discount=="15") echo "selected";?>>15</option>
           <option value="20" <?php if (isset($discount) && $discount=="20") echo "selected";?>>20</option>
           <option value="25" <?php if (isset($discount) && $discount=="25") echo "selected";?>>25</option>
       </select>
       <!--final price-->
          <br><br> <b>Final Price:</b><br><br>
       <input type="text" name="finalPrice" value="<?php echo $finalPrice;?>">
      <br><br>
      <INPUT TYPE="submit" VALUE="Enviar">
    </FORM>

    <?php
    //if $finalPrice or $replacedMessage have been initialised and aren't null value
    if (isset(($finalPrice))||(($replacedMessage))){
        echo "<p><b>Form output</b></p>";
        echo "<p>$replacedMessage</p>"; //show message to the user
    }
  ?>
</body>
</HTML>
