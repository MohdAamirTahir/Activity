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
    </nav>  <br> 
    <section>
        <div class="container">
			<div class="row">

				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h1 style="text-align: center;">- Healthy Food -</h1><br>
				</div>

				<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h3 style="text-decoration: underline;">6 Healthy Eating Habits</h3>

					<p style="font-size: 20px; line-height: 28px; text-align: justify;">
					<b>-</b> Think of it as an adventure to learn and understand your body, an opportunity to educate yourself with the right and healthy source of nutrients and their importance in our body. <br><br>

					<b>-</b> The way food affects your lifestyle is an indication of what needs to change, similar to what Hippocrates (ancient Greek Physician) said centuries ago – “We are what we eat”. <br><br>

					For example – often greasy food such as burgers and pizza make you feel bloated and have that unsettling feeling which can hamper your day and affect the subsequent activities where as if you choose healthy options such as smoothies and salads together with a few nuts to snack on, you feel lighter, more active and probably more at peace as you are content with supplying your body with the rich source of nutrients.</p><br>

					<h4>1. Buying Fresh Food</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					- You could start by buying fresh food items and avoid processed or packaged food items which often have high amounts of preservatives to keep them “so-called fresh”. This will also help you learn about local produce which will come in handy when you decide to prepare healthier dishes at home itself. </p><br>

					<h4>2. Plan Your Diet</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					- Once you have made the decision to be healthy, you could plan your meals and think about ways to make it more balanced. You could include salads, your choice of protein, yogurt, nuts and fruits to be honest the options are endless you can also create your own energy bars and include things that you enjoy.</p><br>

					<h4>3. Keep 12hr Fasting</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					- Keeping a 12 hour gap between the 1st and the last meal of your day is a great habit to maintain.</p><br>

					<h4>4. Drink 2-3 Liters of Water Every Day</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					- Don’t forget that your body is about 60% water. You need to have about 2-3 liters of water every day. The amount of water depending on your weight and lifestyle. Sometimes if you feel hungry it can be also a sign that your body is thirsty. Before you are going to look for a snack try to have a glass of water, wait for 10 minutes and see if you still want to have a snack.</p><br>

					<h4>5. Eat Your Food Slowly and Chew it Properly</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					-  It’s seen that the way we eat our food or the number of times we chew can impact the nutrition breakdown tremendously. When you eat your food slowly and chew it properly, it helps you to get maximum nutrients out of the food and can also suppress frequent hunger pangs.</p><br>

					<h4>6. Feel More Energetic and Less Heavy</h4>
					<p style="font-size: 18px; line-height: 28px; text-align: justify;">
					-  When you start substituting your food habits with more organic and healthy food elements, you will soon realise that you feel more energetic and less heavy as you start shedding a few kilos along the way.</p>
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
</body>
</html>