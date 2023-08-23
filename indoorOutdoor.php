<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Part 1.html</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="index.css">
<style>

.flex1{
    display: flex;
   justify-content: space-evenly;
   
 
 
}


.flex1 img{
    width: 32vw;
    height: 55vh;
}

#para{
    font-family:   'Arial Narrow', Arial, sans-serif;
    font-style: italic;
  
    padding: 40px 20px;
   color: black;
   font-weight: 600;
    background-color: whitesmoke;
   
}

.border{
    border: 9px solid black;
    box-shadow: 5px 5px 5px 5px rgba(13, 12, 12, 0.5);
    
}
.border img:hover{
    transition: 0.2s;
    transform: scale(1.1);
   
}

#para span{
    color:rgb(250, 250, 252);
    font-weight: 600;
   font-size: larger;
   background-color: rgba(14, 13, 13, 0.959);
    padding: 5px 5px;
}

</style>


</head>

<body>
  


    <section class="features-boxed">

        <div class="container">

            <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
                <div class="container"><a class="navbar-brand" href="#page-top">Greenspace Growers</a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav ms-auto text-uppercase">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home&nbsp;</a></li>
                           
                            <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="signup.php">sign-up</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

 <section class="flex">
       

       <div class="flex1">
             <p id="para"><span>Indoor spaces</span><br>
             Indoor gardening can be something as simple as growing <br>plants in a pot or two, to more elaborate setups growing different types<br> of vegetables, fruits, herbs, and flowers. Simply put, it's the act <br>of growing different produce inside your<br> home that you would otherwise grow outside.<br>
            <br> Do You Want your indoor spaces like that??<br>
             <a href="orderForm.php">Order Now</a></p>
 
            
            <div class="border"><img src="indoor.jpg" alt=""></div> 
       </div>
<br>
       <div class="flex1">
          <div class="border"><img src="outdoor.webp" alt=""></div> 
          <p id="para"><span>Outdoor spaces</span><br>
          A garden is a planned space, usually outdoors, set aside <br>for the cultivation, display, and enjoyment of plants and<br> other forms of nature. The single feature identifying even the <br>wildest wild garden is control. The garden can incorporate both <br>natural and artificial materials.
         <br> <br> Do You Want your outdoor spaces like that??<br>
             <a href="orderForm.php">Order Now</a> </p>
          
       </div>

  </section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><span class="copyright">Copyright&nbsp;© Greenspace Arrows 2023</span></div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="#">Terms of Use</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>

    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>