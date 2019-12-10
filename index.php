<?php
  $firstNumber = 18;
  $secondNumber = 25;
  $thirdNumber = 2;
  function FunctionName(int $numberOne = 1, int $numberTwo = 1, int $numberThree = 1)
  {
    $result = $numberOne + $numberTwo + $numberThree;
    echo 'Le somme des trois nombre vaut: ' . $result;
  }
  FunctionName($firstNumber, $secondNumber, $thirdNumber);
 ?>
