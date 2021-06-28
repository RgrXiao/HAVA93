<?php

	
	
	if (isset($_POST['stockModN'])){
		
			
			$db = mysqli_connect('localhost','hv18624_shirts','Reading@10','hv18624_shirts');

			$errmsg = $db->connect_error ;
			if ($errmsg != null) echo "Error: $errmsg" ;
			else
			  {
			
			$query = "UPDATE Products SET Stock = 'N' Where productName = '".$_POST['product']."' ";
			
			$res = $db->query($query);
			
			
			if ($res) {
        header('Location: successN.php');
    } else {
        die("<strong>Error ".mysql_error()."</strong>");
    }
			
	
		
	
	}
	}
	
	
	    // Close connection
    	$db->close();
    	
	
?>
