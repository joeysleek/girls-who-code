<?php
include_once('includez/connection.php');

$status='';
if(isset($_POST['fullname'])){
	$fullname = mysqli_real_escape_string($dbConx,$_POST['fullname']);
	$email = mysqli_real_escape_string($dbConx,$_POST['email']);
	$pass1 = mysqli_real_escape_string($dbConx,$_POST['pass1']);
	$pass2 = mysqli_real_escape_string($dbConx,$_POST['pass2']);
	
	
	if($fullname==''||$email==''||$pass1==''||$pass2==''){$status = '<div class="alert alert-danger">Please fill all fields</div>';}
	else if($pass1!=$pass2){$status = '<div class="alert alert-danger">Passwords dont match</div>';}
	else{
		$hashPassword = md5($pass1);
		$sql="INSERT INTO members (fullname,email,password,reg_date) VALUES ('$fullname','$email','$hashPassword',now())";
		$query = mysqli_query($dbConx,$sql);
		if($query){$status = '<div class="alert alert-success">Thank You! Please Click on Log in to continue...</div>';}
	}
	
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Girls Who Code Website</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Soft Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //for bootstrap working -->
	<link href="http://fonts.googleapis.com/css?family=Work+Sans:200,300,400,500,600,700" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic'
	    rel='stylesheet' type='text/css'>
</head>

<body>
	<?php include('header.php');?>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Quote of the Day</h3>
		<p>If you want to be somebody,if you want to get somewhere,you've got to wake up and pay attention.<br>
		...Whoopi Goldberg</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Register</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<!---728x90--->
			<div class="tittle_head_w3ls">
				<h3 class="tittle three">Register Now </h3>
			</div>
			<?php echo $status?>
			<!---728x90--->
			<div class="inner_sec_grids_info_w3ls">
				<div class="signin-form">
					<div class="login-form-rec">
						<form action="" method="post">
							<input type="text" name="fullname" placeholder="Fullname" required="">
							<input type="email" name="email" placeholder="Email" required="">
							<input type="password" name="pass1" id="password1" placeholder="Password" required="">
							<input type="password" name="pass2" id="password2" placeholder="Confirm Password" required="">
							<input type="submit" value="Register"> 
						</form>
					</div>
					<p class="reg"><a href="#"> By clicking register, I agree to your terms.</a></p>

				</div>
			</div>
			<!---728x90--->
		</div>
	</div>
	<?php include('footer.php');
	?>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>