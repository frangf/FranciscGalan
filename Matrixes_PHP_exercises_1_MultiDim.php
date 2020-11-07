<?php


  $days_31 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);
  $days_30 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30);
  $days_29 = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29);

  $Months['Enero']=$days_31;
  $Months['Febrero']=$days_29;
  $Months['Marzo']=$days_31;
  $Months['Abril']=$days_30;
  $Months['Mayo']=$days_31;
  $Months['Julio']=$days_30;
  $Months['Junio']=$days_31;
  $Months['Agosto']=$days_30;
  $Months['Septiembre']=$days_31;
  $Months['Octumbre']=$days_30;
  $Months['Noviembre']=$days_31;
  $Months['Diciembre']=$days_30;


foreach ($Months as $Value_1 => $Value_2 ) {
  echo "$Value_1";
  echo ":";
  foreach ($Value_2 as $Value_3 => $Value_4)  {
 echo "$Value_4 ";
  }
  echo"</br>";
}

?>
