<!DOCTYPE html>

<html>

<head>
    <title>StudentDocuments</title>
    <link rel="stylesheet" type="text/css" href="templates/styleForm.css">
</head>

<body>

    <?php include("dbconnect.php"); ?>

    <div class="container">
        <div class="">
            <h1>Student Documents Form</h1>
        </div>
		
		<form action="InsertSDoc.php" method="POST" enctype="multipart/form-data">

        <!--Student Number -->
        <label for="StudentNumber"><b>Student Number:</b></label>
        <input type="text" name="StudentNumber" placeholder="Student Number">

        <!--Upload File -->
        <p><label for="Description"><b>File Description: </b></label>
            <input type="text" name="desc">
        </p>
        <p><label for="file"><b>Upload File: </b></label>
            <input type="file" name="filename">

            <!-- Term -->
        <p><label for="term"><b>Term:</b></label>

            <select name="term">

                <?php
						
								$sql = "SELECT * FROM term";
								$result = mysqli_query($con, $sql);
								//$resultCheck = mysqli_num_rows($result)
								
								while($row = mysqli_fetch_assoc($result)):;
						?>
                <option value="<?php echo $row['term'];?>"><?php echo $row['term'];?></option>
                <?php endwhile;?>

            </select>

        <p><button type="submit" name="upload">Submit</button>

            </form>
        <div>


</body>

</html>