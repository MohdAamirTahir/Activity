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
                    <li class="nav-item "><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                           
                     <li class="nav-item"><a class="nav-link" href="weightloss.php"  style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
                    <li class="nav-item active"><a class="nav-link" href="Weightgain.php" style="width: 160px; text-align: center; border-bottom: 3px solid #77b300; font-size: 17px;">WEIGHTGAIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="workout.php" style="width: 130px; text-align: center;">WORKOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="Yoga.php"  style="width: 110px; text-align: center;">YOGA</a> </li> 
                    <li class="nav-item"><a class="nav-link" href="contact.php"style="width: 110px; text-align: center;">CONTACT</a></li>
                    <li class="nav-item"><a class="nav-link" href="signin.php"style="width: 110px; text-align: center;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>   
                    <li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
             
                </ul>
            </div>
        </div>
    </nav><br><br>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg12 col-xl-12">
                    <img src="img/gain6.png" alt="" class="img-thumbnail img-fluid mx-auto d-block">
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                    <p style="font-size:30px;"><b><i>“To keep the body in good health is a duty, otherwise we shall not be able to keep
                        our mind strong and clear.”</i></b>– Buddha
                    </p>
                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p style="font-size:20px ;line-height:28px; text-align: justify;">
                       <b>-</b>  If you want to gain weight, it’s very important to do it right. If you’re underweight, you want to gain a balanced amount of muscle mass and subcutaneous fat rather than a lot of unhealthy belly fat.<br><br>
                       <b>-</b>  It’s very important to eat mostly healthy foods even when you’re trying to gain weight. You need to eat more calories than your body burns to gain weight.<br><br>
                    </p>
                </div>
            </div>
            <div class="row">
                
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" style>
                   <h1 style="text-align:center;">-Weight Gain Diet Chart-</h1>
                </div>
           </div><br><br>
           <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <img src="img/Weight-Gain-Diet.png" alt="" class="img-thumbnail img-fluid mx-auto d-block">
                </div>
            </div><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-lg-12" style="font-size:20px; line-height:28px; text-align:justify">
                    <p>
                        <b>-</b>If you want to gain weight, then it is very important that you do it right. Binging on soda and donuts may help you gain weight, but it can destroy your health at the same time.<br><br>
                        <b>-</b>If you are underweight, then you want to gain a balanced amount of muscle mass and subcutaneous fat, not a bunch of unhealthy belly fat. Therefore, it is absolutely essential that you still eat healthy foods and live an overall healthy lifestyle.<br><br>
                        <b>-</b> It is very important to eat mostly healthy foods even if you are trying to gain weight. If you want to gain weight slowly and steadily, then aim for 300-500 calories more than you burn each day according to the calculator.<br><br>
                        <b>-</b>If you want to gain weight fast, then aim for something like 700-1000 calories above your maintenance level. Keep in mind that calorie calculators only provide estimates. Your needs may vary by several hundred calories per day, give or take. You don't need to count calories for the rest of your life, but it helps to do it for the first few days/weeks to get a feel for how many calories you are eating.<br><br>
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 style="text-align:center">-Diet Plan for Weigth Gain-</h1>
                </div>
            </div><br>
                <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover;">
                            <thead class="thead-dark" style="font-size:20px;">
                               <tr>
                                <th colspan="2">Day-1(Monday)</th>
                               </tr>
                            </thead>
                            <tr>
                                <td>Breakfast (8:00-8:30AM)</td>
                                <td>3 onion stuffed parantha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</td>
                            </tr>
                            <tr>
                                <td>Mid-Meal (11:00-11:30AM)</td>
                                <td>1 cup mango shake</td>
                            </tr>
                            <tr>
                                <td>Lunch (2:00-2:30PM)</td>
                                <td>1 cup moong dal/ chicken curry + 1 cup potato and caulifllower vegetable + 3 chapatti + 1/2 cup rice + salad</td>
                            </tr>
                            <tr>
                                <td>Evening (4:00-4:30PM)</td>
                                <td>1 cup pomegranate juice + 2 butter toasted bread</td>
                            </tr>
                            <tr>
                                <td>Dinner (8:00-8:30PM)</td>
                                <td>1 cup beans potato vegetable + 3 chapatti + salad</td>
                            </tr>
                            <thead class="thead-dark">
                                <tr>
                                    <th colspan="2"  style="font-size:20px">Day-2(Tuseday)</th>
                                </tr>
                            </thead>
                            <tr> 
                                <td>Breakfast (8:00-8:30AM)</td>
                                <td>3 paneer stuffed besan cheela + green chutney + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</td>
                            </tr>
                            <tr>
                                <td>Mid-Meal (11:00-11:30AM)</td>
                                <td>1 apple smoothie with maple syrup</td>
                            </tr>
                            <tr>
                                <td>Lunch (2:00-2:30PM)</td>
                                <td>1 cup masoor dal + 1 cup calocasia + 3 chapatti + 1/2 cup rice + 1 cup low curd + salad</td>
                            </tr>
                            <tr>
                                <td>Evening (4:00-4:30PM)</td>
                                <td>1 cup tomato soup with bread crumbs + 1 cup aloo chaat</td>
                            </tr>
                            <tr>
                                <td>Dinner (8:00-8:30PM)</td>
                                <td>1 cup carrot peas vegetable +3 chapatti + salad</td>
                            </tr>
                            <thead class="thead-dark" style="font-size:20px">
                            <tr>
                            <th colspan="2">Day-3(Wednesday)</th>
                           </tr>
                        </thead>
                        <tr>
                            <td>Breakfast (8:00-8:30AM)</td>
                            <td>1.5 cup vegetable bread upma + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts</td>
                        </tr>
                        <tr>
                            <td>Mid-Meal (11:00-11:30AM)</td>
                            <td>1 cup ripe banana with 2 tsp ghee</td>
                        </tr>
                        <tr>
                            <td>Lunch (2:00-2:30PM)</td>
                            <td>1 cup rajma curry + 1 cup spinach potato + 3 chapatti + 1/2 cup rice + salad</td>
                        </tr>
                        <tr>
                            <td>Evening (4:00-4:30PM)</td>
                            <td>1 cup vegetable juice + 1 cup upma</td>
                        </tr>
                        <tr>
                            <td>Dinner (8:00-8:30PM)</td>
                            <td>1.5 cup parwal vegetable + 3 chapatti + salad</td>
                        </tr>
                        <thead class="thead-dark" style="font-size:20px;">
                            <tr>
                                <th colspan="2">Day-4(Thursday)</th>
                            </tr>
                        </thead>
                        <tr>
                            <td>Breakfast (8:00-8:30AM)</td>
                            <td>2 cucmber potato sandwich + 1 tsp green chutney + 1 orange juice + 3 cshews + 2 walnuts + 4 almonds</td>
                        </tr>
                        <tr>
                            <td>Mid-Meal (11:00-11:30AM)</td>
                            <td>1 cup buttermilk + 1 cup sweet potato chaat</td>
                        </tr>
                        <tr>
                            <td>Lunch (2:00-2:30PM)</td>
                            <td>1 cup white chana/ fish curry + 3 chapatti + 1/2 cup rice + salad</td>
                        </tr>
                        <tr>
                            <td>Evening (4:00-4:30PM)</td>
                            <td>1 cup almond milk + banana</td>
                        </tr>
                        <tr>
                            <td>Dinner (8:00-8:30PM)</td>
                            <td>1 cup cauliflower potato vegetable + 3 chapatti + salad</td>
                        </tr>
                        <thead class="thead-dark" style="font-size:20px">
                        <tr>
                            <th colspan="2">Day-5(Friday)</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Breakfast (8:00-8:30AM)</td>
                        <td>2 cup vegetable poha + 1 cup curd + 3 cashews + 4 almonds + 2 walnuts</td>
                    </tr>
                    <tr>
                        <td>Mid-Meal (11:00-11:30AM)</td>
                        <td>2 cups watermelon juice</td>
                    </tr>
                    <tr>
                        <td>Lunch (2:00-2:30PM)</td>
                        <td>1 cup chana dal + 1 cup bhindi vegetable + 3 chapatti + 1/2 cup rice + salad</td>
                    </tr>
                    <tr>
                        <td>Evening (4:00-4:30PM)</td>
                        <td>1 cup sprouts salad + 2 potato cheela + green chutney</td>
                    </tr>
                    <tr>
                        <td>Dinner (8:00-8:30PM)</td>
                        <td>1 cup peas mushroom vegetable + 3 chapatti + salad</td>
                    </tr>
                    <thead class="thead-dark" style="font-size:20px">
                        <tr>
                            <th colspan="2">Day-6(Saturday)</th>
                        </tr>
                    </thead>
                    <tr>
                        <td>Breakfast (8:00-8:30AM)</td>
                        <td>3 vegetable suji cheela + 1 cup strawberry shake + 4 cashews + 4 almonds + 3 walnuts</td>
                    </tr>
                    <tr>
                        <td>Mid-Meal (11:00-11:30AM)</td>
                        <td>1 cup coconut water + 1 cup pomegrate</td>
                    </tr>
                    <tr>
                        <td>Lunch (2:00-2:30PM)</td>
                        <td>1 cup mix dal + 1 cup soybean curry + 3 chapatti + 1/2 cup curd + salad</td>
                    </tr>
                    <tr>
                        <td>Evening (4:00-4:30PM)</td>
                        <td>1 cup fruit salad + 4 pc vegetable cutlets + green chutney</td>
                    </tr>
                    <tr>
                        <td>Dinner (8:00-8:30PM)</td>
                        <td>1 cup karela vegetable + 3 chaptti + salad</td>
                    </tr>
                    <thead class="thead-dark" style="font-size:20px;">
                       <tr>
                        <th colspan="2">Day-7(Sunday)</th>
                       </tr>
                    </thead>
                    <tr>
                        <td>Breakfast (8:00-8:30AM)</td>
                        <td>2 egg brown bread sandwich + green chutney + 1 cup milk + 3 cashews + 4 almonds + 2 walnuts</td>
                    </tr>  
                    <tr>
                        <td>Mid-Meal (11:00-11:30AM)</td>
                        <td>1 cup banana shake</td>
                    </tr>
                    <tr>
                        <td>Lunch (2:00-2:30PM)</td>
                        <td>1 cup arhar dal + 1 cup potato curry + 3 chapatti + 1/2 cup rice + 1/2 cup low fat curd + salad</td>
                    </tr>
                    <tr>
                        <td>Evening (4:00-4:30PM)</td>
                        <td>1 cup strawberry smoothie + 1 cup vegetable poha</td>
                    </tr>
                    <tr>
                        <td>Dinner (8:00-8:30PM)</td>
                        <td>1.5 cup chicken curry + 3 chapatti + salad</td>
                    </tr>
                        </table>
                </div><br>
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                      <h1 style="text-align:center;">- Do's And Dont's in Diet Plan -</h1>
                    </div>
                </div><br>
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" style="font-size: 17.5p">
                         <thead class="thead-dark" style="font-size:20px;">
                         <tr>
                            <th>Do's</th>
                            <th>Dont's</th>
                         </tr>
                        </thead>
                        <tr>
                            <td>1. Eat more often <br>
                                2. Drink Milk <br>
                                3. Try Weight gainer shakes <br>
                                4. Use Bigger Plates <br>
                                5. Add cream to your coffee <br>
                                6. Take Creatine <br>
                                7. Get Quality Sleep <br>
                                8. Eat your protein first and vegetables last
                                </td>
                                
							<td>1. Drink water before meals <br>
								2. Smoke
							</td>
                        </tr>
                     
                    </table>
                  </div>
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