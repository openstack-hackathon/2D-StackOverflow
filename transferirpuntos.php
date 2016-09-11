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
										  <label for="usr">Puntos a transferir:</label>
										  <input type="text" class="form-control" id="puntosatransferir" name="puntosatransferir" >
										</div>										
										</td>
                                    </tr>
									<hidden name="pku" id="pku" value="<?php $_GET[""]; ?>" />
									<hidden name="pka" id="pka" value="<?php $_GET[""]; ?>" />
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
