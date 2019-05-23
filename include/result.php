
<?php include_once("header.php"); ?>

<div style="position: relative; max-width: 100%; top: 8px; z-index:-1;  height: 50px;background-image: linear-gradient(to top, #48c6ef 0%, #6f86d6 100%);">
			<p style="font-size: 35px; font-family: 'orbitron',orbitron;  text-align: center; color: #ffffff;">Result</p>
</div>
<br>
<div class="shadow m-5 p-3" style=" height: 300px; ">
<div class="container" style="padding-bottom: 300px;">
	<div class="table-responsive" style="padding-top: 50px;">          
	  <table class="table">
	    <thead>
	      <tr>
	        <th style="width: 130px; text-align: center;" >Disease Name</th>
	        <th style="width: 130px; text-align: center;">Precaution</th>
	        <th  style="width: 130px; text-align: center;">Medicine</th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	      	<?php 
				if (isset($_POST['check'])) {
					$sympt = $_POST['sympt'];

					$sym = "SELECT * FROM disease WHERE symptom='$sympt'";

					$sy = mysqli_query($conn, $sym);

					if (mysqli_num_rows($sy) > 0) {
						while ($ros = mysqli_fetch_assoc($sy)){
							$name = $ros['disease_name'];
							$medicine = $ros['medicine'];
							$precaution = $ros['precaution'];
							$sym = $ros['symptom'];
						}

						
					}
				}


			?>
	      	   
		        <td style="text-align: center;"><?php echo $name; ?></td>
		        <td style="text-align: center;"><?php echo $precaution; ?></td>
		        <td style="text-align: center;"><?php echo $medicine; ?></td>
	      </tr>
	    </tbody>
	  </table>
  </div>
</div>
</div>
<br><br>
<?php include_once("footer.php"); ?>



