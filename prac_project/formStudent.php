<!DOCTYPE html>

<html>

<head>
	<title>StudentInformation</title>
	<link rel="stylesheet" type="text/css" href="templates/styleForm.css">
</head>

<body>

	<?php include("dbconnect.php"); ?>

	<div class="container">

		<div class="">
			<h1>Student Form</h1>
		</div>
		<form action="InsertStud.php" method="POST">

		<!-- First and last Names -->
		<label for="name"><b>First Name:</b></label>
		<input type="text" name="name" placeholder="First Name">
		<label for="lastname"><b>Last Name:</b></label>
		<input type="text" name="lastname" placeholder="Last Name"></p>

		<!-- Student Number and Company Key -->
		<label for="StudentNumber"><b>Student Number:</b></label>
		<input type="text" name="StudentNumber" placeholder="Student Number" required>
		<label for="CompID"><b>Company Key:</b></label>
		<select name="CompID">
			<?php

			$sql = "SELECT CompID FROM department";
			$result = mysqli_query($con, $sql);
			//$resultCheck = mysqli_num_rows($result)

			while ($row = mysqli_fetch_assoc($result)) :;
			?>
				<option value="<?php echo $row['CompID']; ?>"><?php echo $row['CompID']; ?></option>
			<?php endwhile; ?>
		</select></p>

		<!-- Phone -->
		<label for="phone1"><b>Phone:</b></label>
		<input type="text" name="phone1" placeholder="Phone Number">
		<label for="phone2"><b>Second Phone:</b></label>
		<input type="text" name="phone2" placeholder="Phone Number"></p>

		<!-- E-mails -->
		<label for="email1"><b>e-mail:</b></label>
		<input type="text" name="email1" placeholder="e-mail">
		<label for="email2"><b>Second e-mail:</b></label>
		<input type="text" name="email2" placeholder="e-mail"></p>

		<!-- Street Address -->
		<label for="StreetAddress1"><b>Street Address:</b></label><br>
		<input type="text" name="StreetAddress1" placeholder="Street Address"></p>
		<label for="StreetAddress2"><b>Second Street Address:</b></label><br>
		<input type="text" name="StreetAddress2" placeholder="Street Address"></p>

		<p><label for="StreetState"><b>State:</b></label>
			<select name="StreetState">


				<?php

				$sql = "SELECT * FROM state";
				$result = mysqli_query($con, $sql);
				//$resultCheck = mysqli_num_rows($result)

				while ($row = mysqli_fetch_array($result)) :;
				?>
					<option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
				<?php endwhile; ?>

				<?php
				/*
							$sql = "SELECT * FROM state";
							$result = mysqli_query($con, $sql);
							$resultCheck = mysqli_num_rows($result);
							
						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result)){ 
								echo "<option>".$row['state']."</option>";
							}
						}
						*/
				?>
			</select>
			<label for="StreetCity"><b>City:</b></label>
			<input type="text" name="StreetCity" placeholder="City">
			<label for="StreetZipCode"><b>ZipCode:</b></label>
			<input type="text" name="StreetZipCode" placeholder="00680">
		</p>

		<!-- Postal Address -->
		<label for="PostalAddess1"><b>Postal Address:</b></label><br>
		<input type="text" name="PostalAddress1" placeholder="Postal Address"></p>
		<label for="PostalAddress2"><b>Second Postal Address:</b></label><br>
		<input type="text" name="PostalAddress2" placeholder="Postal Address"></p>

		<p><label for="PostalState"><b>State:</b></label>
			<select name="PostalState">

				<?php

				$sql = "SELECT * FROM state";
				$result = mysqli_query($con, $sql);
				//$resultCheck = mysqli_num_rows($result)

				while ($row = mysqli_fetch_assoc($result)) :;
				?>
					<option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
				<?php endwhile; ?>



				<?php
				/*
							$sql = "SELECT * FROM state";
							$result = mysqli_query($con, $sql);
							$resultCheck = mysqli_num_rows($result);
							
						if($resultCheck > 0){
							while($row = mysqli_fetch_assoc($result)){ 
								echo "<option value= 'PostalState'>".$row['state']."</option>";
							}
						}
						*/
				?>
			</select>
			<label for="PostalCity"><b>City:</b></label>
			<input type="text" name="PostalCity" placeholder="City">
			<label for="PostalZipCode"><b>ZipCode:</b></label>
			<input type="text" name="PostalZipCode" placeholder="00680">
		</p>

		<!-- Term -->
		<p><label for="term"><b>Term:</b></label>
			<select name="term">


				<?php

				$sql = "SELECT * FROM term";
				$result = mysqli_query($con, $sql);
				//$resultCheck = mysqli_num_rows($result)

				while ($row = mysqli_fetch_assoc($result)) :;
				?>
					<option value="<?php echo $row['term']; ?>"><?php echo $row['term']; ?></option>
				<?php endwhile; ?>

			</select>

		<p><button type="submit" name="submit">Submit</button>


			</form>
	</div>

</body>

</html>