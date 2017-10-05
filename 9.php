<style media="screen">
  span {
    display: inline-block;
    min-width: 50px;
    min-height: 30px;
  }
</style>

<?php
// NOTE : BUG FIXED!
// NOTE : MAX NUMBER 80
$num = 10;

function fib($num)
{
  if ($num < 2) {
    return 1;
  } else {
    return fib($num - 1) + fib($num - 2);
  }
}

for ($i=1; $i <= $num; $i++) {
  for ($j=1; $j <= $num; $j++) {
    if ($j >= $i && $j <= $num-$i) {
      if ($i % 2 == 0) {
        echo "<span></span>";
      } else {
        echo "<span>".round(fib($i/2))."</span>";
        }
    } elseif ($j <= $i && $j <= $num-$i) {
      if ($j % 2 == 0) {
        echo "<span></span>";
      } else {
          echo "<span>".round(fib($j/2))."</span>";
          }
    } elseif ($j <= $i || $j <= $i - $num) {
      if (($num - $i) % 2 == 0) {
        echo "<span></span>";
      } else {
        echo "<span>".round(fib(($num - $i)/ 2))."</span>";
        }
    } elseif ($j >= $i || $j <= $i - $num) {
      if (($num - $j) % 2 == 0) {
        echo "<span></span>";
      }else {
        echo "<span>".round(fib(($num - $j)/ 2))."</span>";
        }
    }else {
      echo "&nbsp;";
    }
  } echo "<br>";
}
 ?>
