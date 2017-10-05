<style media="screen">
  span {
    display: inline-block;
    min-width: 25px;
    min-height: 10px;
  }
</style>

<?php
$num = 10; //number

function fib($num) { //function fibonacci
  if ($num == 0) {
    return 0;
  } elseif ($num == 1) {
    return 1;
  } else {
    return (fib($num-2) + fib($num-1));
  }
}

for ($i=1 ; $i < $num ; $i++ ) { //loop
  for ($j=1; $j < $num ; $j++) {
    if ($i == $j ) {
      echo "<span>".fib($i)."</span>";
    } elseif ($j ==  $num - $i) {
      echo "<span>".fib($j)."</span>";
    } elseif ($j <= $i && $j <= $num - $i) {
      echo "<span>D</span>";
    } elseif ($j >= $i && $j >= $num - $i) {
      echo "<span>B</span>";
    } elseif ($i <= $j && $i <= $num - $j) {
      echo "<span>A</span>";
    } elseif ($i >= $j && $j <= ($num*2) - $j) {
      echo "<span>C</span>";
    }else {
      echo "<span>&nbsp;</span>";
    }
  } echo "<br>";
}
// function fib($n) {
//   //angka pertama dan kedua
//   $o = 0; //angka awal 0
//   $s = 1; //angka awal 1
//
//   //simpan string angka sekarang
//   $hasil = "$s";
//
//   for ($i=0; $i < $n-1 ; $i++) {
//
//     //hitung fib
//     $output = $s + $o; // 1+1
//     //simpan di $hasil
//     $hasil = $hasil." $output";
//
//     //siapkan angka untuk perhitungan berikutnya
//     $o = $s;
//     $s = $output;
//   }
//   return $hasil;
  // }
//
//   for ($i=1; $i < 10 ; $i++) {
//     for ($j=1; $j < 10 ; $j++) {
//       if ($i == $j) {
//         echo fib(9);
//       } else {
//         echo "&nbsp;";
//       }
//     } echo "<br>";
//   }
?>
