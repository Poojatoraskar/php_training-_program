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
<h1> Wap to assign a value in a variable and find its table upto 10 ?</h1>
<table align="center" border='1' width="100%">
<?php

$num = 10;

for($i = 1; $i <= 10; $i++)
{	
    echo "<tr>";
	
	for($j =1; $j <= $num; $j++)
	{
		$multiplication_table = ($i * $j);
		echo "<td>$j  x $i =  $multiplication_table </td>";
	}
	
	echo "<tr/>";
}
?>
</table>

</body>
</html>