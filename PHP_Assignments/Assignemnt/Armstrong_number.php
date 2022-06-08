<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> </title>
    <!-- <style>
       body
       {
        background:blac;
       }
    </style> -->
</head>
<body>

<h1>Wap to assign a value in a variable and find it is armstrong number or not ? </h1>
<?php
    function armstrongCheck($number){
        $sum = 0; 
        $x = $number; 
        while($x != 0) 
        { 
            $rem = $x % 10; 
            $sum = $sum + $rem*$rem*$rem; 
            $x = $x / 10; 
        } 
        if ($number == $sum)
        return 1;
        return 0;
    }
    $number = 370;
    $flag = armstrongCheck($number);
    if ($flag == 1)
        echo "370 is armstrong number";
    else
        echo "370 is not armstrong number"

      
?>

</body>
</html>