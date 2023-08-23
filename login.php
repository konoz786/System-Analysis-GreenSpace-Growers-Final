<?php
include 'connect.php';

if(isset($_POST["submit"])){
 
   $email= mysqli_real_escape_string($con,$_POST["email"]);
   $pass= $_POST["password"];
 

   $query = "SELECT * FROM user_t WHERE email='$email'&& password='$pass'";
   $result= mysqli_query($con,$query);

   if(mysqli_num_rows($result)==0){
      $x[]="User doesn't exist";
     
   }
   else{
    header('location:customer.php');
   }
   
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Myeongjo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" >
    <title>LOGIN</title>
    <link rel="stylesheet" href="login.css">
</head>




<body>


 <div class="container">
    <div class="box1">
        <img src="green.jpg" >
    </div>
      
    <div class="box2">
        <div class="innerbox">
           
        <form action="" method="POST">
                  
            <h1>LOGIN</h1>
            <?php
              if(isset($x)){
                  foreach($x as $x){
                    echo '<span class="error-msg">'.$x.'</span>';
                  }
              }
            ?>

                <span>Enter Your Email</span><br>
                <input type="text" name="email" placeholder="Email" required><br>

                <span>Enter Your Password</span><br>
                <input type="password" name="password" placeholder="Password" required><br>

              
                <input type="submit" name="submit" value="Submit">
            </form>
        </div>
    </div>


</div>
</body>
</html>