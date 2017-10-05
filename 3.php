<?php
function fpb($a, $b) {
  return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
}
function kpk($a, $b) {
  return ( $a / fpb($a,$b) ) * $b;
}
$a = 24;
$b = 30;
echo "KPK DARI ".$a. " DAN ".$b." ADALAH : ". kpk($a,$b);
 ?>
