<!DOCTYPE html>

<html>

<head>
	<title>CompanyInformation</title>
	<link href="templates/styleForm.css" rel="stylesheet" type="text/css">
</head>

<body>

	<?php include("dbconnect.php") ?>

	<div class="container">

	<div class="form-Title">
		<h1>Company Form</h1>
	</div>

		<form action="InsertComp.php" method="POST">

		<div class="">
			<!-- Company Name and owner -->
			<label for="name"><b>Company Name:</b></label>
			<input type="text" name="name" placeholder="Company Name">
			<label for="owner"><b>Owner:</b></label>
			<input type="text" name="owner" placeholder="Owner"></p>
			<label for="webpage"><b>Company Page:</b></label>
			<input type="text" name="webpage" placeholder="Company Web Page"></p>
			<label for="description"><b>Company Description:</b></label>
			<input type="text" name="description" placeholder="Company Description"></p>
		</div>

		<div class="">
			<!-- Phone -->
			<label for="phone1"><b>Phone:</b></label>
			<input type="text" name="phone1" placeholder="Phone Number"></p>
			<label for="phone2"><b>other Phone:</b></label>
			<input type="text" name="phone2" placeholder="Phone Number"></p>
		</div>

		<div class="">
			<!-- E-mails -->
			<label for="email1"><b>e-mail:</b></label>
			<input type="text" name="email1" placeholder="e-mail">
			<label for="email2"><b>other e-mail:</b></label>
			<input type="text" name="email2" placeholder="e-mail"></p>
		</div>

		<div class="">			
			<!-- Street Address -->
			<label for="StreetAddress1"><b>Street Address:</b></label><br>
			<input type="text" name="StreetAddress1" placeholder="Street Address"></p>
			<label for="StreetAddress2"><b>Second Street Address:</b></label><br>
			<input type="text" name="StreetAddress2" placeholder="Street Address"></p>
		</div>

		<div class="">
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
				</select>

				<label for="StreetCity"><b>City:</b></label>
				<input type="text" name="StreetCity" placeholder="City">
				<label for="StreetZipCode"><b>ZipCode:</b></label>
				<input type="text" name="StreetZipCode" placeholder="00680">
			</p>
		</div>

		<div class="">
			<!-- Postal Address -->
			<label for="PostalAddress1"><b>Postal Address:</b></label><br>
			<input type="text" name="PostalAddress1" placeholder="Postal Address"></p>
			<label for="PostalAddress2"><b>Second Postal Address:</b></label><br>
			<input type="text" name="PostalAddress2" placeholder="Postal Address">

			<p><label for="PostalState"><b>State:</b></label>
				<select name="PostalState">

					<?php

					$sql = "SELECT * FROM state";
					$result = mysqli_query($con, $sql);
					//$resultCheck = mysqli_num_rows($result)

					while ($row = mysqli_fetch_array($result)) :;
					?>
						<option value="<?php echo $row['state']; ?>"><?php echo $row['state']; ?></option>
					<?php endwhile; ?>

					</select>

				<label for="PostalCity"><b>City:</b></label>
				<input type="text" name="PostalCity" placeholder="City">
				<label for="PostatlZipCode"><b>ZipCode:</b></label>
				<input type="text" name="PostalZipCode" placeholder="00680">
			</p>
		</div>
		
			<button type="submit" class="submit" name="submit">Submit</button>

		</form>
	</div>


</body>

</html>