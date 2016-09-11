<?php include_once "views/userhead.php"; ?>
<?php include_once "php/queries.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Transferir Puntos</h1></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
							<?php 
							$resultado = GetPerfilByUser($_COOKIE["pkusuario"]);
							$row = mysqli_fetch_row($resultado); 
							
							$resultado2 = GetPerfilByUser($_GET["idam"]);
							$row2 = mysqli_fetch_row($resultado2); 							
							?>	
						
						<form action="php/transferencia.php" method="POST" >							
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
										<th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>
										<div class="form-group">
										  <label for="usr">Puntos Disponibles:</label>
										  <input disabled type="text" class="form-control" id="puntos" value="<?php echo $row[4]; ?>" >
										</div>										
										</td>
                                    </tr>

                                    <tr>
                                        <td>
										<div class="form-group">
										  <label for="usr">Puntos a transferir a <?php echo $row2[0]." ".$row2[1]." (".$row2[2].")"; ?>:</label>
										  <input type="text" class="form-control" id="puntosatransferir" name="puntosatransferir" >
										</div>										
										</td>
                                    </tr>
                                    <tr>
                                        <td>
										<div class="form-group">
										  <label for="usr">Puntos actuales de <?php echo $row2[2]; ?>:</label>
										  <input type="text" class="form-control" value="<?php echo $row2[4]; ?>" disabled >
										</div>										
										</td>
                                    </tr>
									<input type="hidden" name="pka" value="<?php echo $_GET["idam"]; ?>" />
									
									<tr>
									<td>
										<button type="submit" class="btn btn-lg btn-success">Transferir</button>
									</td>
									</tr>
								</tbody>
                            </table>
						</form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->	
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
