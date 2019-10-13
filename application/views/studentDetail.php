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
                    <h1 class="h3 mb-4 text-gray-800">Student Detail</h1>
                    <div class="border-left-success">
                        <div class="container">
                            <form method="POST" action="" class="needs-validation">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a href="#" class="btn btn-danger btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text">Cancel</span>
                                        </a>
                                        <a href="#" class="btn btn-info btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-print"></i>
                                            </span>
                                            <span class="text">Print</span>
                                        </a>

                                    </div>
                                    <div class="offset-md-9">
                                        <img class="img-thumbnail" src="<?php echo base_url() . 'upload/' . $picture; ?>" alt="No Picture">
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="studentName">Student Name</label>
                                        <input type="text" class="form-control" id="studentName" placeholder="Student Name" name="studentName" value="<?php echo $studentName; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fatherName">Father Name</label>
                                        <input type="text" class="form-control" id="fatherName" placeholder="Father Name" name="fatherName" value="<?php echo $fatherName; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-10">
                                        <label for="inputAddress">Address</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" value="<?php echo $address; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">Class</label>
                                        <input type="text" class="form-control" id="class" placeholder="1234 Main St" name="address" value="<?php echo $class; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="studentCnic">Student CNIC / B-Form</label>
                                        <input class="form-control" type="text" name="studentcnic" minlength="13" maxlength="13" id="studentcnic" placeholder="CNIC without dash" value="<?php echo $studentCnic; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fatherCnic">Faher CNIC</label>
                                        <input class="form-control" type="text" name="fathercnic" minlength="13" maxlength="13" id="fathercnic" placeholder="CNIC without dash" value="<?php echo $fatherCnic; ?>" disabled>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="cellNumber">Cell Number</label>
                                        <input class="form-control" type="text" name="cellNumber" minlength="11" maxlength="11" id="cellNumber" value="<?php echo $cellNumber; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="dob">Date of Birth</label>
                                        <input class="form-control" type="text" name="dob" required="" data-date="" data-date-format="DD MM YYYY" value="<?php echo $dob; ?>" disabled>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputCity">Gender</label>
                                        <input class="form-control" type="text" name="gender" required="" data-date="" data-date-format="DD MM YYYY" value="<?php echo $gender; ?>" disabled>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
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