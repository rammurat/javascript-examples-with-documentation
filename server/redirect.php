<?php 
	include_once './config.php'; 

	if (isset($_REQUEST['action']) && $_REQUEST['action'] == "transaction") {
	
		
            //Redirect user to main page again
            header("Location: bag.php");
	
	}else {
		echo "You are not allowed here.";
	}

?>
