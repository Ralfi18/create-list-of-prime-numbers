<?php
//Enter your code here, enjoy!




function getPrimes($number) {
  $primes = "";
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
    }
  }
  return rtrim($primes, ", ");
}

print_r(getPrimes(100));
