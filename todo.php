<?php 
	require 'db.php';

 		$sqltran = mysqli_query($con, "SELECT * FROM activities ")or die(mysqli_error($con));
		$arrVal = array();


 		while ($rowList = mysqli_fetch_array($sqltran)) {

						$name = array(
								'id' => $i,
 	 		 	 				'text'=> $rowList['activity'],
 	 		 	 			);


							array_push($arrVal, $name);
			$i++;
	 	}
	 		 echo  json_encode($arrVal);


	 	mysqli_close($con);
?>   
 