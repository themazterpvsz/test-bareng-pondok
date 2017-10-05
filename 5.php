<?php
function fpb($a, $b) {
	return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
}

$a = 25;
$b = 35;
echo "FPB DARI $a DAN $b ADALAH = ".fpb($a,$b);
?>
