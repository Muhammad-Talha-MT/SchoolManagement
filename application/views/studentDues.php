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
					<!-- <div class=""> -->
					<!-- <a href="<?php echo base_url() . 'Student/admission' ?>" class="btn btn-primary btn-icon-split"> -->
					<!-- <span class="icon text-white-50">
								<i class="fas fa-plus right"></i>
							</span>
							<span class="text">New Admission</span>
						</a>
					</div><br> -->

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
						</div>
						<?php
						if (isset($_SESSION['success'])) {
							echo  "<span class='alert alert-success'>" . $_SESSION['success'] . "</span>";
						} elseif (isset($_SESSION['fail'])) {
							echo  "<span class='alert alert-danger'>" . $_SESSION['fail'] . "</span>";
						}
						?>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>Student Name</th>
											<th>Registeration No</th>
											<th>Due Amount</th>
											<th>Deadline</th>
											<th>Fine</th>
											<th>Total Amount To Pay</th>
											<th>Recived By</th>
											<th>Pay</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Student Name</th>
											<th>Registeration No</th>
											<th>Due Amount</th>
											<th>Deadline</th>
											<th>Fine</th>
											<th>Total Amount To Pay</th>
											<th>Recived By</th>
											<th>Pay</th>
										</tr>
									</tfoot>
									<?php foreach ($studentDues as $dues) { ?>
										<tr>
											<td>
												<?php echo $dues['studentName'] ?>
											</td>
											<td>
												<?php echo $dues['RegisterationNo'] ?>
											</td>
											<td>
												<?php echo $dues['amount'] ?>
											</td>
											<td>
												<?php echo $dues['deadline'] ?>
											</td>
											<td>
												<input value="<?php if (isset($dues['fineAmount'])) {
																		echo $dues['fineAmount'];
																	} ?>" class="form-control" readonly>

											</td>
											<td>
												<input value="<?php if (isset($dues['totalAmount'])) {
																		echo $dues['totalAmount'];
																	} ?>" class="form-control" readonly>
											</td>
											<td>
												<input value="<?php if (isset($dues['recivedBy'])) {
																		echo $dues['recivedBy'];
																	} ?>" class="form-control" readonly>
											</td>
											<td> <?php if ($dues['isPaid'] == false) { ?> <a onclick="return confirm('Are you Sure')" href="<?php echo base_url() . 'Dues/submitStudentDues/' . $dues['id'] . '/' . $dues['amount'] . '/' . $dues['fine'] . '/' . $dues['fineType']; ?>" class="btn btn-success"><?php } else { ?> <a href="<?php echo base_url() . 'Dues/submitStudentDues/' . $dues['id'] . '/' . $dues['amount'] . '/' . $dues['fine'] . '/' . $dues['fineType']; ?>" class="btn btn-success disabled"><?php } ?><i class=" fas fa-money-bill-alt"></i></a></td>
										</tr>
									<?php
									}
									?>


									<tbody>
									</tbody>

								</table>
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

</body>

</html>
