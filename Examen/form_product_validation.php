<?php
//viusi corrections - see comments below amd rubric in moodle
function messageReplacement($capitalisedName,$finalPrice){
  $message="PRODUCTNAME final price is FINALPRICE €";
  //use the php function str_ireplace that return a string
  //example of use: $replacedString = str_ireplace("body", "full", "body combat");
  //where $replacedString get the value "full combat"

  return $messageReplacement=str_ireplace("FINALPRICE",$price);	 //visusi corrections - Be attentive to solution in class
}
//
function discountCalculation($discount,$price){	 //visusi corrections - Be attentive to solution in class
  //calculate the final amount after applying the discount and return it
  // if the discount calculation is below 0 return false
  return $discountCalculation=($price - $discount);
  if (discountCalculation($discount)){
      return false;
    return true;
  }
}

function nameToCapitalLetters($name){	 //visusi corrections - Be attentive to solution in class
  //use the php function strtoupper that return a string
  //example of use: $transformedString = strtoupper("hello world")
  //where $transformedString get the value "HELLO WORLD"
    return
}
?>
