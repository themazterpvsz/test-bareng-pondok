<style media="screen">
  span {
    display: inline-block;
    min-width: 25px;
    min-height: 20px;
  }
</style>

<?php
$a = 10;
function fib($n) {
  if ($n <= 1) {
    return $n;
  } else {
    return fib($n - 2) + fib($n - 1);
  }
}

for ($i=1; $i < $a; $i++) {
  for ($j=1; $j < $a*2-2; $j++) {
    if ($j == $i) {
      echo "<span>".fib($j)."</span>";
    } elseif ($j == $a -$i) {
      echo "<span>".fib($j)."</span>";
    } elseif ($j == $a + ($i-2)) {
      echo "<span>".fib($a - $i)."</span>";
    } elseif ($i == $a - ($j-8)) {
      echo "<span>".fib($i)."</span>";
    }else {
      echo "<span>&nbsp;</span>";
    }
  } echo "<br>";
}
 ?>
