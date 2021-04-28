<!DOCTYPE html>

<html>

<head>
    <title>DepartmentInformation</title>
	<link href="templates/styleForm.css" rel="stylesheet" type="text/css">
</head>

<body>

    <?php include("dbconnect.php"); ?>

<div class="container">

<div class="">
		<h1>Department Form</h1>
</div>

    <form action="InsertDepa.php" method="POST">

        <!-- Company Name, Department, Supervisor and CompanyKey -->
        <label for="name"><b>Company Name:</b></label>
        <input type="text" name="name" placeholder="Company Name">
        <label for="department"><b>Department:</b></label>
        <input type="text" name="department" placeholder="Department">
        <label for="supervisor"><b>Supervisor Name:</b></label>
        <input type="text" name="SupName" placeholder="Supervisor Name"></p>
        <label for="supervisor"><b>Supervisor Title:</b></label>
        <input type="text" name="SupTitle" placeholder="Supervisor Title"></p>

        <!-- Phone -->
        <label for="phone1"><b>Phone:</b></label>
        <input type="text" name="phone1" placeholder="Phone Number">
        <label for="phone2"><b>Second Phone:</b></label>
        <input type="text" name="phone2" name="phone2" placeholder="Phone Number"></p>

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
								
								while($row = mysqli_fetch_array($result)):;
						?>
                <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
                <?php endwhile;?>
            </select>

            <label for="StreetCity"><b>City:</b></label>
            <input type="text" name="StreetCity" placeholder="City">
            <label for="StreetZipCode"><b>ZipCode:</b></label>
            <input type="text" name="StreetZipCode" placeholder="00680">
        </p>

        <!-- Postal Address -->
        <label for="PostalAddress1"><b>Postal Address:</b></label><br>
        <input type="text" name="PostalAddress1" placeholder="Postal Address"></p>
        <label for="PostalAddress2"><b>Second Postal Address:</b></label><br>
        <input type="text" name="PostalAddress2" placeholder="Postal Address"></p>

        <p><label for="PostalState"><b>State:</b></label>
            <select name="PostalState">

                <?php
							
									$sql = "SELECT * FROM state";
									$result = mysqli_query($con, $sql);
									//$resultCheck = mysqli_num_rows($result)
									
									while($row = mysqli_fetch_array($result)):;
							?>
                <option value="<?php echo $row['state'];?>"><?php echo $row['state'];?></option>
                <?php endwhile;?>
            </select>

            <label for="PostalCity"><b>City:</b></label>
            <input type="text" name="PostalCity" placeholder="City">
            <label for="PostalZipCode"><b>ZipCode:</b></label>
            <input type="text" name="PostalZipCode" placeholder="00680">
        </p>


        <button type="submit" name="submit">Submit</button></p>


    </form>
</div>

</body>

</html>