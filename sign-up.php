
<?php
include "db-connection.php";
if (isset($_POST['submit']))
    {
       $name=$_POST['username'];
       $email=$_POST['email'];
       $password=$_POST['password'];
       $confirm_password=$_POST['confirm_password'];

      $sql="INSERT INTO twitter (name,email,password,confirm_password) 
      VALUES ('$name','$email','$password','$confirm_password')";
      $run=mysqli_query($con,$sql);
      if($run){
        ?>
        <script> alert('data submit')</script>
        <?php
      }else{
        ?>
        <script>alert('data not submit')</script>
        <?php
      }

    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Document</title>
</head>



<body>

    <div class="signup-container">
        <div class="signup">
            <form onsubmit="return validate()" method="POST">
                <div class="login-page">
                    <div class="box">
                        <img src="image/twitter.jpg" class="twitter-img" alt="">

                        <button class="google-cls">
                            <img src="image/google.png" alt="" class="google-img">
                            <span>sign in with google</span>
                        </button>
                        <button class="apple-class">
                            <img src="image/index.png" alt="" class="apple-img">
                            <span>sign in with apple</span>
                        </button>
                        <h5 class="h5">or</h5>
                        <div class="content-input">
                            <input name="username" id="name"type="text" placeholder="enter your name">
                            <input name="email" id="email" type="text" placeholder="email">
                            <input name="password" id="password"type="password" placeholder="enter password">
                            <input name="confirm_password"id="confirm-password" type="password" placeholder="confirm password">

                        </div>
                        <button type="submit" name="submit" class="submit">submit</button>
                        <p class="p"> i have an account <a class="sing" href="login-page.php">login</a></p>
                    </div>
                </div>
        </div>
        </form>
    <script>
        function validate(){
            var username=document.getElementById('name').value;
            
           
            var email=document.getElementById('email').value;
            var password=document.getElementById('password').value;
            var confirm_password=document.getElementById('confirm-password').value;
            if(username==""){
                alert("Name must be filled out");
                return false;
            }
            if(email=="")
            {
                alert("email must be filled out");
                return false;
            }
            if(password==""){
                alert("password must be filled out");
                return false;
            }
            if(confirm_password==""){
                alert("confirm_password must be filled out");
                return false;
            }
           
            if(password!=confirm_password){
                alert("Password and confirm_password dose not matched");
                return false;
            }

        }
    </script>
        
        
</body>

</html>