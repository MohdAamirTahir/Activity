<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Healthy LifeStyle</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="bootstrap.css">
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript" src="popper.js"></script>
	<script type="text/javascript" src="bootstrap.js"></script>	
	<link rel="stylesheet" type="text/css" href="Master.css">
	<script type="text/javascript" src="Contact.js"></script>

	<style type="text/css">
		label{
			font-weight: bolder;
			font-size: 18px;
		}

		span{
			font-style: italic;
			color: red;
			font-size: 16px;
		}
		
        .login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
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
					<li class="nav-item"><a class="nav-link"  href="weightloss.php" style="width: 160px; text-align: center;">WEIGHT LOSS</a></li>
					<li class="nav-item"><a class="nav-link"  href="Weightgain.php" style="width: 160px; text-align: center;">WEIGHT GAIN</a></li>
					<li class="nav-item"><a class="nav-link"  href="workout.php" style="width: 130px; text-align: center;">WORKOUT</a></li>
					<li class="nav-item"><a class="nav-link"  href="Yoga.php" style="width: 110px; text-align: center;">YOGA</a></li>
					<li class="nav-item"><a class="nav-link"  href="Contact.php" style="width: 110px; text-align: center;">CONTACT</a></li>
					<li class="nav-item"><a class="nav-link" href="signin.php" style="width: 110px; text-align: center;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php" style="width: 110px; text-align: center;">LOGIN</a></li>
					<li class="nav-item active"><a class="nav-link" href="logout.php" style="border-bottom: 3px solid #77b300; font-size: 17px;">LOGOUT</a></li>        
        
				</ul>
			</div>	
		</div>
	</nav><br>

	<section>
    <div class="login-form">
    <form method="post">
        <h2 class="text-center">Log Out</h2>       
     
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="sub">Log Out</button>
        </div>      
    </form>
    <?php
    if(isset($_POST['sub'])){

    if(session_destroy()){
    setcookie("cname", "", time() - 3600);
    echo'<script>alert("Logout Successfulll..");window.location="login.php";</script>';
    //header("Location:login.php");
}
    }
    
?>
    <p class="text-center"><a href="signin.php">Create an Account</a></p>
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

