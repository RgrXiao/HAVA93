<?php

	
	
	if (isset($_POST['stockModY'])){
		
			
			$db = mysqli_connect('localhost','hv18624_shirts','Reading@10','hv18624_shirts');

			$errmsg = $db->connect_error ;
			if ($errmsg != null) echo "Error: $errmsg" ;
			else
			  {
			
			$query = "UPDATE Products SET Stock = 'Y' Where productName = '".$_POST['product']."' ";
			
			$res = $db->query($query);
			
			
			if ($res) {
        header('Location: successY.php');
    } else {
        die("<strong>Error ".mysql_error()."</strong>");
    }
			
	
		
	
	}
	}
	
	
	    // Close connection
    	$db->close();
    	
	
?>
