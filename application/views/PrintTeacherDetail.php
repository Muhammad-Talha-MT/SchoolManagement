<?php
if (!isset($_SESSION['id'])) {
	redirect(base_url() . 'Login/showLogin');
}
?>
<!DOCTYPE html>
<html lang="en">

<?php require('head.php'); ?>


<body>
	<div class="container">
		<div class="nav navbar">
			<a href="<?php echo base_url() . 'Teacher/showTeacher/' . $id ?>" class="btn btn-danger btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-arrow-left"></i>
				</span>
				<span class="text">Cancel</span>
			</a>
			<button onclick="printDiv('printableArea')" class="btn btn-info btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-print"></i>
				</span>
				<span class="text">Print</span>
			</button>
		</div>

		<div id="printableArea">
			<h1 class="text-center">Teacher Detail</h1>
			<table class="col-md-12 table">
				<tbody>
					<tr>
						<td><img class="img-thumbnail" style="-webkit-filter: grayscale(100%)" src="<?php echo base_url() . 'upload/' . $picture; ?>" alt="No Picture"></td>
					</tr>
					<tr>
						<th>Name</th>
						<td><?php echo $teacherName; ?></td>
						<th>Pay</th>
						<td><?php echo $pay; ?></td>
					</tr>
					<tr>
						<th>Special Subject</th>
						<td><?php echo $specialSubject; ?></td>
						<th>Appointed Date</th>
						<td><?php echo $appointedDate; ?></td>
					</tr>
					<tr>
						<th>CheckIn Date</th>
						<td><?php echo $checkInTime; ?></td>
					</tr>
					<tr>
						<th>CheckOut Date</th>
						<td><?php echo $checkOutTime; ?></td>
						<th>Gender</th>
						<td><?php echo $gender; ?></td>

					</tr>
				</tbody>
			</table>
			<br><br>
			<h5>Signature of Teacher ______________________</h5>
		</div>


	</div>
	<script>
		function printDiv(divName) {
			var printContents = document.getElementById(divName).innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
		}
	</script>
</body>
<?php require('foot.php'); ?>


</html>
