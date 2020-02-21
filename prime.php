<?php
/**
 * @var int $number [ the end number for iteration ]
 * @var int $offset [ optional! Default value 2, represents the number from which to start the iteration ]
 */
function getPrimes($number) {
  $primes = "";
  $test = -1;
  for($x = 2; $x < $number; $x++) {
    $flag = false;
    for($i = 2; $i < $x; $i++) {
      if($x % $i === 0) {
        $flag = true;
        break;
      }
    }
    if( ($i == 2 || $i % 2 != 0 ) && !$flag ) {
      $primes .= $i . ", ";
      if($number % $i == 0 && $i < $number) {
        $test = $i;
      }

    }
  }
  echo "Selected number: " . $number;
  echo "<hr>";
  echo "The largest prime is: ",  $test;
  echo "<hr>";
  echo "List of primes until '{$number}': " . rtrim($primes, ", ");
}

getPrimes(20);
