


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Assignments</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>		 
		
	</style>
</head>

<body>
    
  <div class="container">
      <h2> image gallery</h2>
      <div class="row">
        <?php
            $sd=scandir("images");
            foreach($sd as $s){
                if($s!=".." && $s!="."){
                    ?>
                    <div class="col-sm-4">
                        <img src="images/<?= $s;?>" width="200" height="200"/>
                     </div>
                    <?php
                }
            }
        ?>
      </div>
</div>
</body>

</html>