<h1>Hello</h1>

// Echo - Output strings, numbers, html, etc
<br>

<?php 
echo "Kira";
echo 1;
?>

<br>
// print - Similar to echo, but can take only single argument and slower compared to echo 
<br>

<?php 
print 'Hello';
?>

<br>
// print_r - Gives a bit more info. Mainly used to print arrays
<br>

<?php
print_r('Hello');
echo "<br />";
print_r([1, 2, 3]); 
?>

<br>
// var_dump - Returns more info like data type and length
<br>

<?php
var_dump('Hello');
echo "<br />";
var_dump([1, 2, 3]);
?>

<br>
// var_export - Similar to var_dump.Ouput strings as variable(with quotes)
<br>

<?php
var_export('Hello');
?>

//Output

Hello
// Echo - Output strings, numbers, html, etc
Kira1
// print - Similar to echo, but can take only single argument and slower compared to echo
Hello
// print_r - Gives a bit more info. Mainly used to print arrays
Hello
Array ( [0] => 1 [1] => 2 [2] => 3 )
// var_dump - Returns more info like data type and length
string(5) "Hello"
array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
// var_export - Similar to var_dump.Ouput strings as variable(with quotes)
'Hello'