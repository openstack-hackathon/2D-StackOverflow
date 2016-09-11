<?php include_once "views/institutionhead.php"; ?>
<?php include_once "php/queries.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Citas de <?php echo GetEstablecimientoByID($_GET["idins"]) ?></h1></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Page</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php 
								$resultado = GetCitasHospital();
								while ($fila = $resultado->fetch_assoc()){
								?>
                                    <tr>
                                        <td>
										<a href="cita.php?v=ci&pkd=<?php echo $fila["PKUsuario"]; ?>&pkc=<?php echo $fila["PKCita"]; ?>">
											<div class="media">
												<span class="pull-left">
													<img class="media-object" src="images/u.png" alt="">
												</span>
												<div class="media-body">
													<h5 class="media-heading"><strong><?php echo $fila["Nombre"]." ".$fila["Apellidos"]." (".$fila["TipoDeSangre"].")"; ?></strong>
													</h5>
													<p class="small text-muted"><i class="fa fa-clock-o"><?php echo $fila["Cita"]; ?></i></p>
													<p><?php echo $fila["Usuario"]; ?></p>
												</div>
											</div>
										</a>
										</td>
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
