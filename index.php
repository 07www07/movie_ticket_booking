

<html>

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


<body>
<?php
include('header.php');
?>


<div style="background-color:#01010A;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;">Now Showing</h2>
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
    echo '<div class="row justify-content-center">';

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
            // This seems to be an empty PHP block. You might add some code here later.
            ?>
            <a href="about.php?id=<?php echo $m['movie_id']; ?>">
                <img src="<?php echo $m['image']; ?>" class="rounded" alt="" style="width: 80%; height: 65%;" />
            </a>
        </div>
        <div class="movie-text">
            <h4 class="h-text">
                <a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;">
                    <?php echo $m['movie_name']; ?>
                </a>
            </h4>
            Cast: <span class="color2" style="text-decoration:none;"><?php echo $m['cast']; ?></span><br>
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

<div style="background-color: #01010A;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;">Upcoming Movies</h2>
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
    echo '<div class="row justify-content-center">';

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
                    <a href="about.php?id=<?php echo $m['movie_id']; ?>"><img src="<?php echo $m['image']; ?>" alt="" style="width: 80% ;height:65%;" /></a>
                </div>
                <div class="movie-text">
                    <h4 class="h-text"><a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;"><?php echo $m['movie_name']; ?></a></h4>
                    Cast: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast']; ?></span><br>
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

<div style="background-color: #01010A;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;">Movie Trailers</h2>
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
    echo '<div class="row justify-content-center">';

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
        <div class="col-12 col-md-3 " style="<?php echo $columnCount === 0 ? $imageWidth : ''; ?>">
            <div class="imageRow">
                <div class="single">
                    <?php
                    ?>
                    <a href="about.php?id=<?php echo $m['movie_id']; ?>"><img src="<?php echo $m['image']; ?>" alt="" style="width: 80% ;height:65%;" /></a>
                </div>
                <div class="movie-text " >
                    <h4 class="h-text"><a href="about.php?id=<?php echo $m['movie_id']; ?>" style="text-decoration:none;"><?php echo $m['movie_name']; ?></a></h4>
                    Cast: <Span class="color2" style="text-decoration:none;"><?php echo $m['cast']; ?></span><br>
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

<div style="background-color: #01010A;padding:20px;">
        <div class="container text-center">
            <h2 style="color:#555;text-align:center;color: white;">Theatres</h2>


            <div class="row">
        <div class="column">
            <img src="images/t1.jpg" alt="Image 1">
            <h2 style="color:#555;text-align:center;color: white;">Yagon</h2>
        </div>
        <div class="column">
            <img src="images/t1.jpg" alt="Image 2">
            <h2 style="color:#555;text-align:center;color: white;">Mandalay</h2>
        </div>
    </div>

			</div>
				<div class="clear"></div>		
			</div>
			
			<div> <?php include('footer.php');?> </div>
