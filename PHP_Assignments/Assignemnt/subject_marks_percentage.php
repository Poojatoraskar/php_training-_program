<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wap to assign 5 subject marks in 5 variables and find their total , percentage and grade </title>
    <style>
       body
       {
        background:olive;
       }
    </style>
</head>
<body>

<h1>Wap to assign 5 subject marks in 5 variables and find their total , percentage and grade </h1>

<?php

$sub_1 = 95;
$sub_2 = 85;
$sub_3 = 74;
$sub_4 = 64;
$sub_5 = 53;

$total = NULL;
$average = NULL;
$percentage = NULL;
$grade = NULL;


$total = $sub_1 + $sub_2 + $sub_3 + $sub_4 + $sub_5;
$average = $total / 5.0;
$percentage = ($total / 500.0) * 100;

if ($average >= 90)
    $grade = "A";
else if ($average >= 80 && $average < 90)
    $grade = "B";
else if ($average >= 70 && $average < 80)
    $grade = "C";
else if ($average >= 60 && $average < 70)
    $grade = "D";
else
    $grade = "E";

// It will print the final output
echo "The Total marks   = " . $total . "/500\n <br/>";
echo "The Average marks = " . $average . "\n <br/>";
echo "The Percentage    = " . $percentage . "%\n <br/>";
echo "The Grade         = '" . $grade . "'\n <br/>";

?>

</body>
</html>