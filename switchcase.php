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
  $num1=10;
  $num2=5;
  $choice="++";
  switch($choice){
      case '+' : $res=$num1+$num2;
        break;
      case '-' : $res=$num1-$num2;
       break;
       default : $res="Invalid choice";
  }
  echo $res;
?>

</body>
</html>