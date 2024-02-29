<?php
include('config.php');
session_start();
date_default_timezone_set('Asia/Kathmandu');
?>

<!DOCTYPE HTML>
<html>

<head>
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

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/css/swiper.min.css">
  <link rel="stylesheet" href="js/swiper.js">
  <script></script>


  <link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>

  <style>
    .nav-wrap ul li a:hover {
      color: red;
    }

    body {
      font-family: 'Open Sans';
      font-size: 18px;
    }
    .search-box {
    text-align: left;
    padding-top: 10px; /* Adjust the padding as needed */
    margin-right: 30px;
  }
  .custom-text {
    color: #ff5733; /* Replace with your desired color code */
  }

  </style>



</head>

<body>


  <div class="header" style="background-image: url('images/1.jpg'); background-size: cover;
 background-position: center center; background-repeat: no-repeat;padding-bottom:300px;
">

    <div class="header-top">
      <div class="wrap">
        <div class="h-logo">
          <!-- <a href="index.php"><img src="images/t-logo.png" alt="Logo Image Here"/></a> -->
        </div>

        <div class="nav-wrap">
          <ul class="nav nav-pills group pt-50" id="example-one">
            <li class="nav-item">
              <a href="index.php" style="font-family: Open Ssans, Helvetica, sans-serif;font-size:medium" class="btn btn-danger" class="custom-text">Home</a>
            </li>
            <li class="nav-item">
            <li><a href="theatres.php"  style="font-family: Open Ssans, Helvetica, sans-serif;font-size:medium">Theatres</a></li>
            <li class="nav-item">
            <li>
              <?php if (isset($_SESSION['user'])) {
                $us = mysqli_query($con, "select * from tbl_registration where user_id='" . $_SESSION['user'] . "'");
                $user = mysqli_fetch_array($us); ?><a href="profile.php">
                  <?php echo $user['name']; ?>
                </a><a href="logout.php"  style="font-family: Open Ssans, Helvetica, sans-serif;font-size:medium ;margin-right:4px">Logout</a>
              <?php } else { ?><a href="login.php"  style="font-family: Open Ssans, Helvetica, sans-serif;font-size:medium">Login</a>
                <a href="registration.php"  style="font-family: Open Ssans, Helvetica, sans-serif;font-size:medium">Register</a>
              <?php } ?>
            </li>
            </li>



          </ul>

        </div>

      </div>

    </div>



    <div class="block">
	<div class="wrap">
		
    <form action="process_search.php" id="reservation-form" method="post" onsubmit="myFunction()" class="search-box">
		       <fieldset>
		       	<div class="field" >
		       	
		       		     
                                <input type="text" placeholder="Enter A Movie Name" style="height:35px;width:300px"  required id="search111" name="search">
                                
                                <input type="submit" value="Search" style="height:36px;padding-top:6px" class="rounded pr-10 btn-danger" id="button111">



     
    </div>       	

		       </fieldset>
            </form>

            <div class="clear"></div>
   </div>
</div> 
  </div>



  <!-- <script>
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
    </script> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>

  <script src="js/swiper.js"></script>


</body>