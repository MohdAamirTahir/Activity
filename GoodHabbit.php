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
                    <li class="nav-item active" style="border-bottom: 3px solid #77b300; font-size: 17px;"><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                            <li class="nav-item"><a class="nav-link" href=""  style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
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
    </nav><br> 
    <section>
        <div class="container">
			<div class="row">

				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h1 style="text-align: center;">- Good Habits for a Healthy Life -</h1><br>
				</div>

				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p style="font-size: 20px; line-height: 28px; text-align: justify;"><b>-</b> Physical fitness is not the sole basis of being healthy; being healthy means being mentally and emotionally fit. Being healthy should be part of your overall lifestyle. Living a healthy lifestyle can help prevent chronic diseases and long-term illnesses. Feeling good about yourself and taking care of your health are important for your self-esteem and self-image. Maintain a healthy lifestyle by doing what is right for your body. <br><br>
					<b>-</b> If you want to be a well-rounded, healthy individual, here are a couple of staying healthy tips that may help you do just that:</p><br>

					<h4>1. Maintain a Regular Exercise Routine</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">- No, you do not have to force yourself into intense workouts at the gym but you need to keep as active as possible. You can stick to easy floor exercises, swimming, walking, or simply keep yourself moving by doing some household chores. Do what your body allows you to do. <br><br>

					- What is important is that you continue exercising. Give at least twenty to thirty minutes a day to exercise at least three to five times a week. Have a routine; see to it that you have enough physical activity each day.</p><br>

					<h4>2. Be Conscious in Your Diet</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">- To maintain a healthy lifestyle, you need to keep eating healthy. Add more fruits and vegetables in your diet and eat less carbohydrates, high sodium and unhealthy fat. Avoid eating junk food and sweets. <br><br>

					- Avoid skipping a meal—this will only make your body crave more food the moment you resume eating. Remember to burn more calories than you eat.</p><br>

					<h4>3. Engage in the Things You are Passionate About</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">- Every now and then, to keep the stress and the demands of life from taking over, take a break to do something you love doing.</p><br>

					<h4>4. Surround Yourself With Positive Energy</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">- In order to have a sound mental and emotional state, you must surround yourself with positive energy. Yes, not all problems can be avoided. But it helps to face such obstacles with an optimist outlook. Surround yourself with encouraging friends and people that will provide you with constructive criticism every once in a while to help you improve. <br><br>

					- Make it a habit to always look at the brighter side of life. Even if you find yourself in the worst situation, there is always an upside to it—something good and positive. Dwell on these things instead. <br><br>

					- Maintaining a healthy lifestyle is not that difficult, nor does it require a lot of work. Just keep doing what you do and apply the staying healthy tips listed above—surely you will be a well-rounded individual in no time.</p>
				</div>
			</div>
		</div>
    </section>
    <footer class="bg-dark">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4 style="text-align:center; color:white;">@ 2021 Healty Lifestyle . All Copy Rights Reserved. </h4>
			</div>
		</div>
	</footer>
</body>
</html>