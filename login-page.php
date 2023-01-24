<?php 
include 'db-connection.php';
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM twitter where email='$email' && password='$password'";
    $run=mysqli_query($con,$sql);
    $row=mysqli_num_rows($run);
    if($row){
       
        header("location:index.html");
    }
    else{
      ?>
      <script>alert("invalid password")</script>
      <?php
    }
    


}
?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="login-page">
        <div class="box">
            <img src="image/twitter.jpg" class="twitter-img" alt="">
        
        <button class="google-cls">
            <img src="image/google.png" alt="" class="google-img">
            <span>login with google</span>
        </button>
        <button class="apple-class">
            <img src="image/index.png" alt="" class="apple-img">
            <span>login with apple</span>
        </button>
    </div>
    <h5 class="h5">or</h5>
    <div class="box box2">
        <form method="POST" action="">
            <input class="input" type="text" name="email" placeholder="email">
            <input class="input" type="password " name="password" placeholder="password">
            <button class="forget" name="submit" type="submit">login</button>
        </form>
        <!-- <button class="next-btn">Next</button> -->
        
    </div>
    <p class="p"> Don't have an account <a class="sing" href="sign-up.php">sign-up</a></p>

    </div>


    
</body>
</html>