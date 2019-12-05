<?php include 'template_part/header.php'; ?>
<?php

	$valuse = $_POST['check_list'];

	foreach ($valuse as $value) {
		$query="INSERT INTO tbl_test (java) VALUES ('$value')";	
	}

    $result = $db->insert($query);
	
	
	

	


  
 
    
  
 ?>