<?php
$start = microtime(true);
$string = "254235432356120";

echo "Result:".mergeSort($string)."\n";

function mergeSort($string) {
  $result = '';
  if (strlen($string) <= 1) {
    return $string;
  } else {
    $mid = round(strlen($string) / 2);
    $left = mergeSort(substr($string, 0, $mid));
    $right = mergeSort(substr($string, $mid));
    $result = merge($left, $right);
  }
  return $result;
}

function merge($left, $right) {
  $result = '';
  while (strlen($left) > 0 && strlen($right) > 0) {
    if ($left[0] > $right[0]) {
        $result .= $left[0];
        $left = substr($left, 1);
    } else {
        $result .= $right[0];
        $right = substr($right, 1);
    }
  }
  if (strlen($left) > 0) {
    $result .= $left;
  }
  if (strlen($right) > 0) {
    $result .= $right;
  }
  return $result;
}

echo "Execution time: ".(microtime(true) - $start)." sec.\n";

?>
