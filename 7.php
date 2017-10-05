<style media="screen">
  span {
    display: inline-block;
    min-width: 30px;
    min-height: 15px;
  }
</style>

<?php
$num = 10;

function fib($num) {
  if ($num <= 1) {
    return $num;
  } else {
    return (fib($num-2) + fib($num-1));
  }
}

for ($i=1; $i < $num; $i++) {
  for ($j=1; $j < $num; $j++) {
    if ($j >= $i && $j <= $num-$i) {
      echo "<span>".fib($i)."</span>";
    } elseif ($j <= $i && $j <= $num-$i) {
      echo "<span>".fib($j)."</span>";
    } elseif ($j <= $i || $j <= $i-$num) {
      echo "<span>".fib($num - $i)."</span>";
    }elseif ($j >= $i || $j <= $i-$num) {
       echo "<span>".fib($num - $j)."</span>";
     }else {
      echo "&nbsp;";
    }
  } echo "<br>";
}
 ?>
