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
		body {
		color: #fff;
		
		font-family: 'Roboto', sans-serif;
	}
    .form-control{
		height: 41px;
		background: #f2f2f2;
		box-shadow: none !important;
		border: none;
	}
	.form-control:focus{
		background: #e2e2e2;
	}
    .form-control, .btn{        
        border-radius: 3px;
    }
	.signup-form{
		width: 390px;
		margin: 30px auto;
	}
	.signup-form form{
		color: #999;
		border-radius: 3px;
    	margin-bottom: 15px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
	.signup-form h2 {
		color: #333;
		font-weight: bold;
        margin-top: 0;
    }
    .signup-form hr {
        margin: 0 -30px 20px;
    }    
	.signup-form .form-group{
		margin-bottom: 20px;
	}
	.signup-form input[type="checkbox"]{
		margin-top: 3px;
	}
	.signup-form .row div:first-child{
		padding-right: 10px;
	}
	.signup-form .row div:last-child{
		padding-left: 10px;
	}
    .signup-form .btn{        
        font-size: 16px;
        font-weight: bold;
		background: #3598dc;
		border: none;
		min-width: 140px;
    }
	.signup-form .btn:hover, .signup-form .btn:focus{
		background: #2389cd !important;
        outline: none;
	}
    .signup-form a{
		color: #fff;
		text-decoration: underline;
	}
	.signup-form a:hover{
		text-decoration: none;
	}
	.signup-form form a{
		color: #3598dc;
		text-decoration: none;
	}	
	.signup-form form a:hover{
		text-decoration: underline;
	}
    .signup-form .hint-text {
		padding-bottom: 15px;
		text-align: center;
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
					<li class="nav-item active"><a class="nav-link" href="signin.php"style="border-bottom: 3px solid #77b300; font-size: 17px;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>
					<li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
        
				</ul>
			</div>	
		</div>
	</nav><br>

	<section>
		<div class="signup-form">
         <form method="post">
		<h2>Sign Up</h2>
		<p>Please fill in this form to create an account!</p>
		<hr>
        <div class="form-group">
		    <div class="col-xs-6"><input type="text" class="form-control" name="fname" placeholder="First Name" required="required"></div>
        </div>
		<div class="form-group">
			 <div class="col-xs-6"><input type="text" class="form-control" name="lname" placeholder="Last Name" required="required"></div>      	
        </div>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Passwored" required="required">
        </div>
		<div class="form-group">
		   <input type="date" class="form-control" name="date" placeholder="Appointment Date" required="required">
        </div> 
		<div class="form-group">
		<input type="time" class="form-control" name="time" placeholder="Appointment Time" required="required">
		</div> 

        <div class="form-group">
			<label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a></label>
		</div>
		<div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg" name='sub'>Sign Up</button>
        </div>
    </form>
<?php
if(isset($_POST['sub'])){
    $con=mysqli_connect("localhost","root",12345,"assigndb");
    if($con){
		
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $date=$_POST['date'];
            $time=$_POST['time'];
            $q="insert into assigntb values('$fname','$lname','$email','$pass','$date','$time')";
            $res=mysqli_query($con,$q);
            if($res){
                echo "<script>alert('Sign In successfully..?');</script>";
				echo "<meta http-equiv='refresh' content='0'>";
            }
            else{
                echo "<script>alert('Something wrong in db connection..?');</script>";
            }
		}
	}
?>

	<div class="hint-text">Already have an account? <a href="#">Login here</a></div>
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

