<?php 
    if ( !empty($_POST)) { 
        // post values
        $LastName = $_POST['LastName'];
        $FirstName    = $_POST['FirstName'];
        $Age    = $_POST['Age'];
		$gender = $_POST['gender'];
      
		$person = array($FirstName, $LastName , $Age , $gender); 
      
		$fichier = file_get_contents('person.json');
		$data = json_decode($fichier);
	
		array_push($data, $person);
		file_put_contents("person.json", json_encode($data));
		header("Location: index.php");

    }
?>
<div>
        <div>
		<div><h3>ajoute</h3>
        <form method="POST" action="">
			<div>
				<label >First Name</label>
				<input type="text"  name="FirstName" >
			</div>
			
			<div>
				<label >Last Name</label>
				<input type="text"  name="LastName" >
			</div>
			
			<div>
				<label >Age</label>
				<input type="text"  name="Age" >
			</div>
			<div class="form-group">
					<label for="inputGender">Gender</label>
					<select class="form-control" required="required" id="inputGender" name="gender" >
						<option>Please Select</option>
						<option value="Male">Male</option>
						<option value="Female">Female</option>
					</select>
	        </div>
			
			<div class="form-actions">
					<button type="submit">ajoute</button>
					<a href="index.php">Back</a>
			</div>
		</form>
        </div></div>        
</div>
</body>
</html>