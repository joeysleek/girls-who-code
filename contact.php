<!--newsletter mailling system
This stores the subscriber information in the database once he/she subscribes-->
<?php
/*$con = mysqli_connect("localhost","root",)or die("error connecting to server");//when the user click on subscribe button,this will happen
       mysqli_select_db($con,"db") or die("error connecting to database");//this program happens when the user put his mail n subscribes
	   //user
	   if(issect($_POST['email'])){                                       //my database connection should be on a different page n do"include" in my contact page
$to = $_POST['email'];//The person you are sending the mail to
$Query = "INSERT INTO `subscribers` (`email`,`msg`) value('$to','')";//msg n empty string will be added when its giving issues
mysqli_query($con,$query);//You are asking query to run the program above
$msg = "Thank u for subscribing";
$header ="from: gwc website",
if(mail($to,$sub,$msg,$header)){
echo"good";
   }
}
//This is for my admin page
if(isset($_POST['message'])){
    $msg = $_POST['message'];
	$query = "UPDATE `subscribe` SET `msg` = '$msg' Limit 1"
	mysqli_query($con,$query) or die(mysqli_error($con);//the box message should be created in a different admin section
	//This sis to get all the users on our datapage
	$Query ="SELECT `email` FROM `subscribe`";
	$query_run = mysqli_query($con,$query) or die(mysqli_error($con));
	while($row = mysqli_fetch_assoc($query
	}*/
/*$query = "SELECT msg FROM `subscribers`"//this will fetch the"msg"in the table
    
    while(row = mysqli_query($con,$query)){
       $msg = row['msg'];//This is the message you are sending to the person
$sub ="Training";//The subject of the message being sent
$header = "from: joeysleek25@gmail.com"//who is sending the message
if(mail($to,$sub,$msg,$header)){//This is to verify if the above program went through
        echo"success";//Create a table called'subscribers' which has'email','serial_no','msg'and'id'.Create an adminarea n paste ur
		                //newsletter code,copy ur php code n put into adminarea
	}else{
	    echo "mail failed";
		}
       } */



?>
<!DOCTYPE html>
<html>
<head>
	<title> Girls Who Code Website</title>
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
	<!-- header -->
	<?php include('header.php'); ?>
	<!-- banner -->
	<div class="inner_page_agile">
		<h3>Outlook</h3>
		<p>In GWC,we believe that there is no barrier we cannot break,no height too tall,no mountain too high to climb,
		We can and together,we will make a difference in the world of technology.</p>

	</div>
	<!--//banner -->
	<!--/w3_short-->
	<div class="services-breadcrumb_w3layouts">
		<div class="inner_breadcrumb">

			<ul class="short_w3ls"_w3ls>
				<li><a href="index.php">Home</a><span>|</span></li>
				<li>Contact</li>
			</ul>
		</div>
	</div>
	<!--//w3_short-->
	<!-- /inner_content -->
	<div class="inner_content_info_agileits">
		<div class="container">
			<!---728x90--->
			<div class="tittle_head_w3ls">
				<h3 class="tittle">Contact Us</h3>
			</div>
			<!---728x90--->
			<div class="inner_sec_grids_info_w3ls">
				<div class="col-md-4 agile_info_mail_img_info">
					<div class="address-grid">
						<h4>Contact <span>Info</span></h4>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Telephone </p><span>+234 8096 55 5710</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-envelope-o" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Mail </p><a href="mailto:info@example.com">www.acecharityafrica.org</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="mail-agileits-w3layouts">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
							<div class="contact-right">
								<p>Location</p><span>Transcorp Hilton,No 1 Aguyi ironsi street,Maitama,Abuja.</span>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="agileits_w3layouts_nav_right contact">
							<div class="social two">
								<ul>
									<li><a href="ACE Charity Foundation"><i class="fa fa-facebook"></i></a></li>
									<li><a href="@acecharity"><i class="fa fa-twitter"></i></a></li>
									<li><a href="@acecharity"><i class="fa fa-instagram"></i></a></li>
									<li><a href="#"><i class="fa fa-rss"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-8 agile_info_mail_img">

				</div>
				<div class="clearfix"> </div>
				<!---728x90--->
			</div>

		</div>
	</div>
	<!-- footer -->
	<?php include('footer.php'); ?>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>