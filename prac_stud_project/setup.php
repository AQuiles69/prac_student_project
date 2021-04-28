
<?php


	
	if(isset ($_POST["submit"])){
		
			//CONNECT TO DATABASE
		include("dbconnect.php");
	
		echo $UniName= $_POST['UniName'];
		echo $department= $_POST["department"];
		echo $FName= $_POST["FName"];
		echo $LName= $_POST["LName"];
		echo $phone= $_POST["phone"];
		echo $email= $_POST["email"];
		 echo $title= $_POST["title"];
		echo $sector= $_POST["sector"];
		echo $term= $_POST["term"];
		

	
		$sql= "INSERT INTO 'setup'(UniName,department,sector,Fname,Lname,title,phone,email,term) 
					VALUES('$UniName','$department','$sector','$FName','$LName','$title','$phone',
							'$email','$term')";
			
	} 
		
		if ($conn->query($sql) === TRUE) {
			  echo "New record created successfully";
			} else {
			  echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();

?>

