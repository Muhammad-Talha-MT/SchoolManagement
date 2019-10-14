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
                            <form method="POST" enctype="multipart/form-data" class="needs-validation" action="<?php echo base_url() . 'Teacher/addTeacher' ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label for="studentName">Teacher Name</label>
                                        <input type="text" class="form-control" id="teacherName" placeholder="Teacher Name" name="teacherName">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="fatherName">Pay</label>
                                        <input type="text" class="form-control" id="teacherPay" placeholder="Teacher Pay" name="teacherPay">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputAddress">Special Subject</label>
                                        <input type="text" class="form-control" id="specialSubject" placeholder="Subject" name="specialSubject">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-3">
                                        <label for="appointedDate">Appointed Date</label>
                                        <input class="form-control" type="date" name="appointedDate" required data-date="" data-date-format="DD MM YYYY">
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputCity">Gender</label>
                                        <select class="form-control" name="gender" required>
                                            <option>----Gender----</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label for="inputMDEx1">Choose CheckIn time</label>
                                        <input type="time" id="checkInTime" class="form-control" name="checkInTime">
                                    </div>
                                    <div class="form-group  col-md-3">
                                        <label for="inputMDEx1">Choose CheckOut time</label>
                                        <input type="time" id="checkOutTime" class="form-control" name="checkOutTime">
                                    </div>
                                </div>


                                <div class="form-row ">
                                    <div class="form-group col-md-3">
                                        <input class="btn btn-success" id="uploadPicture" type="file" name="uploadPicture" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Done</button>
                                <button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . 'Teacher/showTeacher' ?>';">Cancel</button>
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