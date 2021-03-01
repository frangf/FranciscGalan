
<?php
function macValidation($mac){
  //use filter_var PHP function
  //return a boolean variable:
  // true if the param contains a valid format for mac address and false if not
  $validacio = filter_var($mac,FILTER_VALIDATE_MAC);
  if ($validacio == $mac) {
    return true;
  } else {
    return false;
  }
}
?>
