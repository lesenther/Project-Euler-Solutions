<?php

/**
 * Multiples of 3 and 5
 * Problem 1 
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 *
 * Find the sum of all the multiples of 3 or 5 below 1000.
 *
 */
 
echo call_user_func(function($values = [3, 5], $limit = 1000) {

  $multiples = [];

  for ($i = 0; $i < $limit; $i++) {
    foreach ($values as $value) {
      if ($i % $value === 0) {
        $multiples[] = $i;

        break;
      }
    }
  }

  return array_sum($multiples);

}) . "\n";
