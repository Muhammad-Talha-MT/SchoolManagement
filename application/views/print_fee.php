<!DOCTYPE html>
<html lang="en">

<?php require('head.php'); ?>


<body>
    <div class="container">
        <div class="nav navbar">
            <a href="<?php echo base_url() . $fee['back_url']?>" class="btn btn-danger btn-icon-split">
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
        <br>
        <div id="printableArea">
            <h1 class="text-center">Fee Slip</h1>
            <br>
            <br>
            <br>
            <br>
            <table class="col-md-12 table table-bordered">
                <tbody>
                    <tr>
                        <th>Registeration Number</th>
                        <td class='text-right'><?php echo $fee['regNumber']; ?></td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td class='text-right'><?php echo $fee['studentName']; ?></td>
                    </tr>
                    <tr>
                        <th>Class</th>
                        <td class='text-right'><?php echo $fee['class']; ?></td>
                    </tr>
                    <tr>
                        <th>Amount</th>
                        <td class='text-right'><?php echo $fee['amount']; ?></td>
                    </tr>
                    <tr>
                        <th>Fee Month</th>
                        <td class='text-right'><?php echo $fee['month']; ?></td>
                    </tr>
                    <tr>
                        <th>Recieve Date</th>
                        <td class='text-right'><?php echo $fee['recievedDate']; ?></td>
                    </tr>
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