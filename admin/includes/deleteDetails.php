<?php 
include("../../connect.php");

$indexno = $_POST['indexno'];
$action = $_GET['action'];

if ($action == "Delete"){
	$tables = array("baseline_blood","baseline_preview","details","final_preview","injected","injected_preview","inverse_matrix","matrix","post_label","post_preview");
	foreach($tables as $table) {
		$query = "DELETE FROM $table WHERE PID='$indexno'";
		mysqli_query($connect,$query);
	}
	
		
}
else{
	// mysqli_query($connect, "UPDATE matriculants SET STATUS = 0 WHERE INDEXNO = '$indexno'");		
}

?>