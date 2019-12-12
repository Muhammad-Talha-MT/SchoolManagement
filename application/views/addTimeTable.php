<?php
if (!isset($_SESSION['id'])) {
    redirect(base_url() . 'Login/showLogin');
}
?>
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
                    <h1 class="h3 mb-4 text-gray-800">Set Time Table</h1>
                    <?php
                    if (isset($_SESSION['Fail'])) {
                        echo "<span class='alert alert-danger'>" . $_SESSION['Fail'] . "</span><br><br>";
                    }
                    ?>
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div> '); ?>
                    <div class="border-left-primary">
                        <div class="container">
                            <form method="POST" action="<?php echo base_url() . 'subject/addNewSubject' ?>">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Subject</label>
                                        <select class="form-control subject" name="class" required>
                                            <option>----Subject----</option>
                                            <?php foreach ($subjectName as $c) { ?>
                                                <option><?php echo $c['subjectName']; ?></option>

                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Lecture</label>
                                        <select class="form-control" name="class" required>
                                            <option>----Lecture----</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Class</label>
                                        <select class="form-control" name="class" required>
                                            <option>----Class----</option>
                                            <?php foreach ($className as $c) { ?>
                                                <option><?php echo $c['className'] ?></option>

                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputCity">Teacher</label>
                                        <select class="form-control teacher" name="teacher" required>
                                            <option>----Teacher----</option>
                                            <?php foreach ($teacher as $t) { ?>
                                                <option value="<?php echo $c['id']; ?>"><?php echo $t['teacherName']; ?></option>

                                            <?php  } ?>
                                        </select>
                                    </div>
                                    <br />
                                    <br />
                                </div> <button type="submit" class="btn btn-primary ">Done</button>
                                <button type="reset" class="btn btn-secondary active" onclick="window.location.href = '<?php echo base_url() . 'Subject' ?>';">Cancel</button>
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
    <script>
        $(document).ready(function() {
            console.log("Hasee");
            $('.subject').change(function() {
                var dataToSend = $(this).val();
                console.log(dataToSend);

                var ajaxObj = {
                    type: 'POST',
                    datatype: 'json',
                    url: '<?php echo base_url(); ?>Timetable/TeacherNameFromSubject',
                    data: 'data=' + dataToSend,
                    success: function(data) {
                        // box.html(r);
                        $.each(data, function(key, value) {

                            var opt = $('<option />'); // here we're creating a new select option with for each city
                            opt.val(value['teacherName']);
                            opt.text(value['teacherName']);
                            $('#teacher').append(opt);

                        })
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