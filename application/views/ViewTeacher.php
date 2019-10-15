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
                    <h1 class="h3 mb-2 text-gray-800">Teachers</h1>
                    <p class="mb-4">This is all Teachers Data of School.</p>
                    <div class="">
                        <a class="btn btn-primary btn-icon-split" href="<?php echo base_url() . 'Teacher/createTeacher' ?>">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus right"></i>
                            </span>
                            <span class="text">New Teacher</span>
                        </a>
                    </div><br>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Teachers Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Teacher Name</th>
                                            <th>Teacher Salary</th>
                                            <th>Special Subject</th>
                                            <th>CheckIn Time</th>
                                            <th>CheckOut Time</th>
                                            <th>Gender</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Print Detail</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Picture</th>
                                            <th>Teacher Name</th>
                                            <th>Teacher Salary</th>
                                            <th>Special Subject</th>
                                            <th>CheckIn Time</th>
                                            <th>CheckOut Time</th>
                                            <th>Gender</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Print Detail</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($teacherList as $teacher) { ?>
                                            <tr>
                                                <td><img src="<?php echo base_url() . 'upload/' . $teacher['picture']; ?>" alt="No Picture"></td>
                                                <td><?php echo $teacher['teacherName']; ?></td>
                                                <td><?php echo $teacher['pay']; ?></td>
                                                <td><?php echo $teacher['specialSubject']; ?></td>
                                                <td><?php echo $teacher['checkInTime']; ?></td>
                                                <td><?php echo $teacher['checkOutTime']; ?></td>
                                                <td><?php echo $teacher['gender']; ?></td>
                                                <td><a class="btn btn-success btn-circle" href="<?php echo base_url() . 'Teacher/showEdit/' . $teacher['id'] ?>"><i class="fas fa-edit"></i></a></td>
                                                <td><a class="btn btn-danger btn-circle" href="<?php echo base_url() . 'Teacher/delete/' . $teacher['id'] ?>"><i class="fas fa-trash"></i></a></td>
                                                <td><a href="<?php echo base_url() . 'Teacher/getTeacherDetail/' . $teacher['id'] ?>" class="btn btn-info btn-circle"><i class="fas fa-eye"></i></a></td>
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