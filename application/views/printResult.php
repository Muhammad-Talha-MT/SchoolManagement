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
			<a href="<?php echo base_url() . 'results' ?>" class="btn btn-danger btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-arrow-left"></i>
				</span>
				<span class="text">Back</span>
			</a>
			<button onclick="printDiv('printableArea')" class="btn btn-info btn-icon-split">
				<span class="icon text-white-50">
					<i class="fas fa-print"></i>
				</span>
				<span class="text">Print</span>
			</button>
		</div>
		<br>
		<div id="printableArea">
			<h1 class="text-center">Reslut</h1>
			<br>
			<br>
			<div>
				<h5>
					<span class='text-left'>Registeration Number : </span>
					<span class='text-right'><?php echo $main['regNumber']; ?></span>
				</h5>
				<h5>
					<span class='text-left'>Name : </span>
					<span class='text-right'><?php echo $main['studentName']; ?></span>
				</h5>
				<h5>
					<span class='text-left'>Class : </span>
					<span class='text-right'><?php echo $main['className']; ?></span>
				</h5>
			</div>

			<br>
			<br>
			<table class="col-md-12 table table-bordered">
				<thead>
					<tr>
						<th>Subject</th>
						<th>Obtained Marks</th>
						<th>Total Marks</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($results as $r) { ?>
						<tr>
							<td> <?php echo $r['subjectName'] ?> </td>
							<td> <?php echo $r['obtainedmarks'] ?> </td>
							<td> <?php echo $r['totalmarks'] ?> </td>
						</tr>
					<?php } ?>

				</tbody>
			</table>
			<br><br><br><br>
			<h5 class='text-right'>Signature: ______________________</h5>
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
