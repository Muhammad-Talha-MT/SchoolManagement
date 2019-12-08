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

					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Add Dues Type</h1>
					<div class="border-left-primary">


						<div class="container">
							<form method="POST" action="<?php echo base_url() . 'Dues/addNewDuesType' ?>">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputCity">Fine Type</label>
										<select class="form-control" name="dueName" required>
											<option>----Select Fine Type----</option>
											<option value="1">Admission Fee</option>
											<option value="2">Monthly Fee</option>
											<option value="3">Paper Fund</option>
											<option value="4">Course Fee (Books)</option>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">DeadLine</label>
										<input class="form-control" id="deadLine" placeholder="DeadLine" name="deadline" type="date" required> </div>
									<div class="form-group col-md-6">
										<label for="inputCity">Class</label>
										<select class="form-control" name="class" required>
											<option>----Class----</option>
											<?php foreach ($class as $c) { ?>
												<option value="<?php echo $c['id']; ?>"><?php echo $c['className']; ?></option>

											<?php  } ?>
										</select>
									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">Fine</label>
										<input class="form-control" id="fine" placeholder="Fine" name="fine" type="number" required>
									</div>
									<div class="form-group col-md-6">
										<label for="inputCity">Fine Type</label>
										<select class="form-control" name="fineType" required>
											<option>----Select Fine Type----</option>
											<option value="0">None</option>
											<option value="1">Daily</option>
											<option value="2">Monthly</option>
										</select>
									</div>

									<br />
									<br />
								</div> <button type="submit" class="btn btn-primary ">Done</button>
								<button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . 'Dues/duesType' ?>';">Cancel</button>
							</form>

						</div>
					</div>

				</div>
				<br />

				<?php
				if (isset($_SESSION['success'])) {
					echo  "<span class='alert alert-success'>" . $_SESSION['success'] . "</span>";
				}
				?>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->

			<?php require('footbar.php'); ?>

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->


	<?php require('foot.php'); ?>

</body>

</html>
