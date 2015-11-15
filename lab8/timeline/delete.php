<?php
# Ex 5 : Delete a tweet
	include("timeline.php");
	$timeline = new TimeLine();
	$delete = $_POST["delete"];
	$no = $_POST["no"];
	try {
		//echo "aaa";
	    $timeline->delete($no);
	    header("Location:index.php");
	    
	} catch(Exception $e) {
		#echo "bbb";
	    header("Loaction:error.php");
	}
	#echo "ccc";
?>
