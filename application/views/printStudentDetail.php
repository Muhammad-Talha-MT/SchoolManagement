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
			<a href="<?php echo base_url() . 'Student/studentDetail/' . $id ?>" class="btn btn-danger btn-icon-split">
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
			<h1 class="text-center">Student Detail</h1>
			<table class="col-md-12 table">
				<tbody>
					<tr>
						<td><img class="img-thumbnail" style="-webkit-filter: grayscale(100%)" src="<?php echo base_url() . 'upload/' . $picture; ?>" alt="No Picture"></td>
					</tr>
					<tr>
						<th>Name</th>
						<td><?php echo $studentName; ?></td>
						<th>Father Name</th>
						<td><?php echo $fatherName; ?></td>
					</tr>
					<tr>
						<th>Student's CNIC</th>
						<td><?php echo $studentCnic; ?></td>
						<th>Father's CNIC</th>
						<td><?php echo $fatherCnic; ?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo $address; ?></td>
					</tr>
					<tr>
						<th>Class of Admission</th>
						<td><?php echo $class; ?></td>
						<th>Telephone Number</th>
						<td><?php echo $cellNumber; ?></td>

					</tr>
					<tr>
						<th>Date of Birth</th>
						<td><?php echo $dob; ?></td>
						<th>Gender</th>
						<td><?php echo $gender; ?></td>
					</tr>
				</tbody>
			</table>
			<br><br>
			<h5>Signature of Parent / Guardian ______________________</h5>
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
