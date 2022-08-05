<?php
  session_start();
  error_reporting(0);
  if(!$_COOKIE['cname']){
    
    header('Location: login.php');
 
  }else{
    if(isset($_SESSION['sname'])){      
    }
   else{
   header('Location: login.php');
}
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Our Healthy LifeStyle</title>
    <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
    <style>
        #link:hover{
            font-size: 25px;
        }
        #zoom:hover{
            transform: scaleX(-1);
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-5 col-sm-5 col-md-6 col-lg-6 col-xl-6">
                    <img src="img/logo.png" class="img-fluid mx-auto" height="70" width="170">
                </div>

                <div class="col-7 col-sm-7 col-md-6 col-lg-6 col-xl-6">
                    <form class="form-inline" style="margin-top: 35px; margin-left: 60px;">
                        <div class="input-group">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search....">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
            <nav class="navbar navbar-expand-md bg-dark navbar-dark sticky-top">
                <div class="container-fluid">

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item active" style="border-bottom: 3px solid #77b300; font-size: 17px;"><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                           
                             <li class="nav-item"><a class="nav-link" href="weightloss.php"  style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
                            <li class="nav-item"><a class="nav-link" href="Weightgain.php" style="width: 160px; text-align: center;">WEIGHTGAIN</a></li>
                            <li class="nav-item"><a class="nav-link" href="workout.php" style="width: 130px; text-align: center;">WORKOUT</a></li>
                            <li class="nav-item"><a class="nav-link" href="Yoga.php"  style="width: 110px; text-align: center;">YOGA</a> </li> 
                            <li class="nav-item"><a class="nav-link" href="contact.php"style="width: 110px; text-align: center;">CONTACT</a></li>        
                            <li class="nav-item"><a class="nav-link" href="signin.php"style="width: 110px; text-align: center;">SIGN IN</a></li>        
                            <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>        
                            <li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
                        </ul>
                    </div>
                </div>
            </nav>

            <section>
            <div class="container">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                           <div class="carousel-item active">
                               <img src="img/run.jpg" class="d-block " alt="..." height="460" width="1100">
                               <div class="carousel-caption">
                                <h1><a href="HealthyFood.html" style="color: white;">Track Your Active LifeStyle</a></h1>
                              </div>
                           </div>
                           <div class="carousel-item">
                               <img src="img/Lifestyle.jpg" class="d-block " alt="..." height="460" width="1100">
                               <div class="carousel-caption">
                                <h1><a href="GoodHabbit.html" style="color: white;">Good Habits for a Healthy Life</a></h1>
                              </div>
                           </div>
                           <div class="carousel-item">
                               <img src="img/yoga2.jpg" class="d-block " alt="..." height="460" width="1100">
                               <div class="carousel-caption">
                                <h1><a href="Yoga.html" style="color: white;">Yoga for Healthy Living</a></h1>
                              </div>
                           </div>
                    </div>

                           <!-- Left and right controls -->
                    <a class="carousel-control-prev"  data-target="#carouselExampleIndicators"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>

                    <a class="carousel-control-next"  data-target="#carouselExampleIndicators"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-xl-12">
                        <h1 style="text-align:center;">- About -</h1>
                        <p style="font-size: 20px; line-height: 28px; text-align: justify;">
                            Good nutrition, daily exercise and adequate sleep are the foundations of healthy living. A healthy lifestyle keeps you fit, energetic and at reduced risk for disease. According to WHO, Healthy living is a way of living that helps you enjoy more aspects of your life. It is a way of living that lowers the risk of being seriously ill or dying early. Health is not just about avoiding a disease or illness. It is about physical, mental and social well-being too. <br><br>
                            When you adopt a healthy lifestyle, you provide a more positive role model for other people in your family, particularly children. You will also create a better environment for them to grow up in. By helping them to follow a healthier lifestyle, you will be contributing to their wellbeing and enjoyment of life now and in the future. <br><br>
                            Managing stress in positive ways, instead of through smoking or drinking alcohol, reduces wear and tear on your body at the molecular level. For a longer and more comfortable life, you should adopt a healthy life style.
                        </p>
                    </div>
                </div>
            </div>
          <div class="container">
             <br><hr><br>
             <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                 <a href="weightloss.php" style="color:#77b300"><img  id="zoom" src="img/yoga1.jpg" alt="" class="img-thumbnail  mx-auto img-fluid d-block">
                <h4 id="link"style="text-align:center; color:#77b300">Pick a Plan for Weight Loss</h4></a> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                   <a href="weightloss.php" style="color:#77b300"><img id="zoom"  src="img/top10.png" alt=""  class="img-thumbnail  mx-auto img-fluid d-block">
                   <h4 id="link" style="text-align:center; color:#77b300">List of Top 10’s for Weight Loss</h4></a> 
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <a href="weightlossdiet.php" style="color:#77b300"><img  id="zoom" src="img/istockphoto-639389404-1024x1024.jpg" alt="" class="img-thumbnail  mx-auto img-fluid d-block">
            <h4 id="link" style="text-align:center; color:#77b300">Weight Loss Diet for Indians</h4></a> 
             </div>
             </div><br><br>
             <div class="row">
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <a href="1weekdiet.php" style="color: #77b300"><img id="zoom" src="img/Weight-Loss-1.jpg" alt="" class="img-thumbnail  mx-auto img-fluid d-block">
                <h4 id="link" style="text-align: center; color:#77b300">7 Day's Diet for Weight Loss</h4></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <a href="Weightgain.php" style="color:#77b300"><img id="zoom" src="img/HealthyEating.jpg" alt=""class="img-thumbnail  mx-auto img-fluid d-block">
                <h4 id="link" style="text-align: center; color:#77b300">Diet Plan for Weigth Gain</h4></a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
               <a href="workout.php" style="color:#77b300"> <img id="zoom" src="img/running3.png" alt="" class="img-thumbnail  mx-auto img-fluid d-block">
               <h4 id="link" style="text-align: center; color:#77b300">Different Types of Exercise</h4></a>
                </div>
             </div><br><br>
             <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h4 style="text-align: justify;"><b>"The greatest miracle on Earth is the human body. It is stronger and wiser than you may realize, and improving its ability to self– heal is within your control."</b></h4>
                    <h5 align="right">- Dr Fabrizio Mancini</h5>
                </div>
            </div>
          </div>
    </section> <br><br><br>
    <footer class="bg-dark">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4 style="text-align:center; color:white;">@ 2022 Healty Lifestyle . All Copy Rights Reserved. </h4>
			</div>
		</div>
	</footer>
</body>

</html>