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
					if (isset($_SESSION['Fail'])) {
						echo "<span class='alert alert-danger'>" . $_SESSION['Fail'] . "</span><br><br>";
					}
					?>
					<!-- Page Heading -->
					<h1 class="h3 mb-4 text-gray-800">Add Subject</h1>
					<div class="border-left-primary">

						<?php echo validation_errors('<div class="alert alert-danger">', '</div> '); ?>
						<div class="container">
							<form method="POST" action="<?php echo base_url() . 'subject/addNewSubject' ?>">
								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputEmail4">Name</label>
										<input class="form-control" id="subjectName" placeholder="Name" name="subjectName">
									</div>
									<div class="form-group col-md-6">
										<label for="inputPassword4">Total Marks</label>
										<input class="form-control" id="subjectMarks" placeholder="Marks" name="subjectMarks"> </div>
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
										<label for="inputCity">Class</label>
										<select class="form-control" name="teacher" required>
											<option>----Teacher----</option>
											<?php foreach ($teacher as $t) { ?>
												<option value="<?php echo $c['id']; ?>"><?php echo $t['teacherName']; ?></option>

											<?php  } ?>
										</select>
									</div>
									<br />
									<br />
								</div> <button type="submit" class="btn btn-primary ">Done</button>
								<button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . 'Subject' ?>';">Cancel</button>
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
