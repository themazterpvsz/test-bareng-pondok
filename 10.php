<style media="screen">
  span {
    display: inline-block;
    min-width: 40px;
    min-height: 30px;
  }
</style>

<?php
  $num = 50;
  function fib($num) {
    if ($num < 2) {
      return 1;
    } else {
      return fib($num - 1) + fib($num - 2);
    }
  }

//FIXME: sementara menggunakan sistem ini, saya menyebutnya 'KISS'
//NOTE 1 : KISS => an acronym for "Keep it simple, stupid" as a design principle noted by the U.S. Navy in 1960
//NOTE 2 : if it looks stupid but works, it ain't stupid.
//NOTE 3: jika ada saran untuk syntax dibawah, segera beritahu saya.

$abjad = array('0','0','A','0','B','0','C','0','D','0','E','0','F','0','H','0','I','0','J','0','K','0','L','0','M','0','N','0','O'
                ,'0','P','0','Q','0','R','0','S','0','T','0','U','0','V','0','W','0','X','0','Y','0','Z');

for ($i=1; $i < $num ; $i++) {
  for ($j=1; $j < $num; $j++) {
   if ($j >= $i && $j <= $num - $i) {
     if ($i % 2 == 0) {
       echo "<span>".$abjad[$i]."</span>";
     } else {
      echo "<span>".round(fib($i/2))."</span>";
     }
   } elseif ($j <= $i && $j <= $num - $i) {
     if ($j % 2 == 0) {
       echo "<span>".$abjad[$j]."</span>";
     } else {
       echo "<span>".round(fib($j / 2))."</span>";
      }
   } elseif ($j <= $i || $j <= $i - $num) {
     if (($num - $i) % 2 == 0) {
       echo "<span>".$abjad[($num - $i)]."</span>";
     } else {
      echo "<span>".round(fib(($num - $i) / 2))."</span>";
    }
  } elseif ($j >= $i || $j >= $i - $num) {
     if (($num - $j) % 2 == 0) {
       echo "<span>".$abjad[($num - $j)]."</span>";
     } else {
       echo "<span>".round(fib(($num - $j)/2))."</span>";
     }
   }else {
     echo "<span>&nbsp;</span>";
   }
 } echo "<br>";
}
 ?>
