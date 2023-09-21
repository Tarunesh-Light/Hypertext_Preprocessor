<?php

$num1=[1,2,4,5];
$num2= array(1,'Tarun','Beet');

if(in_array(4,$num1))
{
  echo "TARUNESH";
}
print_r($num1);
print_r($num2);
var_dump($num1);
echo $num1[1];

//Asssociative Array
$color=[
1 => 'r',
2=> 'e'
];

echo $color[1];

//Using Arrays as Database

$person1 = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
  ];
  
  // Array of people
$people = [
    $person1, //   [...$person1]
    [
      'first_name' => 'John',
      'last_name' => 'Doe',
      'email' => 'john@gmail.com',
    ],
    [
      'first_name' => 'Jane',
      'last_name' => 'Doe',
      'email' => 'jane@gmail.com',
    ],
  ];
  
  var_dump($people);
  
  // Accessing values in a multi-dimensional array
  echo $people[0]['first_name'];
  echo $people[2]['email'];


?>

