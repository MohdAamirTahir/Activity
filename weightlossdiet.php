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
                    <li class="nav-item"><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                           
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
<br><br>
    <section>
        <div class="container">
         <div class="row">
            <div class="col-12 sol-sm-12 col-md-12 col-lg-12 col-xl-12">
             <h1 style="text-align:center;">- Weight Loss Diet for Indians -</h1>
            </div>
            <br><br>
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <p style="font:size 20px; line-height: 28px;text-align: justify;">
                    <b>-</b> Are you looking for the best Indian diet plan to lose weight? The rules are simple. All you need to do is start eating right. But in India, this can feel like an insurmountable challenge, given our food culture and dietary habits. For instance, a typical Indian meal is high in carbohydrates and sugar – we eat a lot of potatoes, rice and sweets. We also love our snacks and can’t imagine a day without our fix of namkeens and bhujias. We pressurize our friends and family into eating too much, as a sign of hospitality and affection, and consider refusing an extra helping a rebuff. To top it all, we’ve never embraced physical exercise as essential. It’s no wonder that India is battling a growing obesity problem. <br><br>

                    <b>-</b> But the answer doesn’t lie in shunning Indian food in favour of foreign ingredients or fad diets. You’ll find that the best Indian diet plan consists of foods you’ve already got in your kitchen and that you can lose weight by making a few changes to your diet. Follow this diet plan at least 1 Month, for better result. <br><br> 
                    
                    <b>-</b> The secret to maintaining an ideal weight is to not skip meals and timing your meals. Consuming decent morsels of protein-rich food every two hours ensures you are satiated and do not delay eating your next meal or overeat a big meal (like a dinner or lunch).</p>

            </div>
         </div>
       
        </div>
        <div class="container">
            <div class="table-responsiv">
                <table class="table table-striped table-bordered table-hover" style="font-size: 17.5;">
                    <thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-1 (Monday)</th>
						</tr>
					</thead><tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Oats Porridge in Skimmed Milk(1 bowl) & Mixed Nuts(25 grams)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Dal(1 katori), Gajar Matar Sabzi(1 katori), Roti(1 roti/chapati)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Cut Fruits(1 cup)Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Tea with Less Sugar and Milk(1 teacup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Dal(1 katori), Lauki Sabzi(1 katori), Roti (1 roti/chapati)</td>
					</tr>

					<thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-2 (Tuesday)</th>
						</tr>
					</thead>
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Curd(1.5 katori)Mixed Vegetable Stuffed Roti(2 piece)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Lentil Curry(0.75 bowl), Methi Rice(0.5 katori)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Apple(0.5 small), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Coffee with Milk and Less Sugar(0.5 tea cup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Sauteed Vegetables with Paneer(1 katori), Roti(1 roti/chapati),
						Green Chutney(2 tablespoon)</td>
					</tr>

					<thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-3 (Wednesday)</th>
						</tr>
					</thead>	
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Skim Milk Yoghurt(1 cup), Multigrain Toast(2 toast)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Sauteed Vegetables with Paneer(1 katori), Roti(1 roti/chapati),
						Green Chutney(2 tablespoon)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Banana(0.5 small), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Tea with Less Sugar and Milk(1 teacup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Lentil Curry(0.75 bowl), Methi Rice(0.5 katori)</td>
					</tr>
					
					<thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-4 (Thursday)</th>
						</tr>
					</thead>	
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Fruit and Nuts Yogurt Smoothie(0.75 glass), Egg Omelette(1 serve(one egg))</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Green Gram Whole Dal Cooked(1 katori), Bhindi sabzi(1 katori),
						Roti(1 roti/chapati)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Orange(1 fruit), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Coffee with Milk and Less Sugar(0.5 tea cup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Palak Chole(1 bowl), Steamed Rice(0.5 katori)</td>
					</tr>

					<thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-5 (Friday)</th>
						</tr>
					</thead>	
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Skimmed Milk(1 glass)Peas Poha(1.5 katori)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Low Fat Paneer Curry(1.5 katori)Missi Roti(1 roti)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Papaya(1 cup), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Tea with Less Sugar and Milk(1 teacup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Curd(1.5 katori), Aloo Baingan Tamatar Ki Sabzi(1 katori),
						Roti(1 roti/chapati)</td>
					</tr>
							
					<thead class="thead-dark" style="font-size: 20px;">
						<tr>
							<th colspan="2">Day-6 (Saturday)</th>
						</tr>
					</thead>	
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Mixed Sambar(1 bowl)Idli(2 idli)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Curd(1.5 katori), Aloo Baingan Tamatar Ki Sabzi(1 katori),
						Roti(1 roti/chapati)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Cut Fruits(1 cup), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Coffee with Milk and Less Sugar(0.5 tea cup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Green Gram Whole Dal Cooked(1 katori), Bhindi sabzi(1 katori),
						Roti(1 roti/chapati)</td>
					</tr>			
					
					<thead class="thead-dark" style="font-size: 20px;">	
						<tr>
							<th colspan="2">Day-7 (Sunday)</th>
						</tr>
					</thead>	
					<tr>
						<td>6.30 AM</td>
						<td>Cucumber Detox Water(1 glass)</td>
					</tr>
					<tr>
						<td>8:00 AM (Breakfast)</td>
						<td>Besan Chilla(2 cheela), Green Garlic Chutney(3 tablespoon)</td>
					</tr>
					<tr>
						<td>12:00 PM</td>
						<td>Skimmed Milk Paneer(100 grams)</td>
					</tr>
					<tr>
						<td>2.00 PM</td>
						<td>Mixed Vegetable Salad(1 katori)</td>
					</tr>
					<tr>
						<td>2.10 PM (Lunch)</td>
						<td>Palak Chole(1 bowl)Steamed Rice(0.5 katori)</td>
					</tr>
					<tr>
						<td>4.00 PM</td>
						<td>Apple(0.5 small), Buttermilk(1 glass)</td>
					</tr>
					<tr>
						<td>5.30 PM</td>
						<td>Tea with Less Sugar and Milk(1 teacup)</td>
					</tr>
					<tr>
						<td>7.00 PM (Dinner)</td>
						<td>Low Fat Paneer Curry(1 katori)Missi Roti(1 roti)</td>
					</tr>
				   </table>
			     </div>
		        </div>
	          </section><br>
    <footer class="bg-dark">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
				<h4 style="text-align:center; color:white;">@ 2022 Healty Lifestyle . All Copy Rights Reserved. </h4>
			</div>
		</div>
	</footer>
</body>

</html>