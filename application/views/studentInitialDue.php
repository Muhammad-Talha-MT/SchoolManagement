<?php
if (!isset($_SESSION['id'])) {
	redirect(base_url() . 'Login/showLogin');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require('head.php'); ?>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php require('sidebar.php'); ?>

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<?php require('topbar.php'); ?>

				<!-- Begin Page Content -->
				<div class="container-fluid">
					<?php
					if (isset($_SESSION['success'])) {
						echo "<span class='alert alert-success'>" . $_SESSION['success'] . "</span><br><br>";
					}
					?>

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800">Students</h1>
					<p class="mb-4">This is all Student Data of School.</p>


					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<form method="post" action="<?php echo base_url() . 'Student/checkDues' ?>">
									<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
										<thead>
											<tr>
												<th>Dues</th>
												<th>Amount</th>
												<th>Add Dues</th>
											</tr>
										</thead>
										<tfoot>
											<tr>
												<th>Dues</th>
												<th>Amount</th>
												<th>Add Dues</th>

											</tr>
										</tfoot>
										<tbody>
											<?php foreach ($duesType as $dues) { ?>
												<tr>
													<td><?php echo $dues['dueTypeName'] ?></td>
													<td><?php echo $dues['amount'] ?></td>
													<td><input name="dues[]" type="checkbox" value="<?php echo $dues["dueType"]; ?>"></td>
													<input type="hidden" name="studentId" value="<?php echo $dues["studentId"]; ?>">
												</tr>
											<?php } ?>
										</tbody>

									</table>
									<input onclick="done()" class="btn btn-success" type="submit" value="Done">
								</form>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<?php require('footbar.php'); ?>

		</div>
		<!-- End of Content Wrapper -->




		<?php require('foot.php'); ?>
		<script>
			function done() {
				console.log("done");
			}
		</script>

</body>

</html>
