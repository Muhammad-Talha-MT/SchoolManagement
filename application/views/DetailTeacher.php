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
                    <h1 class="h3 mb-4 text-gray-800">New Teacher</h1>
                    <div class="border-left-primary">
                        <div class="container">
                            <form method="POST" enctype="multipart/form-data" class="needs-validation">
                                <div class="row">
                                    <div class="col-md-4">
                                        <a class="btn btn-danger btn-icon-split" href="<?php echo base_url() . 'Teacher/ViewTeacher' ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-arrow-left"></i>
                                            </span>
                                            <span class="text">Cancel</span>
                                        </a>
                                        <a class="btn btn-info btn-icon-split" href="<?php echo base_url() . 'Teacher/printTeacher/' . $id ?>">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-print"></i>
                                            </span>
                                            <span class="text">Print</span>
                                        </a>

                                    </div>
                                    <div class="offset-md-9">
                                        <img class="img-thumbnail" src="<?php echo base_url() . 'upload/' . $picture; ?>" alt="No Picture">
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="studentName">Teacher Name</label>
                                            <input type="text" class="form-control" id="teacherName" placeholder="Teacher Name" name="teacherName" value="<?php echo $teacherName; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="fatherName">Pay</label>
                                            <input type="text" class="form-control" id="teacherPay" placeholder="Teacher Pay" name="teacherPay" value="<?php echo $pay; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="inputAddress">Special Subject</label>
                                            <input type="text" class="form-control" id="specialSubject" placeholder="Subject" name="specialSubject" value="<?php echo $specialSubject; ?>" disabled>
                                        </div>
                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-md-3">
                                            <label for="appointedDate">Appointed Date</label>
                                            <input class="form-control" type="date" name="appointedDate" required data-date="" data-date-format="DD MM YYYY" value="<?php echo $appointedDate; ?>" disabled>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputCity">Gender</label>
                                            <input class="form-control" type="text" name="gender" required="" data-date="" data-date-format="DD MM YYYY" value="<?php echo $gender; ?>" disabled>
                                        </div>
                                        <div class="form-group  col-md-3">
                                            <label for="inputMDEx1">Choose CheckIn time</label>
                                            <input type="time" id="checkInTime" class="form-control" name="checkInTime" value="<?php echo $checkInTime; ?>" disabled>
                                        </div>
                                        <div class="form-group  col-md-3">
                                            <label for="inputMDEx1">Choose CheckOut time</label>
                                            <input type="time" id="checkOutTime" class="form-control" name="checkOutTime" value="<?php echo $checkOutTime; ?>" disabled>
                                        </div>
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


    <?php require('foot.php');

    ?>


    < /body> < /html>