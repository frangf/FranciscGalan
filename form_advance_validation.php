<?php

function fullNameSplit($FullName){
  //use explode PHP function
  //return an array containing the $fullName param split by the space character
  return explode(" ", $FullName);
}

function encryptPass($pwd){
   //use  password_hash PHP function
  //return a string variable containing the $pwd param encrypted
  return password_hash($pwd, PASSWORD_DEFAULT);
}

function emailValidation($email){
  //use filter_var PHP function
  //return a boolean variable:
  // true if the param $email contain a valid format for an email and false if not
  return filter_var($email, FILTER_VALIDATE_EMAIL);
  if (emailValidation ($email)){
    return True;
  } else {
    return False;
  }
}

function pwdValidation($pwd,$pwdConfirm){
  //Use the PHP strcmp function - string comparison: binary level
  //return a boolean variable
  //true if params are binaryly equal and false if not
  if (strcmp($pwd, $pwdConfirm) == 0 ){
      return True;}
  else   {
   return False;}
}

?>
