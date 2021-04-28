<!DOCTYPE html>

<html>
	<head>
		<?php 
			include_once "header.php";
		?>
	
</head>
		
<body>
	


<h2>Forms</h2>

<div class="devFormHolder">
	 <div class="card" style="width: 12rem;">
				<a class= "" href ="formCompany.php">
				  <img src="Pics/picDepar.jpeg" class="card-img-top" alt="Company Form">
				 </a>
				  <div class="card-body">
					<h3 class="card-text">
						<b>Company Form:</b>
					</h3>
					<p>Add a new company information.</p>
				  </div>
			</div>
			
			<div class="card" style="width: 12rem;">
				<a class= "" href ="formDepartment.php">
				  <img src="Pics/picDepar.jpeg" class="card-img-top" alt="Department Form">
				 </a>
				  <div class="card-body">
					<h3 class="card-text">
						<b>Department Form:</b>
					</h3>
					<p>Add a new department information.</p>
				  </div>
			</div>
			
			<div class="card" style="width: 12rem;">
				<a class= "" href ="formStudent.php">
				  <img src="Pics/picDepar.jpeg" class="card-img-top" alt="Department Form">
				 </a>
				  <div class="card-body">
					<h3 class="card-text">
						<b>Student Form:</b>
					</h3>
					<p>Add a new student information.</p>
				  </div>
			</div>
			
			<div class="card" style="width: 12rem;">
				<a class= "" href ="formStudentDoc.php">
				  <img src="Pics/picDepar.jpeg" class="card-img-top" alt="Department Form">
				 </a>
				  <div class="card-body">
					<h3 class="card-text">
						<b>StudentDocuments Form:</b>
					</h3>
					<p>Add a new student documents or files.</p>
				  </div>
			</div>
</div>

<br></br>

<div class="devDataHolder">

			<!--<label class="labelTerm" for= "term"><b>Term:</b></label> -->
							
					<select class="devDataFilter" name= "term">
						
						<?php
								$sql = "SELECT * FROM term";
								$result = mysqli_query($con, $sql);
								//$resultCheck = mysqli_num_rows($result)
								
								while($row = mysqli_fetch_assoc($result)):;
						?>
								<option value= "<?php echo $row['term'];?>"><?php echo $row['term'];?></option>
								<?php endwhile;?>
								
					</select>
					
	<?php
		
		
		//Showing database data on website
		$sql = "SELECT * FROM companies;"; //selecting everything inside the 'pracdb'table
		$result = mysqli_query($con, $sql);//using PHP function: mysqli_query.Inside parameter check the database (variable con) and checl table
		$resultCheck = mysqli_num_rows($result);// PHP function to show data
		
		//showing data
		if($resultCheck > 0){
			while ($row = mysqli_fetch_assoc($result)){//while we have data echo it. PHP fenction fetch all the data in the database
				echo "<br>" . $row['name'] . "</br>";
			}
		}
	?>
	
</div>


		
</body>
	
</html>
