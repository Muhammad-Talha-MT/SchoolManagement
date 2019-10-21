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
                    <h1 class="h3 mb-2 text-gray-800">Fees</h1>
                    <p class="mb-4">This is all Fees Data.</p>
                    <br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Fees Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Registration No.</th>
                                            <th>Month</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Pay</th>
                                            <th>Print</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Registration No.</th>
                                            <th>Month</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                            <th>Pay</th>
                                            <th>Print</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($fee as $f) { ?>
                                        <tr>
                                            <td><?php echo $f['regNumber']; ?></td>
                                            <td><?php echo $f['studentName']; ?></td>
                                            <td><?php echo $f['month']; ?></td>
                                            <td><?php echo $f['amount']; ?></td>
                                            <td><?php echo $f['Date']; ?></td>
                                            <?php if ($f["Date"]=='none'){ ?>
                                            <td><a href="<?php echo base_url() . 'Fees/pay_fee/'.urlencode($f['id'].'_'.$f['regNumber'].'_'.$f['studentName'].'_'. $f['amount'].'_'.$f['classId'])?>"
                                                    class="btn btn-info btn-circle"
                                                    onclick="return confirm('Are you sure?');"><i
                                                        class="fas fa-check"></i></a>
                                            </td>
                                            <td>
                                                <a class="btn btn-info btn-circle disabled"><i
                                                        class="fas fa-print"></i></a>
                                            </td>
                                            <?php } else {?>
                                            <td><a class="btn btn-success btn-circle disabled"><i
                                                        class="fas fa-check"></i></a></td>
                                            <td>
                                                <a href="<?php echo base_url() . 'Fees/print_fee/'.urlencode($f['regNumber'].'_'.$f['studentName'].'_'. $f['amount'].'_'.$f['classId'].'_'.'Fees')?>"
                                                    class="btn btn-info btn-circle"><i class="fas fa-print"></i></a>
                                            </td>
                                            <?php } ?>

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

</body>

</html>