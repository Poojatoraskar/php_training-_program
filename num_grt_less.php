<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Program</title>
    <style>
       body
       {
        background:olive;
       }
    </style>
</head>
<body>

<?php 
   $num1=245;
   $num2=345;
   $num3=45;
   if($num1>$num2 && $num1>$num3){
       echo "Num1 is greater";
   }
   else if($num2>$num1 && $num2>$num3){
    echo "Num2 is greater";
    }
    else {
        echo "Num3 is greater";
    }
  
?>

</body>
</html>