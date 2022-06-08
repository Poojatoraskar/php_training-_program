<!DOCTYPE html>
<html>
    <head>
        <style>
           body{
            background:skyblue;
           }
        </style>
</head>
<body>

<h1>Even odd number</h1>
<span> number 245 is</span>
<?php 
   $num=245;
   if($num%2==0){
       echo "Even";
   }
   else {
       echo "Odd";
   }
?>
</body>
</html>
