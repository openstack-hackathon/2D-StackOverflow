<?php include_once "views/institutionhead.php"; ?>
<?php include_once "php/queries.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Cita de <?php echo GetDonadorByID($_GET["pkd"]) ?></h1></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
						<form action="php/guardacita.php" method="POST" >
							<div class="form-group">
								<label for="comentarios">Comentarios:</label>
								<textarea class="form-control" name="comentarios" id="comentarios" rows="3"></textarea>
							</div>
							<div class="checkbox">
								<label>
								<input type="checkbox" id="donacionexitosa" name="donacionexitosa" >
								Donacion Realizada con exitosamente?
								</label>
								
							</div>
							<input type="hidden" name="donador" value="<?php echo $_GET["pkd"]; ?>" />
							<input type="hidden" name="cita" value="<?php echo $_GET["pkc"]; ?>" />
						  <button type="submit" class="btn btn-lg btn-success">Guardar</button>
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
