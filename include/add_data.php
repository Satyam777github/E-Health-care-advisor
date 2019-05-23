<?php include_once("header.php");?>
<?php 
if (isset($_POST['add_disease'])) {
	$disease_name = $_POST['dname'];
	$symptom = $_POST['symptom'];
	$medicine = $_POST['medicine'];
	$precaution = $_POST['pre'];

	$sql = "INSERT INTO disease (disease_name, symptom, medicine, precaution)
	VALUES ('$disease_name', '$symptom', '$medicine', '$precaution')";

	

	$result = mysqli_query($conn, $sql);
	if($result){
		echo "<script>alert('Disease Added ');</script>";
	}else{
		echo "<script>alert('Something went wrong ');</script>";
	}
}


?>
<br>
<h2 style="text-align: center;">Add Disease</h2>

<div class="container">
	<form action="add_data.php" method="POST">
	  <div class="form-group">
	    <label for="dname">Disease:</label>
	    <input type="dname" class="form-control" id="dname" name="dname" required>
	  </div>
	  <div class="form-group">
	    <label for="symptom">Symptoms:</label>
	    <input type="text" class="form-control" id="symptom" name="symptom" required>
	  </div>
	  <div class="form-group">
	    <label for="medicine">Medicine:</label>
	    <input type="text" class="form-control" id="medicine" name="medicine" required>
	  </div>
	  <div class="form-group">
	    <label for="pre">Precaution:</label>
	    <input type="text" class="form-control" id="pre" name="pre" required>
	  </div>
	  
	  <button type="submit" class="btn btn-primary" name="add_disease">Add Disease</button>
	</form>
</div>
<br><br><br>
<br>

<?php include_once("footer.php"); ?>