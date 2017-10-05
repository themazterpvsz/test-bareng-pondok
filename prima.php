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
echo prima(24);
 ?>
