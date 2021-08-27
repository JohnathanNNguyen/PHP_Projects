<?php

// Conditionals

// $num = 5;

// if($num == 6){
//   echo '6 Passed';
// }elseif($num == 5){
//   echo '5 passed';
// }else {
//   echo 'Didn\'t pass';
// };

// Nesting If

// xor means only one has to be true but not both

$num = 5;

// if($num > 4){
//   if($num < 10){
//     echo 'just right';
//   };
// };

// if ( $num > 4 && $num < 10 ){
//   echo "$num passed!";
// };

// Switch

$favColor = 'blue';

switch($favColor){
  case 'red':
    echo 'Your favorite color is red';
    break;
  case 'blue':
    echo 'Your favorite color is blue';
    break;
  case 'green':
    echo 'Your favorite color is green';
    break;
  default:
    echo 'Your favorite color is something else';
}
