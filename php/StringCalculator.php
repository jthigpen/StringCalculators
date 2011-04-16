<?php
class StringCalculator
{
  public function add($numberString) {
    if ($numberString === 0) {
      return 0;
    }

    $containsCustomDelimiter = strpos($numberString, "//");

    if ($containsCustomDelimiter === 0) {
      $delimiter = substr($numberString, 2, 1);
      $numberString = substr($numberString, 4);
      $numberArray = explode($delimiter, $numberString);
    } else {
      $numberArray = preg_split("/[\n,]+/", $numberString);
    }

    $sum = 0;
    foreach ($numberArray as $number) {
      $sum += (int) $number;
    }
    return $sum;
  }
}
?>
