<?php include_once "views/institutionhead.php"; ?>
<?php include_once "php/queries.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Instituciones</h1></div>
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
								$resultado = GetInstituciones();
								while ($fila = $resultado->fetch_assoc()) {
								?>
                                    <tr>
                                        <td>
										<a href="donaciones.php?v=d&idins=<?php echo $fila["PKInstitucion"]; ?>">
											<div class="media">
												<span class="pull-left">
													<img class="media-object" src="images/b.png" alt="">
												</span>
												<div class="media-body">
													<h5 class="media-heading"><strong><?php echo $fila["Nombre"]; ?></strong>
													</h5>
													<p class="small text-muted">Direccion: <?php echo $fila["Direccion"]; ?></p>
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
