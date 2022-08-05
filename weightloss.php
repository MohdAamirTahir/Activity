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
<html>
<head>
	<title>Our Healthy LifeStyle</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="popper.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>	
	<link rel="stylesheet" type="text/css" href="Master.css">

	<style type="text/css">
	

 		#link:hover{
 			-webkit-transform: scaleX(-1);
  			transform: scaleX(-1);
 		}	

 		#d1:hover{
 			font-size: 30px;
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
			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
	    		<span class="navbar-toggler-icon"></span>
	  		</button>
	  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav mx-auto">
					<li class="nav-item"><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>

					<li class="nav-item active" style="border-bottom: 3px solid #77b300; font-size: 17px;" ><a class="nav-link"  href="weightloss.php" style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>

					<li class="nav-item"><a class="nav-link"  href="WeightGain.php" style="width: 160px; text-align: center;">WEIGHT GAIN</a></li>
					<li class="nav-item"><a class="nav-link"  href="Workout.php" style="width: 130px; text-align: center;">WORKOUT</a></li>
					<li class="nav-item"><a class="nav-link"  href="Yoga.php" style="width: 110px; text-align: center;">YOGA</a></li>
					<li class="nav-item"><a class="nav-link"  href="Contact.php" style="width: 110px; text-align: center;">CONTACT</a></li>
					<li class="nav-item"><a class="nav-link" href="signin.php"style="width: 110px; text-align: center;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
        
				</ul>
			</div>	
		</div>
	</nav>


	<section>
		<div class="container">
			<div class="row">
				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                     <img  class="img-thumbnail img-fluid mx-auto  d-block"src="img/On-a-Diet_-Here’s-When-You’ll-Start-Noticing-Weight-Loss-752x472 (1).jpg" alt="">
				</div>

			 </div><br>
			  <div class="row">
				    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					
						<p style="font-size: 23px; line-height: 28px; text-align: center;"><b></b> <b><i>“It takes five minutes to consume 500 calories. It takes two hours to burn them off.”</i></b> – Anonymous  <br>
						</p>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<p style="font-size: 20px; line-height: 28px; text-align: justify;">
						<b>-</b> Clearly define your weight loss goals and write them down. Make sure your motivation is driven from within for long-term success. <br><br>

						<b>-</b>  Many people start losing weight because their doctor suggested it, but research shows that people are more successful if their weight loss motivation comes from within. The good news is that just a little weight loss of 5–10% of your body weight can have a large impact on your health.
						</p><br>
					</div>
			 </div>

	</div><br>
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 style="text-align:center">- Pick a Plan That Fits Your Lifestyle -</h1>
			</div>
		</div><br>
		<div class="row">
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
			<div class="DietPlan" style="border:#77b300 3px solid; border-radius:20px; padding:15px 5px 3px 5px;">
				<a href="" style="color:#77b300"><h3 id="d1" style="text-align: center; color:#77b300">Weight Loss Diet for Indians.</h3></a>		
                <a href=""><img  id="link"src="img/indian.jpg" alt="" class="img-thumbnail img-fluid mx-auto d-block"  height="330" width="480" style="border-radius:20px"></a> 
				<p style="font-size: 18px; padding:0px 10px 2px 10px; text-align:justify ;"><i>
			Are you looking for the best Indian diet plan to lose weight? The rules are simple. All you need to do is start eating right. But in India, this can feel like an insurmountable challenge, given our food culture anda <a href="" style="font-size:19px;"><u><b>Read More >></b></u></a>
		   </i></p> 
			</div>
		</div>
		
			<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<div class="DietPlan1" style="border:3px solid #77b300; border-radius:20px; padding:15px 5px 3px 5px;" >
					<a href="" style="color:#77b300"><h3 id="d1" style="text-align: center; color: #77b300;">7 Day's Diet for Weight Loss.</h3></a>
                 <img  id="link" src="img/7day.png" alt="" class="img-thumbnail img-fluid mx-auto d-block" height="330" width="480"  style="border-radius:20px;">
				 <p style="padding:0px 10px 2px 10px; font-size: 18px; text-align:justify"><i>The 3-day military diet is actually split into 2 phases over a 7-day period. For the first 3 days, you must follow a set low-calorie meal plan for breakfast, lunch and dinner. There are no snacks between meals <a href="" style="font: size 19px;"><u><b> Read More >></b></u></a>
				</i> </p>
			   </div>
		    </div>
	    </div>	<br><br>
		<div class="row">
		  <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 style="text-align:center">- List of Top 10’s for Weight Loss -</h1>
		</div>
	</div><br>
	  <div class="row">
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
			<div style="border:3px solid #77b300; border-radius:20px;" class="bg-light">
               <h3 style="text-align:center; padding-top:10px ; padding-bottom: 10px; border-bottom: 3px solid #77b300; border-radius: 20px;">Top 10 Fruits</h3>
			   <ol style="padding-left: 100px; font-size: 19px;">
				<li>Coconut Water</li>
				<li>Apple</li>
				<li>Oranges</li>
				<li>Pear</li>
				<li>Berries</li>
				<li>Kiwifruit</li>
				<li>Papaya</li>
				<li>Bananas</li>
				<li>Watermelon</li>
				<li>Grapefruit</li>
			   </ol>
			</div>
		</div>
				
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div style="border:3px solid #77b300; border-radius: 20px;" class="bg-light">
              <h3 style="text-align:center; padding-top:10px ;border-bottom: 3px solid #77b300; border-radius: 20px; padding-bottom: 10px;">Top 10 Vegetables</h3>
			  <ol style="padding: left 100px; font-size:19px">
				<li>Spinach</li>
				<li>Broccoli & Cauliflower</li>
				<li>Green Beans</li>
				<li>Carrots</li>
				<li>Tomatos</li>
				<li>Cucumbers</li>
				<li>Beetroot</li>
				<li>Pumpkin</li>
				<li>Sweet potato</li>
				<li>Lemon</li>	
			  </ol>
		  </div>
		</div>
		<div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
          <div style="border:3px solid #77b300; border-radius:20px;" class="bg-light">
			<h3 style="text-align:center ; border-bottom: 3px solid  #77b300; border-radius: 20px; padding-top:10px ; padding-bottom: 10px;">Top 10 Food</h3>
				<ol style="padding: left 100px; font-size:19px">
					<li>Oats</li>
					<li>Eggs</li>
					<li>Nuts</li>
					<li>Brown Rice</li>
					<li>Paneer</li>
					<li>Whole Wheat Bread</li>
					<li>Yogurt</li>
					<li>Lentils</li>
					<li>Soup</li>
					<li>Whole Wheat Pasta</li>
				</ol>
			</div>
		</div>
	  </div>
</div>

	
	</section><br>

	<footer class="bg-dark">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h5 style="text-align:center; color:white">@ 2022 Healty Lifestyle . All Copy Rights Reserved. </h5>
			</div>
		</div>
	</footer>

</body>
</html>