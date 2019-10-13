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
                            <form method="POST" action="<?php echo base_url() . 'Users/showEdit/' . $user['id'] ?>">
                            <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">User Name</label>
                                        <input class="form-control" id="userName" placeholder="Enter User Name" name="userName" required value="<?php echo set_value('userName', $user['userName']); ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Password</label>
                                        <input class="form-control" id="password" placeholder="Enter Password" name="password" minlength="6" required value="<?php echo set_value('password', $user['password']); ?>"> </div>
                                </div> <button type="submit" class="btn btn-primary">Save</button>
                                <button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . '.Users.' ?>';">Cancel</button>
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