<?php 

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <style>
          body{
            background-image: url('images/images.jpg');
            background-repeat: no-repeat;
            background-size:100%;
        }
    </style>
  </head>
  <body>
    <main class="container">
        <div class="p-5 my-4 bg-light rounded-3 text-center">
            <h1 class="text-center text-success"> Welcome User </h1>
            <h5> Your registered id is <?= $_GET['uid'];?></h5>
            <p>For go to login page <a href="index.php">Click Here</a></p>
        </div>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>