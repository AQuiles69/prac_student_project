
<?php
	 include("dbconnect.php"); // connecting to data base
		
		$StudentNumber= mysqli_real_escape_string($con,$_POST['StudentNumber']);
		$desc= mysqli_real_escape_string($con,$_POST['desc']);
		$term= mysqli_real_escape_string($con,$_POST['term']);
	
		$target_dir = "fileDB/";
		$filename = $_FILES["filename"]["name"];
		$location = $target_dir.$filename;
		$target_file = $target_dir . basename($_FILES["filename"]["name"]);
		$uploadOk = 1;
		$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

		// Check if file is an actual file or fake file
		if(isset($_POST["submit"])) {
		  $check = getimagesize($_FILES["filename"]["tmp_name"]);
		  if($check !== false) {
			echo "File is a - " . $check["mime"] . ".";
			$uploadOk = 1;
		  } else {
			echo "File is not accepted. ";
			$uploadOk = 0;
		  }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		  echo "Sorry, file already exists.";
		  $uploadOk = 0;
		}

		// Check file size
		if ($_FILES["filename"]["size"] > 5000000) {
		  echo "Sorry, your file is too large.";
		  $uploadOk = 0;
		}

		// Allow certain file formats
		if($FileType != "docx" && $FileType != "pdf" ) {
		  echo "Sorry, only docx and PDF files are allowed. ";
		  $uploadOk = 0;
		}

		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		  echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		  if ($dir = move_uploaded_file($_FILES["filename"]["tmp_name"], $target_file)) {
			  
			  $sql = "INSERT INTO studentdoc(StudentNumber,description,filename,filetype,location,term) 
						VALUES('$StudentNumber','$desc','$filename','$dir','$location','$term');"; //where in the DB to save it
						mysqli_query($con, $sql); //calling data base to save new data
			  
			echo "The file ". htmlspecialchars( basename( $_FILES["filename"]["name"])). " has been uploaded.";
			
			$sql = "SELECT * FROM studentdoc";//selecting database
					$result = mysqli_query($con, $sql); //running code inside the database. Inside the parameter goes: the database connection and the sql code ($sql)//
					$queryResult = mysqli_num_rows($result);//result from query
			
			//checking result
				if($queryResult > 0){
					
					while($row = mysqli_fetch_assoc($result)){ //getting/fetching what is in the row inside the database
						
						$name = $row['filename'];
						$local = $row['location'];
						
						echo "<h3>Data ". $row['id'] .":</h3>";
						
							if($_FILES/*['id']*/)
							{
								echo "Uploaded file: <a href='$local'  id=" .$row['id']."'>" . $row['filename'] . "</a>";
								
								//echo "Uploaded file: <a href= '$filename' id=" .$row['id']."'>" . $row['name'] . "</a>";
							}
					}
				}
		  } else {
			echo "Sorry, there was an error uploading your file.";
		  }
		}	
	 
	  
	 
?>