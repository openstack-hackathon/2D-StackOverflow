<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<form action= "gcita.php">

<div class="container">
	<div class="jumbotron">
  		<h2>Cita</h2>
  		<p>Fecha Cita</p>
  		<div class="row">
	        <div class='col-sm-6'>
	            <div class="form-group">
	            	<p><input type="datetime-local" name="fechacita"></p>
	            	<p><input type = "text" maxlengh ="100"></p>
	        	</div>
	    	</div>
		</div>
	</div>
	<p><input type="submit" value="Salva una vida"></p>        	
</form>
</div>

</body>
</html>



           