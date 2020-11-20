<?php
//visusi - corrections - OK
/*1.Associative array:dias de enero*/
echo "<br>1.Associative array: January months days";
echo "<br> String key: Enero <br>";

    $Vector_1['Enero']=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31);


        foreach ($Vector_1 as $Value_1){
            echo "Number of Elements: ";
          echo  sizeof($Value_1);
          echo "<br>";
        foreach ($Value_1 as $Value_2){
            echo "$Value_2</br>";
                }
                }

/*2.Associative array: platos de restaurante*/
echo "<br>2 Associative array: Menu";
echo "<br> String key: Menu <br>";

    $Vector_2['Menu']=array('Beef with mushrooms sauce','Spaghetti caronara','Spanish omellete');


        foreach ($Vector_2 as $Value_3){
            echo "Number of Elements: ";
          echo  sizeof($Value_3);
          echo "<br>";
        foreach ($Value_3 as $Value_4){
            echo "$Value_4</br>";
                }
                }

/*3.Associative array:tiempo de alarmas*/

 echo "<br>3.Associative array: Alarm times";
 echo "<br> String key: Alarm_times <br>";

 $Vector_3['Alarm_times']=array(8,12,14,16,20);

   foreach ($Vector_3 as $Value_5){
      echo "Number of Elements: ";
      echo  sizeof($Value_5);
      echo "<br>";
          foreach ($Value_5 as $Value_6){
              echo "$Value_6</br>";
                    }
                    }

/*4.Associative array:componentes*/

  echo "<br>4.Associative array: Product 123";
  echo "<br> String key: Alarm_times <br>";

   $Vector_4['Product_123']=array("PC","Ratolí","Teclat","I3 core","8 GB de RAM","1 TB");

      foreach ($Vector_4 as $Value_7){
          echo "Number of Elements: ";
          echo  sizeof($Value_7);
          echo "<br>";
            foreach ($Value_7 as $Value_8){
            echo "$Value_8</br>";
                                       }
                                       }
?>
