<?php

	if (isset($_SESSION["rbinstitutionuser"]))
	{
		unset($_SESSION["rbinstitutionuser"]);
		session_unset();
		session_destroy();
	}
	
	
	
	header("Location: ../");

?>