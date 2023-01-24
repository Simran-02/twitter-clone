<?php
include "db-connection.php";
$email_id = "simrankumaridga@gmail.com";
$sql = "SELECT * FROM twitter WHERE email = '$email_id'";
// echo $sql;die;
$run = mysqli_query($con, $sql);

if (mysqli_num_rows($run)) {
    $fetch = mysqli_fetch_array($run);
    $userName = $fetch['name'];
    $userEmail = $fetch['email'];
   
} else {
    echo "Record not found";
} 
if(isset($_POST['submit'])){
    $userName = $fetch['name']; 
    $userEmail = $fetch['email'];

    echo $sql="UPDATE twitter SET name='$userName' WHERE user_id=23"; die;
  
    $run=mysqli_query($con,$sql);
    if($run){
        ?>
        <script>alert('Updated data successfully')</script>
        <?php
    }else{
       ?> 
       <script>alert('not updated')</script><?php  
    }

}
?>




<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
</head>

<body>

    <div class="signup">
        <form onsubmit="return validate_form()" method="POST">
            <div class="login-page">
                <div class="box">
                    <img src="image/twitter.jpg" class="twitter-img" alt="">
                    <div class="content-input">
                        <div class="edit-form">
                            <input name="username" id="name" type="text" 
                            placeholder="enter your name" value=<?php echo $userName; ?>>
                            <input name="email" id="email" type="text" placeholder="email" 
                            value=<?php echo $userEmail; ?>>

                        </div>
                    </div>
                    <button type="submit" name="submit" class="submit2">Update profile</button>

                </div>
            </div>
    </div>
    <script>
    function validate_form(){
    var user_name=document.getElementById('name').value;
    var email=document.getElementById('email').value;
    if(user_name==''){
        alert("Name must be field out");
        return false;
    }
    if(email==""){
        alert("email must be filled out");
    }
   }
</script>

</body>

</html>