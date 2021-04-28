	
	<?php
		
		include_once "header.php";
	?>
		<h1>Search Result</h1>
		
	<?php
		if(isset($_POST['btnSearch'])){
			
			$search = mysqli_real_escape_string($con, $_POST['search']);//securing data with escape
			
			//search code: look for everything that is like what is in the rows (name, lastname, age) 
			$sql = "SELECT * FROM companies WHERE name LIKE '%$search%'";
				//OR age LIKE '%$search%' OR age lastname LIKE '%$search%'"; //LIKE => some like that keyword (name)
			
			//$sql = "SELECT * FROM pracdb";
			$result = mysqli_query($con, $sql);//fetching data
			$queryResult = mysqli_num_rows($result);
		
			//checking all the result in the database
			if($queryResult > 0){
				
				//if we had a result this WHILE loop will get all the data from the database
				while($row = mysqli_fetch_assoc($result)){
					
					echo "There are ". $queryResult ." results.";
					
					echo "<h3>Data:</h3>";
					
					//database output
					echo "<a><div class= 'name-box'>
							
							<p>" . $row['name'] . "</p>
							
						</div></a>";
					
				}
				
			} else {
					
				echo "There was no match for your search";	
				
			}
		
		
		}
		
		
		
		
	?>