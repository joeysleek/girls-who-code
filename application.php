<?php
include_once('includez/check_log.php');
$status='';

if(isset($_POST['phone'])){
	$phone = mysqli_real_escape_string($dbConx,$_POST['phone']);
	$comment = mysqli_real_escape_string($dbConx,$_POST['comment']);
	$qualification = mysqli_real_escape_string($dbConx,$_POST['qualification']);
	$resume = $_FILES['resume'];
	$video = $_FILES['video'];
	
	if($phone==''||$comment==''||$qualification==''){$status = '<div class="alert alert-danger">Please fill all fields</div>';}
	else{
		//process resume
		$fileName = $_FILES['resume']['name'];//file name
		$fileTmpLoc = $_FILES['resume']['tmp_name'];//file in the php tmp folder
		$xPlode = explode (".", $fileName);//split the file name into an array using a dot
		$fileExt = strtolower(end($xPlode));//string to lower to convert the letters to lower case
		$resumeName = $phone.'.'.$fileExt;
		$uploadAction = move_uploaded_file($fileTmpLoc, "resume/$resumeName");
		
		//process video
		$fileName = $_FILES['video']['name'];//file name
		$fileTmpLoc = $_FILES['video']['tmp_name'];//file in the php tmp folder
		$xPlode = explode (".", $fileName);//split the file name into an array using a dot
		$fileExt = strtolower(end($xPlode));//string to lower to convert the letters to lower case
		$videoName = $phone.'.'.$fileExt;
		$uploadAction = move_uploaded_file($fileTmpLoc, "video/$videoName");
		
		
		
		$sql="UPDATE members SET mobile='$phone',comment='$comment',qualification='$qualification',resume='$resumeName',video='$videoName' WHERE id='$member_id' LIMIT 1";
		$query = mysqli_query($dbConx,$sql) or die(mysqli_error($dbConx));
		if($query){$status = '<div class="alert alert-success">Correct! Application Completed</div>';}
	}
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $memberFullname?> || Girls Who Code Website</title>
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
	<?php include('header.php');?>
	<!-- banner -->
	
	<!--//banner -->
	
	<!-- //banner-bottom -->
	
	<!-- services -->
	
	<!-- //services -->
	<!-- /mid-services -->
	
	<!-- //mid-services -->
	<div class="candidate_cv">
		<div class="tittle_head_w3ls">
			<h3 class="tittle two"><small>Welcome</small> <?php echo $memberFullname?></h3>
	
		<h3 class="tittle two"><small>Complete your Registration</small></h3>
		</div>
		<div class="inner_sec_grids_info login-form">

		<?php echo $status?>		
			<form action="#" method="post" enctype="multipart/form-data">
				<div class="col-md-6 form-left">
					<div class="form-inputs email">
						<p>Full name</p>
						<i class="fa fa-user" aria-hidden="true"></i>
						<input type="text"  placeholder="" value="<?php echo $memberFullname?>" readonly required="">
					</div>
					<div class="form-inputs name">
						<p>Email</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
						<input type="email"  placeholder="" value="<?php echo $member_email?>" readonly required="">
					</div>
					<div class="form-inputs name">
						<p>Phone</p>
						<i class="fa fa-phone" aria-hidden="true"></i>
						<input type="text" name="phone" placeholder="">
					</div>

				</div>
				<div class="col-md-6 form-right">
					<div class="form-inputs name">
						<p>Why do you want to join the girls who code Program?(Not More than 500 words.)</p>
						<i class="fa fa-comment" aria-hidden="true"></i>
						<textarea name="comment" placeholder=""></textarea>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="form-inputs">
					<p>Specify your current Academic Status</p>
					<ul>
						<li>
							<input type="radio" id="a-option" checked value="SSCE" name="qualification">
							<label for="a-option">SSCE </label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="b-option" value="Ordinary National Diploma"  name="qualification">
							<label for="b-option">Ordinary National Diploma</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="c-option" value="Higer National Diploma"  name="qualification">
							<label for="c-option">Higer National Diploma</label>
							<div class="check"></div>
						</li>
						<li>
							<input type="radio" id="d-option" value="Bachelors Degree"  name="qualification">
							<label for="d-option">Bachelors Degree</label>
							<div class="check"></div>
						</li>

                        <li>
							<input type="radio" id="d-option" value="Bachelors Degree"  name="qualification">
							<label for="d-option">Post Graduate Degree</label>
							<div class="check"></div>
						</li>
	
					</ul>
					
					<div class="clearfix"></div>
				</div>
				<div class="form-inputs upload">
					<p>Upload your resume</p>
					<input type="file" id="fileselect" name="resume">
					<div id="filedrag">Upload</div>
				</div><br>
				
				<div class="form-inputs upload">
					<p>Upload a 1 min Video </p>
					<input type="file" id="fileselect" name="video">
					<div id="filedrag">Upload</div>
				</div>
				<input type="submit" value="Submit">
					
			</form>

		</div>
	</div>
	<!-- //testimonials -->
	

	<!-- footer -->
	<?php include('footer.php');?>
	<!-- //footer -->

	<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>

</body>

</html>