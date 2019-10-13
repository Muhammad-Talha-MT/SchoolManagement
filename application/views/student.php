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
                    <h1 class="h3 mb-2 text-gray-800">Students</h1>
                    <p class="mb-4">This is all Student Data of School.</p>
                    <div class="">
                        <a href="<?php echo base_url() . 'Student/admission' ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus right"></i>
                            </span>
                            <span class="text">New Admission</span>
                        </a>
                    </div><br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Students Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Registration No.</th>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Print Detail</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Registration No.</th>
                                            <th>Student Name</th>
                                            <th>Father Name</th>
                                            <th>Date of Birth</th>
                                            <th>Gender</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Print Detail</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($studentList as $student) { ?>
                                            <tr>
                                                <td><img class="img-thumbnail" src="<?php echo base_url() . 'upload/' . $student['picture']; ?>" alt="No Picture"></td>
                                                <td><?php echo $student['regNumber']; ?></td>
                                                <td><?php echo $student['studentName']; ?></td>
                                                <td><?php echo $student['fatherName']; ?></td>
                                                <td><?php echo $student['dob']; ?></td>
                                                <td><?php echo $student['gender']; ?></td>
                                                <td><a href="<?php echo base_url() . 'Student/goToEditStudent/' . $student['id'] ?>" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a></td>
                                                <td><a href="<?php echo base_url() . 'Student/deleteStudent/' . $student['id'] ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
                                                <td><a href="<?php echo base_url() . 'Student/studentDetail/' . $student['id'] ?>" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a></td>
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