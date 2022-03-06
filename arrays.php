<?php
/*
  Array - variable that holds multiple values
    -indexed
    -assoicative
    -multi-dimensional
*/

  // Indexed
  //
  $people = array('Alpha', 'Beta', 'Omega');
  $cars = ['honda', 'toyota', 'ford'];
  $cars[3] = 'chevy';
  $cars[] = 'fiat';
  // echo count($cars);
  // print_r($cars); prints entire array
  // var_dump($cars);

  // Associative
  //
  $places = ['first' => 1, 'third' => 3, 'fifth' => 5];
  $places['second'] = 2;
  // echo $places['third'];

  // Multi-Dimensional
  //
  $years = [
    array(2022, 'jan', 'feb', 'march'),
    array(2021, 'jan', 'feb', 'march', 'april', 'may',),
    array(2020, 'jan', 'feb', 'march', 'april', 'may',)
  ];
  // echo $years[0][1];
  // print_r($years);
?>