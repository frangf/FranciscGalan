<?php

function ValidarEmail($email){
  return filter_var($email, FILTER_VALIDATE_EMAIL);
}

if (ValidarEmail ('fgalan@gmail.com')){
  echo 'Valido';
} else {
  echo 'Incorrecto';
}

echo '<br>';

function ValidarPassword($password1, $password2){
  if (strcmp($password1, $password2) == 0 ){
      return True;}
  else   {
    echo "No son iguales";}
}

echo ValidarPassword('Francisco', 'Galan')
?>
