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
                    <h1 class="h3 mb-2 text-gray-800">Classes</h1>
                    <p class="mb-4">This is Data of all Classes in the School.</p>
                    <div class="">
                        <a href="<?php echo base_url() . 'Classes/addClass' ?>" class="btn btn-primary btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-plus right"></i>
                            </span>
                            <span class="text">Add New Class</span>
                        </a>
                    </div><br>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <?php
                        if (isset($_SESSION['success'])) {
                            echo  "<span class='alert alert-success'>" . $_SESSION['success'] . "</span>";
                        }
                        ?>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Monthly Fee</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Monthly Fee</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <?php if (!empty($classes)) {
                                        foreach ($classes as $class) { ?>
                                            <tr>
                                                <td>
                                                    <?php echo $class['className'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $class['fee'] ?>
                                                </td>
                                                <td> <a href="<?php echo base_url() . 'Classes/edit/' . $class['id'] ?>" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a></td>
                                                <td> <a href="<?php echo base_url() . 'Classes/delete/' . $class['id'] ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
                                            </tr>
                                        <?php
                                            }
                                        } else { ?>
                                        <tr>
                                            <td>
                                                Record Not Found
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    <tbody>
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