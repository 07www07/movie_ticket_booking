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
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap">



    <style>
        /*
<style>
        /* Add any additional styles here */
        .row {
            display: flex;
            justify-content: space-between;
        }

        .column {
            width: 48%;
            /* Adjust the width as needed */
        }

        .rounded-image {
            border-radius: 40px;
            /* Adjust the border-radius as needed */
            overflow: hidden;
        }

        .rounded-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        body {
            font-family: 'Open Sans';
            font-size: 18px;
        }
        .image-container {
        position: relative;
        overflow: hidden;
    }

    .zoom-image {
       
        transition: 0.3s ease-in-out;
        margin-top: 40px;
        margin-bottom:40px;
    }

    .zoom-image:hover {

        transform: scale(1.1);
        
    }
    .card:hover{
        transform: scale(1.02);
        transition: 0.3s ;
    }

    @import url(https://fonts.googleapis.com/css?family=Raleway:400);
@import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);
figure.snip1193 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  position: relative;
  justify-content: center;
  align-items: center;
  overflow: hidden;
  margin: 10px;
  min-width: 220px;
  max-width: 310px;
  max-height: 220px;
  width: 100%;
  background: #000000;
  text-align: center;
  border-radius: 8px;
  box-shadow: 0 0 5px rgba(0, 0, 0, 0.15);
}

.figure-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: -15px; /* To offset default padding of Bootstrap columns */
            padding: 70px;
 



        }


figure.snip1193 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
figure.snip1193 img {
  opacity: 1;
  width: 100%;
  display: block;
}
figure.snip1193 figcaption {
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  margin: 10px 12px 5px;
  position: absolute;
  justify-content: center;
}
figure.snip1193 h4,
figure.snip1193 i {
  color: #ffffff;
}
figure.snip1193 h4 {
  font-weight: 400;
  left: 0;
  width: 100%;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 1px;
}
figure.snip1193 i {
  font-size: 22px;
}
figure.snip1193 a {
  text-decoration: none;
}
figure.snip1193 .bottom-left,
figure.snip1193 .bottom-right {
  position: absolute;
  bottom: 5px;
  opacity: 0;
}
figure.snip1193 .bottom-left {
  left: 5px;
  -webkit-transform: translate(-50%, 50%);
  transform: translate(-50%, 50%);
}
figure.snip1193 .bottom-right {
  right: 5px;
  -webkit-transform: translate(50%, 50%);
  transform: translate(50%, 50%);
}
figure.snip1193:hover img,
figure.snip1193.hover img {
  opacity: 0.6;
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
figure.snip1193:hover figcaption .bottom-left,
figure.snip1193.hover figcaption .bottom-left,
figure.snip1193:hover figcaption .bottom-right,
figure.snip1193.hover figcaption .bottom-right {
  -webkit-transform: translate(0, 0);
  transform: translate(0, 0);
  opacity: 1;
}


    </style>

</head>

<body>

    <?php
    include('header.php');
    ?>


    <div style="background-color:#01010A;width:full;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;font-family: Open Ssans, Helvetica, sans-serif;padding:30px;margin-top:50px;border-bottom: 3px solid #ff5733;">NOW SHOWING</h2>
            <?php
            $today = date("Y-m-d");
            $qry2 = mysqli_query($con, "select * from tbl_movie ");

            // Set the number of columns per row
            $columnsPerRow = 4;
            $columnCount = 0;

            // Start the container for centered content
            

            // Display a total of 2 rows
            for ($row = 1; $row <= 2; $row++) {
                // Start a new row container
                echo '<div class="row">';

                // Fetch the first movie to get its image size
                $firstMovie = mysqli_fetch_array($qry2);

                // Calculate the width based on the first movie's image size
                $imageWidth = 'width: ' . (100 / $columnsPerRow) . '%';

                // Reset the column count for each row
                $columnCount = 0;

                // Loop through the movies
                for ($col = 1; $col <= $columnsPerRow; $col++) {
                    $m = mysqli_fetch_array($qry2);
                    if (!$m) {
                        // If there are fewer than (2 rows * 4 columns) movies, break the loop
                        break;
                    }
                    ?>
                    <div class="col-12 col-md-3" style="<?php echo $columnCount === 0 ? $imageWidth : ''; ?>">
                        <div class="imageRow">
                            <div class="single">
                                <?php
                            
                                ?>

                                <div class="card text-white bg-dark rounded" style="width: 25rem;height:44rem;
                                 transition: 0.3s ease-in-out;margin-top:20px" 
                                onmouseover="this.style.backgroundColor='#fffff0';" onmouseout="this.style.backgroundColor='transparent'"
                                ;">
                                    <a href="about.php?id=<?php echo $m['movie_id']; ?>">
                                        <img src="<?php echo $m['image']; ?>" class="rounded " alt="Rounded Image"
                                            style="width: 80%; height: 95%;margin-top:20px;" ><a/>
                                        <div class="card-body">
                                    </a>
                                </div>
                                <div class="movie-text" ">
                                <h4 class="h-text"">
                                        <a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;font-family: Open Ssans, Helvetica, sans-serif;">
                                            <?php echo $m['movie_name']; ?>
                                        </a>
                                    </h4>
                                    Cast: <span class="color2" style="text-decoration:none;text-align:center;justify-content:center;font-family: Open Ssans, Helvetica, sans-serif;">
                                        <?php echo $m['cast']; ?>
                                    </span><br>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger"  style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;">Details</a>
                        </div>
                    </div>



                </div>

                <?php
                // Increment the column count
                $columnCount++;
                }

                // Close the current row container
                echo '</div>';
            }

            // Close the container for centered content
            echo '</div>';
            ?>

    </div>
    </div>



    <!--Upcoming Movies-->

    <div style="background-color:#01010A;width:full">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;font-family: Open Ssans, Helvetica, sans-serif;padding:30px;margin-top:70px;border-bottom: 3px solid #ff5733;">UPCOMING MOVIES</h2>
            <?php
            $today = date("Y-m-d");
            $qry2 = mysqli_query($con, "select * from tbl_movie ");

            // Set the number of columns per row
            $columnsPerRow = 4;
            $columnCount = 0;

            // Start the container for centered content
            

            // Display a total of 2 rows
            for ($row = 1; $row <= 2; $row++) {
                // Start a new row container
                echo '<div class="row">';

                // Fetch the first movie to get its image size
                $firstMovie = mysqli_fetch_array($qry2);

                // Calculate the width based on the first movie's image size
                $imageWidth = 'width: ' . (100 / $columnsPerRow) . '%';

                // Reset the column count for each row
                $columnCount = 0;

                // Loop through the movies
                for ($col = 1; $col <= $columnsPerRow; $col++) {
                    $m = mysqli_fetch_array($qry2);
                    if (!$m) {
                        // If there are fewer than (2 rows * 4 columns) movies, break the loop
                        break;
                    }
                    ?>
                    <div class="col-12 col-md-3" style="<?php echo $columnCount === 0 ? $imageWidth : ''; ?>">
                        <div class="imageRow">
                            <div class="single">
                                <?php
                            
                                ?>

                                <div class="card text-white bg-dark rounded " style="width: 25rem;height:44rem; transition: 0.3s ease-in-out;margin-top:20px" 
                                onmouseover="this.style.backgroundColor='#FDF5E6'" onmouseout="this.style.backgroundColor='transparent'"
                                ; font-family: 'Open Sans';">
                                    <a href="about.php?id=<?php echo $m['movie_id']; ?>">
                                        <img src="<?php echo $m['image']; ?>" class="rounded " alt="Rounded Image"
                                            style="width: 80%; height: 95%;margin-top:20px;" ><a/>
                                        <div class="card-body">
                                    </a>
                                </div>
                                <div class="movie-text" ">
                                <h4 class="h-text"">
                                        <a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;font-family: Open Ssans, Helvetica, sans-serif;">
                                            <?php echo $m['movie_name']; ?>
                                        </a>
                                    </h4>
                                    Cast: <span class="color2" style="text-decoration:none;text-align:center;justify-content:center;font-family: Open Ssans, Helvetica, sans-serif;">
                                        <?php echo $m['cast']; ?>
                                    </span><br>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger"  style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;">Details</a>
                        </div>
                    </div>



                </div>

                <?php
                // Increment the column count
                $columnCount++;
                }

                // Close the current row container
                echo '</div>';
            }

            // Close the container for centered content
            echo '</div>';
            ?>

    </div>
    </div>



    <!--Movie Trailers-->

    <div style="background-color:#01010A;width:full">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;font-family: Open Ssans, Helvetica, sans-serif;padding:30px;margin-top:60px;border-bottom: 3px solid #ff5733;">MOVIE TRAILERS</h2>
            <?php
            $today = date("Y-m-d");
            $qry2 = mysqli_query($con, "select * from tbl_movie ");

            // Set the number of columns per row
            $columnsPerRow = 4;
            $columnCount = 0;

            // Start the container for centered content
            

            // Display a total of 2 rows
            for ($row = 1; $row <= 2; $row++) {
                // Start a new row container
                echo '<div class="row">';

                // Fetch the first movie to get its image size
                $firstMovie = mysqli_fetch_array($qry2);

                // Calculate the width based on the first movie's image size
                $imageWidth = 'width: ' . (100 / $columnsPerRow) . '%';

                // Reset the column count for each row
                $columnCount = 0;

                // Loop through the movies
                for ($col = 1; $col <= $columnsPerRow; $col++) {
                    $m = mysqli_fetch_array($qry2);
                    if (!$m) {
                        // If there are fewer than (2 rows * 4 columns) movies, break the loop
                        break;
                    }
                    ?>
                    <div class="col-12 col-md-3" style="<?php echo $columnCount === 0 ? $imageWidth : ''; ?>">
                        <div class="imageRow">
                            <div class="single">
                                <?php
                            
                                ?>

                                <div class="card text-white bg-dark rounded" style="width: 25rem;height:44rem; transition: 0.3s ease-in-out;margin-top:20px" 
                                onmouseover="this.style.backgroundColor=''" onmouseout="this.style.backgroundColor='transparent'"
                                ; font-family: 'Open Sans';">
                                    <a href="about.php?id=<?php echo $m['movie_id']; ?>">
                                        <img src="<?php echo $m['image']; ?>" class="rounded " alt="Rounded Image"
                                            style="width: 80%; height: 95%;margin-top:20px;" ><a/>
                                        <div class="card-body">
                                    </a>
                                </div>
                                <div class="movie-text" ">
                                <h4 class="h-text"">
                                        <a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;font-family: Open Ssans, Helvetica, sans-serif;">
                                            <?php echo $m['movie_name']; ?>
                                        </a>
                                    </h4>
                                    Cast: <span class="color2" style="text-decoration:none;text-align:center;justify-content:center;font-family: Open Ssans, Helvetica, sans-serif;">
                                        <?php echo $m['cast']; ?>
                                    </span><br>
                                </div>
                            </div>
                            <a href="#" class="btn btn-danger"  style="margin-top:9px;width:110px;text-align:center;margin-right:10px;font-family: Open Ssans, Helvetica, sans-serif;">Details</a>
                        </div>
                    </div>



                </div>

                <?php
                // Increment the column count
                $columnCount++;
                }

                // Close the current row container
                echo '</div>';
            }

            // Close the container for centered content
            echo '</div>';
            ?>

    </div>
    </div>


    <!--Theatres-->

    <div style="background-color: #01010A; padding:20px;padding-bottom:80px">
    <div class="container text-center">
        <h2 style="color:#555; text-align:center; margin-top:60px; color: white; font-family: 'Open Sans', Helvetica, sans-serif">THEATRES</h2>

        <div class="card  text-white bg-dark" style="width: 80rem; height:30rem;margin-left:150px">
  <img class="card-img-top" src="images/cinema.jpg"  height="200px"  alt="Card image cap">
  <div class="card-body align-middle">
    <p style="text-align:center;font-family: 'Open Sans', Helvetica, sans-serif">Choose Your Location</p>
    
    <a href="#" class="btn btn-warning" style="margin-left:-8px;font-family: 'Open Sans', Helvetica, sans-serif">YANGON</a>
    <a href="#" class="btn btn-warning" style="text-align:center;font-family: 'Open Sans', Helvetica, sans-serif">MANDALAY</a>
  </div>
</div>




    </div>
</div>


<divv class="figure-container">

<figure class="snip1193">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample31.jpg" alt="sample31"/>
  <figcaption>
    <h4>Max Conversion</h4>
    <a href="#" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href="#" class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
  </figcaption>
</figure>
<figure class="snip1193 hover">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample68.jpg" alt="sample68"/>
  <figcaption>
    <h4>Indigo Violet</h4>
    <a href="#" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href="#" class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
  </figcaption>
</figure>
<figure class="snip1193">
  <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample69.jpg" alt="sample69"/>
  <figcaption>
    <h4>Richard Tea</h4>
    <a href="#" class="bottom-left"><i class="ion-ios-chatboxes-outline"></i></a><a href="#" class="bottom-right"><i class="ion-ios-telephone-outline"></i></a>
  </figcaption>
</figure>

</divv>


<script>

$(".hover").mouseleave(
    function () {
      $(this).removeClass("hover");
    }
  );
</script>






        <div class="clear"></div>
    </div>

    <div>
        <?php include('footer.php'); ?>
    </div>