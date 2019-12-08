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
					<div class="">
						<a href="<?php echo base_url() . 'Dues/addDuesType' ?>" class="btn btn-primary btn-icon-split">
							<span class="icon text-white-50">
								<i class="fas fa-plus right"></i>
							</span>
							<span class="text">Add New Due</span>
						</a>
					</div><br>

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
											<th>Dues Type</th>
											<th>Class</th>
											<th>Deadline</th>
											<th>Fine</th>
											<th>Fine Type</th>
											<th>Active</th>
											<th>Inactive</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Dues Type</th>
											<th>Class</th>
											<th>Deadline</th>
											<th>Fine</th>
											<th>Fine Type</th>
											<th>Active</th>
											<th>Inactive</th>
										</tr>
									</tfoot>
									<?php foreach ($duesType as $dues) { ?>
										<tr>
											<td>
												<?php echo $dues['dueType'] ?>
											</td>
											<td>
												<?php echo $dues['className'] ?>
											</td>
											<td>
												<?php echo $dues['deadline'] ?>
											</td>
											<td>
												<?php echo $dues['fine'] ?>
											</td>
											<td>
												<?php echo $dues['fineType'] ?>
											</td>
											<td> <?php if ($dues['active'] == false) { ?> <a onclick="return confirm('Are you Sure')" href="<?php echo base_url() . 'Dues/addDues/' . $dues['id'] ?>" class="btn btn-success btn-circle"><?php } else { ?> <a href="<?php echo base_url() . 'Dues/addDues/' . $dues['id'] ?>" class="btn btn-success btn-circle disabled"><?php } ?><i class=" fas fa-arrow-right"></i></a></td>
											<td> <a href="<?php echo base_url() . 'Dues/delete/' . $dues['id'] ?>" class="btn btn-danger btn-circle"><i class="fas fa-ban"></i></a></td>
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
