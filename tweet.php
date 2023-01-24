<?php 
include "db-connection.php";
 if (isset($_POST['submit'])){
  $heading=$_POST['heading'];
  $about_tweet=$_POST['about_tweet'];
  $sql="INSERT INTO tweet_post(heading,about_post) VALUES('$heading','$about_tweet')";
  $run=mysqli_query($con,$sql);
  if($run){
    ?>
    <script> alert('post successfully')</script>
    <?php
  }else{
    ?>
    <script>alert('something error')</script>
    <?php
  }
 }
 $sql = "SELECT * FROM tweet_post WHERE user_id=3";
 $run=mysqli_query($con,$sql);
 if(mysqli_num_rows($run))
 {
  $fetch = mysqli_fetch_array($run); 
  echo $heading=$fetch['heading'];
  echo $about_post=$fetch['about_post'];
 }
 else{
  echo 'error';
 }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>tweet</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="style2.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="tweet">
        <img src="image/twitter.jpg" class="tweet-img" alt="">
        <div class="input_field">
          <form action="" method="POST">
        <input type="text" name="heading" class="input-heading"placeholder="heading for tweet">
        <input type="text" name="about_tweet" class="input-tweet "placeholder="tell about your tweet">
        <button  name="submit" class="tweet-button">tweet</button>
        </form>
    </div>
      </div>
   </body>
</html>