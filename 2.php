<?php
function fib($n) {
    //angka pertama dan kedua
    $o = 1; //1
    $s = 1; //1
    $q = 1; //1

    //simpan string angka sekarang
    $hasil = "$q";

    for ($i=0; $i < $n-1 ; $i++) {

      //hitung fib
      $output = $q + $s + $o; // 1+1+1
      //simpan di $hasil
      $hasil = $hasil." $output";

      //siapkan angka untuk perhitungan berikutnya
      $o = $s;
      $s = $q;
      $q = $output;
    }
    return $hasil;
  }
  echo "1 1 " .fib(7)."";
?>
