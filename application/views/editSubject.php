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
                    <h1 class="h3 mb-4 text-gray-800">Add Subject</h1>
                    <div class="border-left-primary">



                        <div class="container">
                            <form method="POST" action="<?php echo base_url() . 'Subject/showEdit/' . $subject['id'] ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail4">Name</label>
                                        <input class="form-control" id="subjectName" placeholder="Name" name="subjectName" required value="<?php echo set_value('subjectName', $subject['subjectName']); ?>">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Total Marks</label>
                                        <input class="form-control" id="subjectMarks" placeholder="Marks" name="subjectMarks" required value="<?php echo set_value('subjectMarks', $subject['totalMarks']); ?>"> </div>

                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Class</label>
                                        <select class="form-control" name="class" required>
                                            <option>----Class----</option>
                                            <option value="0">PG</option>
                                            <option value="1">Nursery</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Class</label>
                                        <select class="form-control" name="teacher" required>
                                            <option>----Teacher----</option>
                                            <option value="0">Ahmad</option>
                                            <option value="1">Ali</option>
                                        </select>
                                    </div>
                                    <br />
                                    <br />
                                </div> <button type="submit" class="btn btn-primary ">Done</button>
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