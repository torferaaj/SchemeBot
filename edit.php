<?php
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];
}
if (isset($_POST['edit']))
{
	$id= $_POST['id'];
}

include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM records where `id`='$user_id'");

while($res = mysqli_fetch_array($result))
{
                              $id=$res['id'];
                              $name_eng = $res['nameEng'];
		                      $bc_eng= $res['bcEng'];
		                      $amount_eng = $res['amountEng'];
		                      $ec_eng= $res['ecEng'];
                              $dept_eng= $res['deptEng'];
                              $name_tam = $res['nameTam'];
		                      $bc_tam= $res['bcTam'];
		                      $amount_tam = $res['amountTam'];
		                      $ec_tam= $res['ecTam'];
                              $dept_tam= $res['deptTam'];
	
}
?>

<html>
<head>
	<title>EDIT DETAILS</title>
	
</head>
<body>
	
		<h2 id="change">Change The Details</h2>
		
<form class="d-flex justify-content-center" action="update1.php" method="POST" enctype="multipart/form-data">
<!-- Scheme bot En -->
<div style="margin: 50px;width:50%">
<p>Language - En</p>
<label>id<span style="color: red;">*</span> </label><br>
<input type="text" class="form-control" name="id"  value="<?php echo $id;?>" ><br>
<label>Name Of The Scheme <span style="color: red;">*</span> </label><br>
<input type="text" class="form-control" name="name_eng"  value="<?php echo $name_eng;?>" required><br>
<label>Beneficiary Category <span style="color: red;">*</span></label><br>
<textarea rows="5" class="form-control" cols="40" name="bc_eng" placeholder="Enter text here..." required><?php echo $bc_eng?></textarea><br>
<label>Amount </label><br>
<textarea rows="5" class="form-control" cols="40" name="amount_eng" placeholder="Enter text here..."   required><?php echo $amount_eng;?></textarea><br>
<label>Eligibility Criteria <span style="color: red;">*</span></label><br>
<textarea rows="5" class="form-control" cols="40" name="ec_eng" placeholder="Enter text here..."  required><?php echo $ec_eng;?></textarea><br>
<label>Department <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="dept_eng"  value="<?php echo $dept_eng;?>" required><br><br>

</div>

<!-- Scheme bot En -->

<!-- Scheme bot Tm -->
<div  style="margin: 50px;width:50%">
<p>Language - தமிழ்</p>
<label>திட்டத்தின் பெயர் <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="name_tam"value="<?php echo $name_tam;?>"  required><br>
<label>பயனாளி வகை <span style="color: red;">*</span></label><br>
<textarea rows="5" cols="40" class="form-control" name="bc_tam" placeholder="Enter text here..."  required><?php echo $bc_tam;?></textarea><br>
<label>தொகை </label><br>
<textarea rows="5" cols="40" class="form-control" name="amount_tam" placeholder="Enter text here..."  required><?php echo $amount_tam;?></textarea><br>
<label>தகுதி வரம்பு <span style="color: red;">*</span></label><br>
<textarea rows="5" cols="40" class="form-control" name="ec_tam" placeholder="Enter text here..."  required><?php echo $ec_tam;?></textarea><br>
<label>துறை <span style="color: red;">*</span></label><br>
<input type="text" class="form-control" name="dept_tam"   value="<?php echo $dept_tam;?>" required><br>
</div>
<!-- Scheme bot Tm -->
<div>
		 		<input type="submit" name="edit" value="UPDATE" >
</div>
</form>




<script>
	
</script>				
			
		
</body>
</html>