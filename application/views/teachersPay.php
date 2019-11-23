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
                                    <tbody>
                                        <?php foreach ($payData as $data) { ?>
                                            <div class="form-row">
                                                <tr>
                                                    <td><?php echo $data['id']; ?> <input class="Id" type='hidden' value='<?php echo $data['id']; ?>' required></td>
                                                    <td><?php echo $data['teacherName']; ?></td>
                                                    <td><?php echo $data['month']; ?></td>
                                                    <td><?php echo $data['pay']; ?> <input class="pay" type='hidden' value='<?php echo $data['pay']; ?>' required></td>
                                                    <?php if ($data['advance'] == NULL) { ?>
                                                        <td><input type="text" class="form-control Advance" name="Advance" id=' Advance' required></td>
                                                    <?php } else { ?>
                                                        <td><input type="text" class="form-control Advance" name="Advance" id=' Advance' value='<?php echo $data['advance']; ?>' readonly required></td>

                                                    <?php } ?>

                                                    <?php if ($data['leave'] == NULL) { ?>
                                                        <td><input type="text" class="form-control Leaves" name="Leaves" required></td>
                                                    <?php } else { ?>
                                                        <td><input type="text" class="form-control Leaves" name="Leaves" value='<?php echo $data['leave']; ?>' readonly required></td>
                                                    <?php } ?>
                                                    <?php if ($data['late'] == NULL) { ?>
                                                        <td><input type="text" class="form-control Late" name="Late" required></td>
                                                    <?php } else { ?>
                                                        <td><input type="text" class="form-control Late" name="Late" value='<?php echo $data['late']; ?>' readonly required></td>
                                                    <?php } ?>
                                                    <?php if ($data['calculatedPay'] == NULL) { ?>
                                                        <td><input type="text" class="form-control CalculatedPay" name="CalculatedPay" readnoly required></td>
                                                    <?php } else { ?>
                                                        <td><input type="text" class="form-control CalculatedPay" name="CalculatedPay" readonly value='<?php echo $data['calculatedPay']; ?>' readonly required></td>
                                                    <?php } ?>
                                                    <td><button type="submit" class="btn btn-primary calculate">Done</button></td>
                                                    <td><a href="<?php echo base_url() . 'TeacherPay/teacherDetail/' . $data['id'] ?>" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a></td>
                                                </tr>
                                            </div>
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
            $(document).ready(function() {
                console.log("jgdasjgajs");
                console.log("load");
                $('.calculate').click(function() {
                    //console.log($(this).closest('tr').find('.Id').val());
                    var dataToSend = {
                        'id': $(this).closest('tr').find('.Id').val(),
                        'pay': $(this).closest('tr').find('.pay').val(),
                        'avdance': $(this).closest('tr').find('.Advance').val(),
                        'leaves': $(this).closest('tr').find('.Leaves').val(),
                        'late': $(this).closest('tr').find('.Late').val(),
                    }
                    //console.log(dataToSend);
                    var ajaxObj = {
                        type: 'POST',
                        datatype: 'json',
                        url: '<?php echo base_url(); ?>TeacherPay/Calculate',
                        data: dataToSend,
                        success: function(r) {
                            console.log(r);
                            $(this).closest('tr').find("#CalculatedPay").value(r);
                        },
                        error: function() {
                            console.log("Failed");
                        },
                    };
                    $.ajax(ajaxObj);

                });
            });
        </script>

</body>

</html>