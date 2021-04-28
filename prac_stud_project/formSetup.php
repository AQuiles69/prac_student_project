<!DOCTYPE html>

<html>

		<head>
				<title>SetUp</title>
		</head>
			
			<body>
				
		
				
				<form action="setup.php" method="POST">
				
				<label for="UniName"><b>University Name:</b></label>
					<input type="text" id="UniName" name="UniName" required placeholder="University Name">
				<label for="department"><b>Department</b></label>
					<input type="text" id="department" name="department" placeholder="Department"></p>
				<label for="FName"><b>First Name:</b></label>
					<input type="text" id="FName" name="FName" required placeholder="First Name">
				<label for="LName"><b>Last Name:</b></label>
					<input type="text" id="LName" name="LName" required placeholder="Last Name"></p>
					
					
				<label for="phone"><b>Phone:</b></label>
					<input type="tel" id="phone" name="phone" placeholder="Phone Number">
				<label for="email"><b>e-mail:</b></label>
					<input type="email" id="email" name="email" placeholder="e-mail"></p>

				<p><label for="title"><b>Title:</b></label>
					<input type="text" id= "title" name="title" placeholder= "Title"></p>
				
				<label for="sector"><b>University Campus:</b></label>
					<input type="text" id= "sector" name="sector" placeholder= "University Sector"></p>
				
				<p><label for= "term"><b>Term:</b></label>
					<select id="term">
						<!-- <option>  -->
							<?php
								$stmt = $conn-> prepare("SELECT *FROM term ORDER BY term");
								$stmt-> execute();
								$termList= $stmt-> featchAll();
									foreach($termList as $term){
										echo "<option value='".$term['term']."'>".$term['term']."</option>";
									}
							?>
						<!-- </option>  -->
							
					</select></p>
					
				<label for="NewTerm"><b>Add Term:</b></label> 
					<input type="text" id="NewTerm" name="NewTerm" placeholder= "Add Term"></p>
			
				<input type="submit" name="submit" value="Submit">
				
			
				</form>
		
		
		
			</body>
	
</html>	