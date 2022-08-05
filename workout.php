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
    <title>Our Healthy LifeStyle</title> 
     <link rel="stylesheet" href="bootstrap.css">
    <script src="jquery.js"></script>
    <script src="popper.js"></script>
    <script src="bootstrap.js"></script>
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
                    <li class="nav-item "><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                            
					<li class="nav-item"><a class="nav-link" href="weightloss.php"  style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="Weightgain.php" style="width: 160px; text-align: center;">WEIGHTGAIN</a></li>
                    <li class="nav-item active"><a class="nav-link" href="workout.php" style="width: 130px; text-align: center;  border-bottom: 3px solid #77b300; font-size: 17px;">WORKOUT</a></li>
                    <li class="nav-item "><a class="nav-link" href="Yoga.php"  style="width: 110px; text-align: center;">YOGA</a> </li> 
                    <li class="nav-item"><a class="nav-link" href="contact.php"style="width: 110px; text-align: center;">CONTACT</a></li>  
                    <li class="nav-item"><a class="nav-link" href="signin.php"style="width: 110px; text-align: center;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
              
                </ul>
            </div>
        </div>
    </nav><br>
<section>
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 ">
            <img src="img/istockphoto-541602804-612x612.jpg" alt="" class="img-thumbnail img-fluid mx-auto d-block">
        </div>
    </div><br>
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " style="font-size:30px">
             <p><b><i>“Physical fitness is not only one of the most important keys to a healthy body, it is the basis of dynamic and creative intellectual activity.” </i></b>– John F. Kennedy</p>
        </div>
        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 " style="text-align: justify; font-size:18px; line-height:28px ;">
            <p>
                <b>-</b> In addition to dieting, the most common strategy is to get exercise from those trying to shed extra pounds. It burns calories and plays an important role in weight loss. In addition to helping you lose weight, exercise has been linked to a number of other benefits, including improved mood, stronger bones and a lower risk of many chronic diseases.<br><br>
                <b>-</b>Exercise is helpful for weight loss and maintaining weight loss. Exercise can increase metabolism, or how many calories you burn in a day. It can also help you maintain and increase lean body mass, which also helps increase number of calories you burn each day. The importance of exercise and regular physical activity is well-known.<br><br>
                <b>-</b>While busy lives, and lack of time leads to many of us not being able to inculcate regular exercise in our daily lives. It is important for one to feel more relaxed and energised.<br><br>
            </p>
       </div>
       <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <h1 style="text-align:center">-Outdoor Running-</h1>
       </div><br>
    </div>
    <div id="d1">
    <div class="card">
        <div class="card-header bg-dark">
            <a href="#collapseOne" class="card-link" data-toggle="collapse" style="color:white">
                <h4><u>1.Walking</u></h4></a>  
        </div>
        <div id="collapseOne" class="collapse show" data-parent="#d1" >
           <div class="card-body">
               <div class="row">
                     <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <img class="img-thumbnail img-fluid "src="img/walking.png" alt="" width="500" height="580">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align:justify;font-size:17px; line-height: 28px;">
                        <p>
                            <b>-</b>Walking is a great one Exercise for beginners, as it can be done anywhere, does not require equipment and puts minimal stress on your joints. Try to include more walks in your daily routine.<br><br>
                            <b>-</b>Walking for 30 minutes a day or more on most days of the week is a great way to improve or maintain your overall health.<br><br>
                            <b>-</b>You carry your own body weight when you walk. This is known as weight-bearing exercise. Some of the benefits include:<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>   1. increased cardiovascular and pulmonary fitness.</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>   2.reduced risk of heart disease and stroke</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>   3. reduced body fat.</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>   4. stronger bones and improved balance</b>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div id="d2">
        <div class="card">
            <div class="card-header bg-dark">
                <a class="card-link" data-toggle="collapse" href="#collapsetwo"style="color:White"><h4><u>2.Running</u></h4></a>  
            </div>
            <div id="collapsetwo" class="collapse show" data-parent="#d2">
               <div class="card-body">
                   <div class="row">
                         <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                            <img class="img-thumbnail img-fluid "src="img/running.png" alt="" width="500" height="580">
                        </div>
                        <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align:justify;font-size:17px; line-height: 28px">
                    <p>
                        <b>-</b>Running are great weight loss exercises that are easy for you to incorporate Weekly routines can also help burn belly fat, which is associated with many people, Chronic disease.<br><br>
                        <b>-</b> A beginner to exercise should start with brisk walking, progress to jogging and work up to running.<br><br>
                        <b>-</b>Regular running or jogging offers many health benefits. Running can:<br><br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> 1. strengthen muscles</b><br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> 2. improve cardiovascular fitness</b><br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> 3. burn plenty of kilojoules</b><br>
                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b> 4. help maintain a healthy weight.</b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div id="d3">
    <div class="card">
        <div class="card-header bg-dark">
            <a href="#collapsetow" class="card-link" data-toggle="collapse" style="color:white"><h4><u>3.Cycling</u></h4></a>  
        </div>
           <div id="collapsetow" data-parent="#d3" class="collapse show">
            <div class="card-body">
                <div class="row">
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <img src="img/cycling.png" alt="" class="img-thumbnail img-fluid mx-auto d-block" width="500px" height="580px">
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="text-align:justify ;font-size:20px; line-height:28px;">
                     <p>
                        <b>-</b>Cycling is great For people of all fitness levels and can be done on or off the bike This has been linked to a variety of health benefits on indoor stationary bikes, Insulin involves increasing sensitivity and reducing certain acute risks Disease.<br><br>
                        <b>-</b>Cycling can help to protect you from serious diseases such as stroke, heart attack, some cancers, depression, diabetes, obesity and arthritis.<br><br>
                        <b>-</b>The health benefits of regular cycling include:<br><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1. increased cardiovascular fitness</b><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2. improved joint mobility</b><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>3. improved posture and coordination</b><br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>4. reduced anxiety and depression.</b>
                     </p>
                  </div>
                </div>
             </div>
         </div>
    </div>
</div> 
<div id="d3">
         <div class="card">
            <div class="card-header bg-dark">
                <a href="#collapsethree"class="card-link" data-toggle="collapse" style="color:white"><h4><u>4.Swimming</u></h4></a>
            </div>
            <div id="collapsethree" class="collapse show" data-parent="#d3">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                       <img  class="img-thumbnail img-fluid" src="img/swimming.jpeg" alt="" width="500px" height="580px">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="font-size:20px;line-height:28px; text-align:justify;">
                        <p>
                            <b>-</b>Swimming is a great low-impact exercise for people looking to lose weight. Moreover, it may help improve your flexibility and reduce risk factors for various diseases.<br><br>
                            <b>-</b>Swimming is a great workout because you need to move your whole body against the resistance of the water. Swimming has many other benefits including:<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.improving flexibility</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2.alleviating stress</b><br>
                            &nbsp;&nbsp;<b>3.providing good low-impact therapy for some injuries and conditions</b>
                        </p>
                    </div>
                </div>
            </div>  
         </div>
    </div>
</div>
     <div id="d4">
          <div class="card">
            <div class="card-header bg-dark">
               <a href="#collapsefoure" class="card-link" style="color:white" data-toggle="collapse"><h4><u>5.Jump Rope</u></h4></a>
            </div>
            <div id="collapsefoure" data-parent="#d4" class="collapse-show">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                        <img src="img/jumprope.png" alt="" class="img-thumbnail img-fluid" width="500px" height="580px">
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" style="font-size:20px; line-height:28px; text-align: justify;">
                        <p>
                            <b>-</b>Jumping rope is a great way to burn calories while improving cardiovascular health, all-over-toning, and coordination, and it will help build power while lowering your risk of injury.<br><br>
                            <b>-</b>Jumping rope is one of the most underrated types of exercise — and it may even be more effective than other forms of cardio. Swimming has many other benefits including:<br><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>1.Burns calories</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>2.Improves coordination</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>3.Reduces injury risk</b><br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>4.Improves heart health</b><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    </div>
</div>
</div>
</div>
</div>

</section>
    <footer class="bg-dark">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4 style="text-align:center; color:white;">@ 2022 Healty Lifestyle . All Copy Rights Reserved. </h4>
			</div>
		</div>
	</footer>