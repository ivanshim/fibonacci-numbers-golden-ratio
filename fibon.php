<?php

// fibonacci numbers and golden ratio
// Ivan's bored doodlings
// Ivan Shim 2021 July 20th

echo 'fibonacci sequence: '."\n";

$i = 1;
$j = 0;
$k = 1;
while ($i<=40) {
  echo $i;
  $i++;
  echo ', ';
  $l = $k + $j;
  $j = $k;
  $k = $l;
  echo $j;
  echo ', ';
  echo $k/$j;
  echo "\n";
}

echo "\n";
echo 'golden ratio: '.((1+sqrt(5))/2)."\n";
echo 'the ratio of 2 consecutive Fibonacci numbers tends to the golden ratio as n increases'."\n";

?>
