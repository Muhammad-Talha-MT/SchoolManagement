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
					<h1 class="h3 mb-4 text-gray-800">Add Class</h1>
                    <?php
                    if (isset($_SESSION['Fail'])) {
                        echo "<span class='alert alert-danger'>" . $_SESSION['Fail'] . "</span><br><br>";
                    }
                    ?>
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div> '); ?>
					<div class="border-left-primary">
						<div class="container">
							<form method="POST" action="<?php echo base_url() . 'classes/addNewClass' ?>">
								<div class="form-row">
									<div class="form-group col-md-4">
										<label for="inputEmail4">Class Name</label>
										<input class="form-control" id="className" placeholder="Enter Class Name" name="className" value="<?php echo set_value('className'); ?>">
                                        <?php echo form_error('className'); ?>
									</div>
									<div class="form-group col-md-4">
										<label for="inputPassword4">Session Start</label>
										<input type="date" class="form-control" id="session" placeholder="Enter Class Name" name="session" value="<?php echo set_value('session'); ?>">
                                        <?php echo form_error('session'); ?>
									</div>
									<div class="form-group col-md-4">
										<label for="inputPassword4">Monthly Fee</label>
										<input class="form-control" id="monthly" placeholder="Monthly Fee (Integer Value)" name="monthly" value="<?php echo set_value('monthly'); ?>">
                                        <?php echo form_error('monthly'); ?>
									</div>
									<div class="form-group col-md-4">
										<label for="inputPassword4">Admission Fee</label>
										<input class="form-control" id="admission" placeholder="Admission Fee (Integer Value)" name="admission" value="<?php echo set_value('admission'); ?>">
                                        <?php echo form_error('admission'); ?>
									</div>
									<div class="form-group col-md-4">
										<label for="inputPassword4">Paper Fee</label>
										<input class="form-control" id="paper" placeholder="Paper Fee (Integer Value)" name="paper" value="<?php echo set_value('paper'); ?>">
                                        <?php echo form_error('paper'); ?>
									</div>
									<div class="form-group col-md-4">
										<label for="inputPassword4">Course Fee</label>
										<input class="form-control" id="course" placeholder="Course Fee (Integer Value)" name="course" value="<?php echo set_value('course'); ?>">
                                        <?php echo form_error('course'); ?>
									</div>

								</div>
								<button type="submit" class="btn btn-primary">Save</button>
								<button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . 'Classes' ?>';">Cancel</button>
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
