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
<h1>  Wap to find the odd numbers between 1 to 100 </h1>
<table align="center" border='1' width="100%">
<?php
 
 $num = 1;
 while ( $num <= 100 ) {
  
   echo "$num <br/>";
   $num += 2;
   
 }
  
 ?>
 </table>
</body>
</html>