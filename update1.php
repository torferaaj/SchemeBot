<html>
<head>
	<title>Updating</title>

</head>
<body>
	<center>
		
<?php

include_once("config.php");




if(isset($_POST['edit']))
{
	
              $id= $_POST['id'];
       
		$name_eng = $_POST['name_eng'];
		$bc_eng= $_POST['bc_eng'];
		$amount_eng = $_POST['amount_eng'];
		$ec_eng= $_POST['ec_eng'];
    	$dept_eng= $_POST['dept_eng'];
    	$name_tam = $_POST['name_tam'];
		$bc_tam= $_POST['bc_tam'];
		$amount_tam = $_POST['amount_tam'];
		$ec_tam= $_POST['ec_tam'];
    	$dept_tam= $_POST['dept_tam'];


	$result = mysqli_query($conn, "UPDATE records SET nameEng = '$name_eng', bcEng = '$bc_eng', amountEng = '$amount_eng', ecEng = '$ec_eng', deptEng = '$dept_eng',nameTam = '$name_tam', bcTam = '$bc_tam', amountTam = '$amount_tam', ecTam = '$ec_tam', deptTam = '$dept_tam' WHERE `id`='$id'");


    header("Location: admin.php");
}

?>


</body>
</html>