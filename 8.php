<style media="screen">
  span {
    display: inline-block;
    min-width: 20px;
    min-height: 15px;
  }
</style>

<?php
$num = 50;
for ($i=1; $i < $num; $i++) {
  for ($j=1; $j < $num; $j++) {
    if ($j >= $i && $j <= $num-$i) {
      if (($i % 2) == 0) {
        echo "<span></span>";
      } else {
        echo "<span>".$i."</span>";
      }
    } elseif ($j <= $i && $j <= $num-$i) {
      if (($j % 2) == 0) {
        echo "<span></span>";
      } else {
        echo "<span>".$j."</span>";
      }
    } elseif ($j <= $i || $j <= $num-$i) {
      if (($num - $i) % 2 == 0) {
        echo "<span></span>";
      } else {
        echo "<span>".($num - $i)."</span>";
      }
    }elseif ($j >= $i || $j <= $num-$i) {
      if (($num - $j) % 2 == 0) {
        echo "<span></span>";
      } else {
        echo "<span>". ($num - $j)."</span>";
      }
     }else {
      echo "&nbsp;";
    }
  } echo "<br>";
}
 ?>
