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
                    <h1 class="h3 mb-4 text-gray-800">Edit Class</h1>
                    <div class="border-left-primary">
                        <div class="container">
                            <form method="POST" action="<?php echo base_url() . 'Classes/showEdit/' . $class['id'] ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Class Name</label>
                                        <input class="form-control" id="className" placeholder="Name" name="className" required value="<?php echo set_value('className', $class['className']); ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Monthly Fee</label>
                                        <input class="form-control" id="fee" name="fee" placeholder="Monthly Fee (Integer Value)" pattern="\d+" required value="<?php echo set_value('fee', $class['fee']); ?>">
                                    </div>
                                </div> <button type="submit" class="btn btn-primary ">Done</button>
                                <button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . '.Classes.' ?>';">Cancel</button>
                            </form>
                        </div>
                    </div>

                </div>
                <br />

                <?php
                if (isset($_SESSION['success'])) {
                    echo  "<span class='alert alert-success'>" . $_SESSION['success'] . "</span>";
                }
                ?>
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