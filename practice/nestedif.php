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
  $uname="Pooja";
  $pass="Pooja@7759";
   if($uname==="Pooja"){
       if($pass==="Pooja@7759"){
           echo "Welcome : ".$uname;
       }
       else {
           echo "Enter Correct Password";
       }
   }
   else {
       echo "Enter corrcet Uname";
   }
?>

</body>
</html>