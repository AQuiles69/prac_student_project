<?php

		include("dbconnect.php");
	
	if(isset ($_POST["submit"])){
	
		$name= mysqli_real_escape_string($con,$_POST['name']);
		$description= mysqli_real_escape_string($con,$_POST['description']);
		$owner= mysqli_real_escape_string($con,$_POST['owner']);
		$webpage= mysqli_real_escape_string($con,$_POST['webpage']);
		$phone1= mysqli_real_escape_string($con,$_POST['phone1']);
		$phone2= mysqli_real_escape_string($con,$_POST['phone2']);
		$email1= mysqli_real_escape_string($con,$_POST['email1']);
		$email2= mysqli_real_escape_string($con,$_POST['email2']);
		$StreetAddress1 = mysqli_real_escape_string($con,$_POST['StreetAddress1']);
		$StreetAddress2 = mysqli_real_escape_string($con,$_POST['StreetAddress2']);
		$StreetState= mysqli_real_escape_string($con,$_POST['StreetState']);
		$StreetCity= mysqli_real_escape_string($con,$_POST['StreetCity']);
		$StreetZipCode= mysqli_real_escape_string($con,$_POST['StreetZipCode']);
		$PostalAddress1 = mysqli_real_escape_string($con,$_POST['PostalAddress1']);
		$PostalAddress2 = mysqli_real_escape_string($con,$_POST['PostalAddress2']);
		$PostalState= mysqli_real_escape_string($con,$_POST['PostalState']);
		$PostalCity= mysqli_real_escape_string($con,$_POST['PostalCity']);
		$PostalZipCode= mysqli_real_escape_string($con,$_POST['PostalZipCode']);
	
		$sql= "INSERT INTO companies(name,description,owner,webpage,phone1,phone2,email1,email2,StreetAddress1,
				StreetAddress2,StreetCity,StreetState,StreetZipCode,PostalAddess1,PostalAddess2,PostalCity,
				PostalState,PostalZipCode)
				VALUES('$name','$description','$owner','$webpage','$phone1','$phone2','$email1',
							'$email2','$StreetAddress1','$StreetAddress2','$StreetCity','$StreetState',
							'$StreetZipCode','$PostalAddress1','$PostalAddress2','$PostalCity','$PostalState',
							'$PostalZipCode');";
			
			mysqli_query($con, $sql);
			
			header("Location: formCompany.php?submit=Succes");

	} else{
			echo "Failed";
		}



?>