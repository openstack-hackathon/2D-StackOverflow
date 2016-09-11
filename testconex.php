<?php	
	session_start();
	require_once("conexion.php");
	
	$query="SELECT * FROM Citas ";

	$stmt=mysql_query($con,$query);			
	
	$rows_affected = mysql_rows_affected( $stmt);
	// mysql_rows_affected: false means somenthing wrong, 0 no rows were affected, -1 number of affected rows cannot be determined
	if($rows_affected === false){
	     $goalsdata = mysql_errors();

		die( print_r( mysql_errors(), true));
	}	
	else { 
		    while($row = mysql_fetch_array( $stmt, mysql_FETCH_BOTH))//$row = mysql_fetch_object( $stmt )  )////
			{
				echo $row['PKCita'];
			}

			mysql_close($con);
		}

?>
		