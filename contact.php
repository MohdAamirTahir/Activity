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
    font-family: 'Lato', sans-serif;
}

h1 {
    margin-bottom: 40px;
}

label {
    color: #333;
}

.btn-send {
    font-weight: 300;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    width: 80%;
    margin-left: 3px;
    }
.help-block.with-errors {
    color: #ff5050;
    margin-top: 5px;

}

.card{
	margin-left: 10px;
	margin-right: 10px;
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
					<li class="nav-item active" style="border-bottom: 3px solid #77b300; font-size: 17px;"><a class="nav-link"  href="Contact.php" style="width: 110px; text-align: center;">CONTACT</a></li>
					<li class="nav-item"><a class="nav-link" href="signin.php"style="width: 110px; text-align: center;">SIGN IN</a></li>        
                    <li class="nav-item"><a class="nav-link" href="login.php"style="width: 110px; text-align: center;">LOGIN</a></li>
                    <li class="nav-item"><a class="nav-link" href="logout.php"style="width: 110px; text-align: center;">LOGOUT</a></li>        
        
				</ul>
			</div>	
		</div>
	</nav><br>

	<section>
	<div class="container">
        <div class=" text-center mt-5 ">

        </div>

    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form method="post">
            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Firstname *</label>
                            <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Lastname *</label>
                            <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                        </div>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Email *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Please specify your need *</label>
                            <select id="form_need" name="issue" class="form-control" required="required" data-error="Please specify your need.">
                                <option value="" selected disabled>--Select Your Issue--</option>
                                <option >Request Invoice for order</option>
                                <option >Request order status</option>
                                <option >Haven't received cashback yet</option>
                                <option >Other</option>
                            </select>
                         </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_message">Message *</label>
                            <textarea id="form_message" name="msg" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message.">
							</textarea>
                            </div>
                        </div>
                    <div class="col-md-12">
                     <input type="submit" class="btn btn-success btn-send  pt-2 btn-block " name="sub" value="Submit" >
                </div>
            </div>
           </div>
         </form>
		 <?php
		 if(isset($_POST['sub'])){
              $con=mysqli_connect("localhost","root",12345,"assigndb");
              if($con){
            $fname=$_POST['fname'];
            $lname=$_POST['lname'];
            $email=$_POST['email'];
            $issue=$_POST['issue'];
            $msg=$_POST['msg'];
            
            $q="insert into contact values('$fname','$lname','$email','$issue','$msg')";
            $res=mysqli_query($con,$q);
            if($res){
                echo "<script>alert('Data is Recorded ..?');</script>";
				echo "<meta http-equiv='refresh' content='0'>";
            }
            else{
                echo "<script>alert('Something wrong in db connection..?');</script>";
            }
		}
	}
?>
       </div>
      </div>
    </div>    
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

