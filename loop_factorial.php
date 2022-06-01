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
  $num=4;
  $fact=1;
  for($i=$num; $i>=1 ; $i--){
      $fact*=$i;
  }
  echo "The factorial is ".$fact;
?>

</body>
</html>