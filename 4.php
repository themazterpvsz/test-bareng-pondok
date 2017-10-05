<?php

function prima($a) {

    for ($i=1; $i <= $a ; $i++) {

      $counter = 0;
      for ($j=1; $j <= $i; $j++) {
          if ($i % $j == 0) {
            $counter++;
          }
        }
      if ($counter == 2) {
        print $i."<br>";
      }
    }
 }
 $a = 50;
echo "faktorisasi prima dari $a adalah : <br>";
echo prima($a);
 ?>
