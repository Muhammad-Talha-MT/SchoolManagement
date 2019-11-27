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
            <h1 class="text-center">Teacher Pay Detail</h1>
            <table class="col-md-12 table">
                <tbody>
                    <tr>
                        <th>TeacherName</th>
                        <td><?php echo $teacherName; ?></td>
                    </tr>
                    <tr>
                        <th>Teacher Pay</th>
                        <td><?php echo $pay; ?></td>
                    </tr>
                    <tr>
                        <th>Advance</th>
                        <td><?php echo $advance; ?></td>
                    </tr>
                    <tr>
                        <th>Leaves Days</th>
                        <td><?php echo $leaves; ?></td>


                    </tr>

                    <tr>
                        <th>Late Days</th>
                        <td><?php echo $late; ?></td>
                    </tr>
                    <tr>
                        <th>Calculated Pay</th>
                        <td><?php echo $calculatedPay; ?></td>

                    </tr>
                    <br />
                    <br />
                    <td>
                        <br />
                    </td>
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