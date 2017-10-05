<?php
function fpb($a, $b) {
	return ( $b == 0 ) ? ($a):( fpb($b, $a % $b) );
}
function kpk($a, $b) {
	return ( $a / fpb($a,$b) ) * $b;
}
// function kpk_num($ar) {
// 	if (count($ar) > 1) {
// 		$ar[] = kpk( array_shift($ar) , array_shift($ar) );
// 		return kpk_num( $ar );
// 	} else {
// 		return $ar[0];
// 	}
// }

echo kpk(24,30);
echo '<br/>';
echo 24%30;
?>
