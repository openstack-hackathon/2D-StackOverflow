<?php include_once "views/userhead.php"; ?>
<?php include_once "php/queries.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Perfil</h1></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th></th>
										<th></th>
										<th></th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								$resultado = GetAmigosByUser($_COOKIE["pkusuario"]);
								while ($fila = $resultado->fetch_assoc()){
								?>
                                    <tr>
                                        <td>
										<a href="transferirpuntos.php?v=d&idam=<?php echo $fila["FKAmigo"]; ?>">
											<div class="media">
												<span class="pull-left">
													<img class="media-object" src="images/b.png" alt="">
												</span>
												<div class="media-body">
													<h5 class="media-heading"><strong><?php echo $fila["Nombrecompleto"]." (".$fila["TipoDeSangre"].")"; ?></strong>
													</h5>
													<p class="small text-muted"><?php echo $fila["Usuario"]; ?></p>
													<p></p>
												</div>
											</div>
										</a>
										</td>
										<td></td>
										<td></td>
                                    </tr>
								<?php } ?>
                                </tbody>
                            </table>
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
