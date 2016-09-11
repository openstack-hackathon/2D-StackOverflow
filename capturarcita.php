<?php include_once "views/userhead.php"; ?>
<?php include_once "php/queries.php"; ?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
						<div class="well"><h1>Captura una cita para donar sangre</h1></div>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">
                        <div class="table-responsive">
						<form action="php/guardacitausuario.php" method="POST" >
							<div class="form-group">
								<p><input type="datetime-local" name="fechacita"></p>
							</div>
							<input type="hidden" name="cita" value="<?php echo $_GET["idins"]; ?>" />
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
