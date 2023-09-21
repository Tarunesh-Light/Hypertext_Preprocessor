<?php

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/

$num=1;

if($num>1)
{
    echo "Number is greater";
}

elseif($num==1)
{
    echo "Number is 1";
}

//Ternary Operator
$ternary = ($num==1) ? "Numberrr" : "Hello";
echo "$ternary";

//Switch
switch($num)
{
    case 1:
        echo "VALID";
        break;
    case 2:
        echo "INVALID";
        break;
}

?>