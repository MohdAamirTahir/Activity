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
                    <li class="nav-item active"><a class="nav-link"  href="index.php" style="width: 110px; text-align: center;">HOME</a></li>                            
					<li class="nav-item"><a class="nav-link" href="weightloss.php"  style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
                    <li class="nav-item"><a class="nav-link" href="Weightgain.php" style="width: 160px; text-align: center;">WEIGHTGAIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="workout.php" style="width: 130px; text-align: center;">WORKOUT</a></li>
                    <li class="nav-item  active"><a class="nav-link" href="Yoga.php"  style="width: 110px; text-align: center; border-bottom: 3px solid #77b300; font-size: 17px;">YOGA</a> </li> 
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
			<div class="yoga">
				<div class="row">

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<img src="img/spirituality_live_good.jpeg" height="320" width="720" class="img-thumbnail img-fluid mx-auto d-block"><br>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<p style="font-size: 23px; line-height: 28px; text-align: center;"><b></b> <b><i>“It is health that is real wealth and not pieces of gold and silver.”</i></b> – Mahatma Gandhi  <br>
						</p>
					</div>

					<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<p style="font-size: 20px; line-height: 28px; text-align: justify;">
						<b>-</b> Isn’t it true that if a person is healthy, he can prosper in his life? Today, people are trying so hard to be successful that they forget to take care of the most important part of life – health. With this fast-paced lifestyle, people face stress and mental breakdown. This type of lifestyle is affecting both physical and mental health. <br><br>

						<b>-</b> There are many problems like high blood pressure, diabetes, thyroid and many disorders that are becoming common now. To avoid such problems, it is necessary that there should be some type of physical activity. The main purpose of doing physical activity is to increase blood circulation throughout the body. <br><br>

						<b>-</b> Yoga is one such exercise that does not have any age restrictions. It is simple yet effective. A few hundred years ago, people who practiced yoga, lived for a long time without any health problems. Learning yoga can feel like learning a new language and a new culture. Yoga needs thorough dedication. It is all about breath, posture, focus, and movement. Yoga is all about flexibility. In the beginning, it may feel a bit tough and the body might not be that flexible. 
						</p><br>
					</div>	
				</div><br>

				<div id="bestyoga">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<h1 style="text-align: center;">-Yoga & Strech-</h1><br>
						</div>
					</div>
				</div>

				<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapseOne">
	         				<h4 id="Pranayama">1. <u>Pranayama</u></h4></a>
	      				</div>
	      				<div id="collapseOne" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/pranaym.png" class="img-thumbnail img-fluid" height="200" width="580">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Pranayama as a formal practice of controlling the breath. One can bring peace to mind by paying attention to the breath through various breathing techniques. It helps in enhancing and regulating the life force in the body system. <br><br>

	        							<b>-</b> Modern life is full of stress, fatigue, anxiety and a number of other issues connected to health and weight. Unhealthy habits, tons of work, irregular working hours, sleep deprivation and many other factors ruin your mental and physical health. 
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>

	    		<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapsetwo">
	         				<h4 id="Vrikshasana">2. <u>Vrikshasana</u></h4></a>
	      				</div>
	      				<div id="collapsetwo" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/Vrikshasana.png" class="img-thumbnail img-fluid" height="200" width="530">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Vrikshasana gives the true spirit of the tree. “Just like the roots of the tree balance the tree completely, our feet too act as the roots and help balance the entire weight of the body”. “Vrikshasana  is one of the simplest asanas, and yet it is also one of the most beneficial ones,”.“Vrikshasana (Tree Pose) helps improve balance, gives your body a proper posture and boosts concentration,”.<br><br>

	        							<b>-</b> When it comes to the appearance of this asana, Vrikshasana, is like a steady and graceful tree. It is termed after Sanskrit words vriksha meaning tree and asana meaning pose. For this particular pose, unlike other poses in yoga, you need to keep the eyes open so that you can keep your body balance. <br><br>

	        							<b>-</b> Tree pose is essentially a balancing pose, and it does have many benefits which lie in both improving the balance of the body as well as enhancing the entire nervous system.
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>
				
	    		<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapsethree"><h4 id="DhyanaVirasana">3. <u>Dhyana Virasana</u></h4></a>
	      				</div>
	      				<div id="collapsethree" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/DhyanaVirasana.png" class="img-thumbnail img-fluid" height="200" width="530">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> This asana is wonderful for relaxing the mind and the body,  along with it there are several other benefits of Dhyana Virasana. This yoga pose is often used as an alternative to other meditation asana. Thus, this yoga pose is exceptionally beneficial for spiritual purposes. <br><br>
	        							<b>-</b> The practice is easy to learn and comfortable to sustain for longer period of time. This yoga practice is a seated posture, therefore it is much comfortable to sustain. During the practice, there is no rotation of leg and hips; only the knees are bent and brought to center. <br><br>
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>
				
				<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapsefour"><h4 id="Ushtrasana">4. <u>Ushtrasana</u></h4></a>
	      				</div>
	      				<div id="collapsefour" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/ustrasana.jpg" class="img-thumbnail img-fluid" height="200" width="530">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Ustrasana is a deep backward bend from a kneeling position; the completed pose has the hands on the heels. The backs of the feet may be flat on the floor, or the toes may be tucked under for a slightly less strong backbend. The pose is one of the 26 asanas in the Bikram Yoga sequence.  Ustrasana is a backbend that boosts shoulder flexibility, increases core strength and stretches the entire front of the body. The name is derived from the Sanskrit ustra, meaning "camel," and asana, meaning "pose" or "posture." <br><br>

	        							<b>-</b> To enter this asana, kneel down, then lean back to touch the feet with both hands. The deepness of the bend varies according to the flexibility of the practitioner. Advanced practitioners are often able to bend far enough to touch their feet with their head.	
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>
				
				<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapsefive"><h4 id="Shirshasana">5. <u>Shirshasana</u></h4></a>
	      				</div>
	      				<div id="collapsefive" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/Shirshasana.jpg" class="img-thumbnail img-fluid" height="200" width="530">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Sirsasana is an advanced inversion that exhibits strength, control and the beauty of overcoming the fear of falling through physical and mental balance. The name is derived from the Sanskrit sirsa, meaning “head,” and asana meaning “pose” or “posture.”<br><br>

	        							<b>-</b> In this asana, the head and forearms rest on the mat with the hands clasped. The legs are lifted and the body's weight is shifted until it is fully supported by the head and forearms. The torso is perpendicular to the mat in a straight line from the hips to the head.
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>
				
				<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapsesix"><h4 id="Shavasana">6. <u>Shavasana</u></h4></a>
	      				</div>
	      				<div id="collapsesix" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<img id="img" src="img/Shavasana.png" class="img-thumbnail img-fluid" height="200" width="530">
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Savasana (shah-VAH-sah-nah or shih-VAH-snah) is the final resting pose at the end of almost every yoga practice – including the Modo Yoga series. his complete stillness in mind and body is the goal of savasana, which for most people makes it both the easiest pose physically, and the most challenging pose mentally and/or emotionally.<br><br>

	        							<b>-</b> A lot happens in our bodies during savasana, despite (and because of) our stillness. Savasana offers the body rest after a yoga practice. <br><br> 

										<b>-</b> it is a time when our musculo-skeletal and nervous systems integrate the practice we just finished; a time when the fight-flight-or-freeze states that typify the majority of our daily lives take a back seat and the rest-and-digest mechanisms in our parasympathetic nervous systems take the driver’s seat; a time when our digestive and immune systems function best; and, a time when our minds become more calm and clear.
	        							</p>
	        						</div>
	        					</div>
	         				</div>
	        			</div>
	      			</div>
	    		</div>
				
				<div id="accordion">
	    			<div class="card">
	      				<div class="card-header bg-dark">
	        				<a class="card-link" data-toggle="collapse" href="#collapseseven"><h4 id="SuryaNamaskar">7. <u>Surya Namaskar</u></h4></a>
	      				</div>
	      				<div id="collapseseven" class="collapse show" data-parent="#accordion">
	        				<div class="card-body">
	        					<div class="row">
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<video  controls="" width="490" height="290">
											<source src="img/Surya Namaskar Animation.mp4" type="video/mp4"/>
										</video>
	        						</div>
	        						<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
	        							<p style="font-size: 18px; line-height: 27px; text-align:justify;"><b>-</b> Traditionally, the practice of Surya Namaskar was used as a means of paying respect to the sun. In Indian culture from which the practice came, the sun is regarded as the source of all life, and it is therefore of great importance.<br><br>

										<b>-</b> In Hinduism, Surya is the God of the sun, understood to be the creator of the universe, and in Vedic tradition the sun is symbolic of consciousness and the Divine. As such, Surya Namaskar is considered to be one of the most important yoga practices. <br><br>
										<b>-</b> Surya Namaskar is also referred to as Sun Salutation in English. <br>
	        							</p>
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
</body>
</html>