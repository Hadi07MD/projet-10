
<?php
$fichier = file_get_contents('person.json');
$data = json_decode($fichier);
?>

		<a href="insert.php"><i></i> Insert Data</a>
			<table>
				<tr>
					<th>No.</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
					<th>Gender</th>
				</tr>		
				<?php $index=0 ; foreach ($data as $person){
				    $index++;  
				
				?>
				<tr>
					<td><?php echo $index; ?></td>
					<td><?php echo $person[0];?></td>
					<td><?php echo $person[1]; ?></td>
					<td><?php echo $person[2]; ?></td>
					<td><?php echo $person[3]; ?></td>
					
					
				</tr>
				<?php }?>
			</table>
	

</body>
</html>