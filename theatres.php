

<!--Theatres-->


<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>
<head>

<style>
        /* Add any additional styles here */
        .row{
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 48%; /* Adjust the width as needed */
        }

    
    </style>



<title>OMTBS</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/tabs/css/tsc_tabs.css" />
<link rel="stylesheet" href="css/tsc_tabs.css" type="text/css" media="all" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='js/jquery.color-RGBa-patch.js'></script>
<script src='js/example.js'></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="header">
	<div class="header-top">
		<div class="wrap">
			<div class="h-logo">
			<a href="index.php"><img src="images/t-logo.png" alt="Logo Image Here"/></a>
		</div>
			  <div class="nav-wrap">
					<ul class="group" id="example-one" >
			           <li><a href="index.php" >Home</a></li>
			  		   <li><a href="theatres.php">Theatres</a></li>
			  		   <li><?php if(isset($_SESSION['user'])){
			  		   $us=mysqli_query($con,"select * from tbl_registration where user_id='".$_SESSION['user']."'");
        $user=mysqli_fetch_array($us);?><a href="profile.php"><?php echo $user['name'];?></a><a href="logout.php">Logout</a><?php }else{?><a href="login.php">Login</a> <a href="registration.php">Register</a><?php }?></li>
			        </ul>
			  </div>
 			<div class="clear"></div>
			
   		</div>
		
    </div>
     			<div class="clear"></div>
   	
<div class="block">
	<div class="wrap">
		
      
            <div class="clear"></div>
   </div>
</div>
<script>
function myFunction() {
     if($('#hero-demo').val()=="")
        {
            alert("Please enter movie name...");
            return false;
        }
    else{
        return true;
    }
}
    </script>



<div style="background-color: black;padding:20px;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;">Theatres</h2>


            <div class="row">
        <div class="column border border-white">
           <a href="ygnB.php"><img src="images/t1.jpg" width="300px" height="200px" alt="Image 1"></a>
            <h2 style="color:#555;text-align:center;color: white;">Yagon</h2>
        </div>
        <div class="column border border-white">
        <a href="mdyB.php"><img src="images/t1.jpg" width="300px" height="200px" alt="Image 1"></a>
            <h2 style="color:#555;text-align:center;color: white;">Mandalay</h2>
        </div>
    </div>

			</div>
				<div class="clear"></div>		
			</div>
			
			<div> <?php include('footer.php');?> </div>

    
</body>
</html>