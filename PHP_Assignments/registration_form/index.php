<?php 
 if(isset($_POST['login'])){
     $email=$_POST['email'];
     $pass=$_POST['password'];
   
     if(empty($email) || empty($pass)){
        $errMsg="Please fill blank fields";
     }
     else {
        
         if(is_dir("users/$email"))
         {
           $fo=fopen("users/$email/details.txt","r");
           fgets($fo);
           $password=trim(fgets($fo));
           if($pass==$password){
               session_start();
               $_SESSION['sid']=$email;
              header("location:profile.php");
           }
           else {
               $errMsg="Enter correct password";
           }
         }
         else {
             $errMsg="Enter correct email";
         }
     }
 }
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>login form</title>
    <style>
        .loginmain{
            width: 500px;
            height:480px;
            margin:0px auto;
            background: #045394;
        }
        body{
            background-image: url('images/images.jpg');
            background-repeat: no-repeat;
            background-size:100%;
        }
    </style>
  </head>
  <body>
    <main class="container">
            <div class="loginmain rounded p-3 mt-5">
                <div class="p-2 my-4 text-white">
                    <h1> Login Here</h1>
                </div>
                    <section>
                            <?php
                                    if(isset($errMsg))
                                    {
                                        ?>
                                    <div class="alert alert-danger"><?= $errMsg;?></div>
                                        <?php 
                                    }
                                ?>
                            <form method="post">
                                    <div class="form-group">
                                        <label class="text-white"> Email </label>
                                        <input type="email" name="email" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white"> Password </label>
                                        <input type="password" name="password" class="form-control"/>
                                    </div>
                                    <div class="form-group">
                                        <input type="checkbox" name="c1"/>
                                        <label class="text-white"> Remember Me </label>
                                    </div>
                                    <div class="form-group mt-3">
                                        <input type="submit" class="btn btn-success px-4" value="Login" name="login"/>
                                        <label> <a href="registration_form.php">New User </a></label>
                                    </div>
                            </form>
                    </section>
            </div>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>