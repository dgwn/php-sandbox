<?php
// comment
# comment
/*
multiline comment

Variables
  - prefix $
  - Start with letter or underscore
  - ony letters nums, underscores
  - cAsE SensItIvE

Data Types
  - Strings
  - Integers
  - floats
  - Booleans
  - Arrays
  - Objects
  - NULL
  - Resource
*/
  $output = 'Hello World';
  $num1 = 4;
  $num2 = 10;
  $sum = $num1 + $num2;

  $string1 = 'hello';
  $string2 = 'world';
  $greeting = $string1 . ' ' . $string2;
  $greeting2 = "$string1 $string2";

  $float1 = 4.4;
  $bool1 = true;

  define('GREETING', 'Hello Everyone');

  echo $output;
  print $sum;
  echo GREETING;
?>