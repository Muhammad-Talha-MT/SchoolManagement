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
					<h1 class="h3 mb-2 text-gray-800">Teachers Pay</h1>
					<p class="mb-4">This is all Teachers Pay Data of School.</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">Teachers Pay</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Month</th>
											<th>Actuall Pay</th>
											<th>Advance Payment</th>
											<th>Leaves</th>
											<th>Late</th>
											<th>Calculated Pay</th>
											<th>Calculate</th>
											<th>Print Detail</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>Name</th>
											<th>Month</th>
											<th>Actuall Pay</th>
											<th>Advance Payment</th>
											<th>Leaves</th>
											<th>Late</th>
											<th>Calculated Pay</th>
											<th>Calculate</th>
											<th>Print Detail</th>
										</tr>
									</tfoot>
									<tbody id="data">
										<?php foreach ($payData as $data) { ?>
											<tr>
												<td><?php echo $data['id']; ?> <input class="Id" type='hidden' value='<?php echo $data['id']; ?>' required></td>
												<td><?php echo $data['teacherName']; ?></td>
												<td><?php echo $data['month']; ?></td>
												<td><?php echo $data['pay']; ?> <input class="pay" type='hidden' value='<?php echo $data['pay']; ?>'></td>
												<td><input type="text" class="form-control Advance" name="Advance" id=' Advance' value="<?php echo $data['advance']; ?>"></td>
												<td><input type="text" class="form-control Leaves" name="Leaves" value="<?php echo $data['leave']; ?>"></td>
												<td><input type="text" class="form-control Late" name="Late" value="<?php echo $data['late']; ?>"></td>
												<td><?php echo $data['calculatedPay']; ?></td>
												<td><button type="submit" class="btn btn-primary calculate">Done</button></td>
												<td><a href="<?php echo base_url() . 'TeacherPay/teacherDetail/' . $data['id'] ?>" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a></td>
											</tr>
										<?php } ?>
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
		<script>
			function disbableRows() {
				table = document.getElementById("dataTable");
				tb = table.tBodies.namedItem("data")
				trs = tb.getElementsByTagName("tr");
				for (var i = 0; i < trs.length; i++) {
					tds = trs[i].getElementsByTagName("td");
					if (tds[7].innerHTML !== '') {
						tds[4].childNodes[0].disabled = true;
						tds[5].childNodes[0].disabled = true;
						tds[6].childNodes[0].disabled = true;
						tds[8].childNodes[0].disabled = true;
					}
				}
			}

			function validate_row(tr) {
				var late = tr.find('.Late').val();
				var leave = tr.find('.Leaves').val();
				var advance = tr.find('.Advance').val();
				if (late === '' || leave === '' || advance === '') {
					return false;
				}
				var str = "    ";
				if (!late.replace(/\s/g, '').length || !advance.replace(/\s/g, '').length || !leave.replace(/\s/g, '').length) {
					return false
				}
				if (isNaN(advance) || isNaN(late) || isNaN(leave)) {
					return false;
				}
				late = Number(late);
				leave = Number(leave);
				if (late < 31 && leave < 31 && (late + leave) < 31) {
					return true;
				}
				return false;
			}
			$(document).ready(function() {
				disbableRows();
				$('.calculate').click(function() {
					//console.log($(this).closest('tr').find('.Id').val());
					var dataToSend = {
						'id': $(this).closest('tr').find('.Id').val(),
						'pay': $(this).closest('tr').find('.pay').val(),
						'avdance': $(this).closest('tr').find('.Advance').val(),
						'leaves': $(this).closest('tr').find('.Leaves').val(),
						'late': $(this).closest('tr').find('.Late').val(),
					}
					var flag = validate_row($(this).closest('tr'));
					var box = $(this).closest('tr').find("td:eq(7)");
					var ajaxObj = {
						type: 'POST',
						datatype: 'json',
						url: '<?php echo base_url(); ?>TeacherPay/Calculate',
						data: dataToSend,
						success: function(r) {
							box.html(r);
							disbableRows();
						},
						error: function() {
							console.log("Failed");
						},
					};
					if (flag) {
						$.ajax(ajaxObj);
					} else {
						window.alert("Error");
					}
				});
			});
		</script>

</body>

</html>
