<?php

// $people = array('Johnathan', 'Jose',  'Michelle');

// foreach($people as $person){
//   echo $person;
//   echo '<br>';
// };


$people = array('Johnathan' => 'haungocvo@gmail.com', 'Jose'=> 'Jose@gmail.com',  'Michelle'=> 'mho@sbglobal.com');

foreach($people as $person => $email){
  echo $person. ': ' . $email;
  echo '<br>';
};
