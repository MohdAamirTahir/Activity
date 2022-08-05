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
      <section>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 style="text-align:center">- 7 Day's Diet for Weight Loss -</h1>
                </div>
            </div><br>
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <p style="font-size:20px; text-align:justify; line-height:28px"><b>-</b>
                        The 3-day military diet is actually split into 2 phases over a 7-day period. For the first 3 days, you must follow a set low-calorie meal plan for breakfast, lunch and dinner. There are no snacks between meals. Total calorie intake during this phase is roughly 1,100–1,400 calories per day.
                        <br><br>
                    <b>-</b>
                      This is much lower than the average adult’s intake, but you can check your own calorie requirements using this calculator. For the remaining 4 days of the week, you are encouraged to eat healthy and continue to keep your calorie intake low. Proponents of the diet claim that you can repeat the diet several times until you reach your goal weight.
                    <br><br>
                     <b>-</b>
                     The secret to maintaining an ideal weight is to not skip meals and timing your meals. Consuming decent morsels of protein-rich food every two hours ensures you are satiated and do not delay eating your next meal or overeat a big meal (like a dinner or lunch).
                    </p><br><br> 
                </div>
            </div>
             <div class="container">
                <div style="border:3px solid #77b300; border-radius:25px">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" >
                            <h2 style="text-align:center !important; border-radius:25px; border-bottom:3px solid #77b300; padding-top:10px; padding-bottom:10px;">Day-1</h2>
                        </div>
                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                             <img class="img-thumbnail img-fluid mx-auto d-block"   src="img/fruite-salad1.png" alt="" width="310" height="310">
                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; line-height:28px; text-align:justify">
                           <p><b>1.</b>The first day is the most important day in your diet plan program. You are just stepping into the world of knowing how you can reduce your body weight and that too in 7 days time.<br><br>
                            <b>2.</b>
                             The diet plan says that the first day of the diet must be a complete fruit diet day. You have the option of eating all the fruits that you possibly can and also take in whatever fruit that you like. But, it is important for you to make sure that you avoid bananas from your fruit list on day one.<br><br>
                             <b>3.</b>
                             Some of the suggested fruits that you can take on the weight loss diet plan are watermelons and cantaloupe.<br><br>
                             <b>4.</b>
                             You are also supposed to drink about 8 to 12 glasses of water on day one and make sure that you do not even touch any other food items, not even raw or boiled vegetables. If you need this plan to work effectively in your body, then you should only consume various kinds of assorted fruits throughout the day.<br><br>
                             <b>5.</b>
                             If you feel hungry, try to eat more fruits and of course drink water.
                           </p>
                        </div>
                    </div>
                  </div><br><br>
                 
                    <div style="border:3px solid #77b300; border-radius:25px">
                        <div class="row">
                           <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <h2 style="text-align:center !important; border-radius:25px; border-bottom:3px solid #77b300; padding-top:10px; padding-bottom:10px;">Day-2</h2>
                           </div>
                           <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-">
                             <img class="img-thumbnail img-fluid mx-auto d-block"src="img/vagetable1.png" alt="" width="310" height="310" >   
                           </div>
                           <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; line-height:28px; text-align:justify">
                            <p >
                                <b>1.</b>If day one was a day that gave you the opportunity to binge on your favorite fruits, then day two provides you an opportunity to eat only vegetables throughout the day.<br><br>
                                <b>2.</b>You can take in the vegetables that you like both in the raw state and in cooked state. But, it is important for you to make sure that you do not use any sort of oil while cooking vegetables. Consuming boiled vegetables are also a good option.
                                <b>3.</b>You can take any vegetable that you like including potatoes. But, it would be safe for you to try out the boiled potatoes early in the morning itself so that the carbohydrates get burnt during the course of the day.<br><br>
                                <b>4.</b>Some of the common vegetables that are good to be consumed on day 2 of the lose weight diet regime are: cooked beans, raw and cooked carrot, broccoli, cucumber, boiled bottle and ridge gourd, lettuce, boiled cabbage and so on.<br><br>
                                <b>5.</b>There is no doubt that your digestive system will completely undergo an overhaul by the evening and you also would need to visit the toilet more times than before. Make sure that you do not miss out on your daily dose of 8 to 12 glasses of wateralong with a strict veggie diet on day two.hungry, try to eat more fruits and of course drink water.
                            </p>
                           </div>
                       </div>
                  </div>   <br><br> 
                 
                    <div style="border:3px solid #77b300; border-radius: 25px;">
                        <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h2 style="text-align:center;border-radius:25px; border-bottom:3px solid #77b300; padding-top:10px; padding-bottom:10px;">Day-3</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <img class="img-thumbnail img-fluid mx-auto d-block" src="img/fruit-and-vegetable-salad.png" alt="" width="310" height="310">
                    </div>
                       <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; text-align:justify; line-height:28px;">
                            <p>
                                <b>1.</b> The third day of your weight lose plan will allow you to take both vegetables and fruits for the entire day.<br><br>
                                <b>2.</b>
                                Make sure that you do not touch potatoes in the veggie section and also make sure that you do not consume bananas from the fruit section.<br><br>
                                <b>3.</b>You have the option of going for a fruit diet in the morning followed by a veggie diet in the afternoon and a fruit diet in the evening followed by a veggie and fruit diet at night.<br><br>
                                <b>4.</b> The options and the permutations and combinations of consuming the fruit and vegetable diet or combination of both the diets is totally left to your disposal.<br><br>
                                <b>5.</b> You can decide on what you would like to have provided it is fruits and vegetables. Never miss the option of drinking 8 to 12 glasses of water even on day three as well
                            </p>
                       </div>
                  </div> 
                </div> <br><br>

                  <div style="border:3px solid #77b300; border-radius: 25px;"> 
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h2 style=" border-radius:25px; border-bottom:3px solid #77b300; padding-top:10px; padding-bottom: 10px;" >Day-4</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <img class="img-thumbnail img-fluid mx-auto d-block" src="img/banana.png" alt="" width="310" height="310">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; text-align:justify; line-height:28px;">
                        <p>
                            <b>1.</b>Day four would interest dieters looking for the fastest way to lose weight as it is filled with a banana and milk diet. Yes, you need to take at least a minimum of 8 to 10 bananas throughout the day and are allowed three glasses of milk.<br><br>
                            <b>2.</b>You might be a bit worried if this diet will make you feel hungry. But, on the contrary, you will feel quite full with this diet plan at the end of the day.<br><br>
                            <b>3.</b>You need to divide the bananas and the glasses of milk properly so that you do not feel any kind of starvation on the fourth day of diet plan regime.<br><br>

                            <b>4.</b>Consuming a banana and a glass of milk in the morning followed by a couple of bananas during the midday will be an ideal start to day four.<br><br>
                            <b>5.</b>You can take a glass of milk and two bananas for lunch on day four. You can also take a couple of bananas in the evening or even three bananas and then take a couple of bananas and a glass of milk at night.<br><br>
                            <b>6.</b>There will be no sign of hunger at all throughout the entire day if you follow this simple day four regime.<br><br>
                        </p>
                   </div>
                  </div> 
                </div><br><br>

                  <div style="border:3px solid #77b300; border-radius: 25px;"> 
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h2 style="border-bottom:3px solid #77b300; border-radius:25px; padding-top:10px; padding-bottom: 10px;" >Day-5</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <img class="img-thumbnail img-fluid mx-auto d-block" src="img/rice.png" alt="" width="310" height="310">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; text-align:justify; line-height:28px;">
                        <p>
                            <b>1.</b> If you love having a feast, then day 5 of the lose weight diet plan offers you the opportunity to a feast on day five.<br><br>
                            <b>2.</b>It is the day when you can have a cup of rice for lunch and take about six to seven tomatoes throughout the day.<br><br>
                            <b>3.</b>As there is every chance of producing a lot of uric acid in your body, it is ideal for you to increase the water level from 12 glasses to 15 glasses on day five.
                        </p>
                   </div>
                  </div>
                </div>  <br><br>

                  <div style="border:3px solid #77b300; border-radius: 25px;">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h2 style="border-bottom:3px solid #77b300; border-radius:25px; 
                           padding-top:10px; padding-bottom: 10px;">Day-6</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <img class="img-thumbnail img-fluid mx-auto d-block" src="img/vegetablerice.png" alt="" width="310" height="310">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:18px; text-align:justify; line-height:28px;">
                        <p>
                            <b>1.</b> You are in for another feast day on day six of the diet plan. Here too, you will be allowed to take a cup of rice in the afternoon for lunch and you also need to stick on to a vegetable diet for the rest of the day.<br><br>
                            <b>2.</b>It is also important for you to make sure that you take at least 8 to 12 glasses of water on day six as well.<br><br>

                            <b>3.</b>This is the penultimate day of your seven day diet plan regime and you are sure to feel quite lighter than before by the sixth day.<br><br>
                            <b>4.</b>There is no doubt that you will also be improving your digestive system completely.
                            
                        </p>
                   </div>
                  </div> 
                </div>  <br><br>

                  <div style="border:3px solid #77b300; border-radius: 25px;">
                  <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                         <h2 style="border-bottom:3px solid #77b300; border-radius:25px; padding-top:10px; padding-bottom: 10px;">Day-7</h2>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                        <img class="img-thumbnail img-fluid mx-auto d-block" src="img/juice.png" alt="" width="310" height="310">
                    </div>
                    <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style="font-size:20; text-align:justify; line-height:28px;">
                        <p>
                            <b>1.</b> This is the last day of the lose weight diet plan. Here, you are allowed to take a cup of rice and all the veggies that you would love to eat along with the fruit juice of your choice.<br><br>
                            <b>2.</b> This is considered to be the best day of your entire diet regime as you have the option to eat all the vegetables that you like and to flush it off by consuming the fruit juices of your choice.<br><br>
                            <b>3.</b> There is no doubt that you will see a considerable amount of weight loss in your body and you have done nothing other than following a strict fruit and vegetable and drinking water diet plan.<br><br>
                            <b>4.</b> There are also quite a lot of benefits that you gain from the diet plan. You will see your face to glow even better than before and also will improve your digestive system. The best advantage though would be that you would see a reduction in your body weight by about 4 to 5 kilos or even more.
                            
                        </p>
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
        </body>
        
        </html>