<?php include "includes/db.php"; ob_start(); session_start();?>

<?php 

if(isset($_POST['login'])){
    
    $username = $_POST['email'];
    
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    
    $query = "SELECT * FROM  users WHERE user_name = '{$username}'";
    $select_query = mysqli_query($connection, $query);
    if(!$select_query){
        die("QUERY FAILED".mysqli_error($connection));
    }
    
    while($row = mysqli_fetch_array($select_query)){
        
//        $user_id = $row['user_id'];
        $db_username = $row['user_name'];
        $db_password = $row['password'];
//        $db_firstname = $row['firstname'];
//        $db_lastname = $row['lastname'];
        $user_role = $row['user_role'];
    }
    
    if($username != $db_username && $password != $db_password ){
        
        header("Location: index.php");
    }else if($username == $db_username && $password == $db_password){
        
        $_SESSION['username'] = $db_username;
//        $_SESSION['firstname'] = $db_firstname;
//        $_SESSION['lastname'] = $db_lastname;
        $_SESSION['user_role'] = $user_role;
        
        header("Location: landing.php");
        
        
    } else {
        header("Location: index.php");
    }
}

?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>CommonApp</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css1/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<!-- font CSS -->
<!-- font-awesome icons -->
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link href="css1/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css1/custom.css" rel="stylesheet">
<!--//Metis Menu -->
</head> 
<body class="cbp-spmenu-push">
	<div class="main-content">
		
		<!--left-fixed -navigation-->
		<!-- header-starts -->
		<div class="sticky-header header-section ">
			<div class="header-left">
				
				<!--logo -->
				<div class="logo">
					<a href="index.php">
						<h1>COMMON APP</h1>
						<span>DB PROJECT</span>
					</a>
				</div>
				
				<div class="clearfix"> </div> 
			</div>
			
				
						</li>
					</ul>
				</div>	
				<div class="clearfix"> </div>	
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //header-ends -->