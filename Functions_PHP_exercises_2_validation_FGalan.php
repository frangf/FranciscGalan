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
      return False;}//visusi - canviar per return false per a que retorne  un tipus boolean en els dos casos
                                          //Falta posar el nom del fitxer al missatge del commit
}

echo ValidarPassword('Francisco', 'Galan')
?>
