<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program</title>
    <style>
       table
       {
        background:black;
        color:white;
       }
       
    </style>
</head>
<body>
<h1>      Wap to assign 10 values in an array and find the largest and smallest value? </h1>

<?php
// PHP Program to Find Largest and Smallest Element in Array using For loop

$x = [73, 42, 423, 42, 342, 14,500,50,1000,1];

// $x - To store array list of input numbers
// $b - To store big element variable
// $sm - To store small element variable

// This will stored the first element of the array to check the element
$b = $x[0];

for ($i = 1; $i < count($x); $i++) {
    
    // This will check one by one with each value of array
    // To compare the value is smallest or largest
    if ($b < $x[$i]) {
        $b = $x[$i];
    }
}
echo "The largest element is: ", $b, "<br/>";

// This will stored the first element of the array to check the element
$sm = $x[0];

for ($i = 1; $i < count($x); $i++) {
    
    // This will check one by one with each value of array
    // To compare the value is smallest or largest
    if ($sm > $x[$i]) {
        $sm = $x[$i];
    }
}
echo "The smallest element is: ", $sm, "<br/>";

?>

</body>
</html>