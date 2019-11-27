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
                    <h1 class="h3 mb-2 text-gray-800">Results</h1>
                    <p class="mb-4">This is all Results Data.</p>
                    <br>
                    <!--  Select Class  -->
                    <div class="form-group col-md-6">
                        <label for="inputCity">Class</label>
                        <select id="selection" class="form-control" name="class" required>
                            <option id='-1'>----Class----</option>
                            <?php foreach ($class as $c) { ?>
                            <option id="<?php echo $c['id']; ?>" value="<?php echo $c['id']; ?>">
                                <?php echo $c['className']; ?>
                            </option>
                            <?php  } ?>
                        </select>
                    </div>
                    <button id="edit" onclick="edit()" class="btn btn-secondary">Edit</button>
                    <button id="save" class="btn btn-primary" style="display:none">save</button>
                    <button id="cancel" class="btn btn-danger" style="display:none">Cancel</button>
                    <!-- DataTales Example -->
                    <div id="main_data" class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Results Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Registration No.</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Subject Name</th>
                                            <th>Obtained Marks</th>
                                            <th>Total Marks</th>
                                            <th class="hidden">Subject Id</th>
                                            <th class="hidden">Student Id</th>
                                            <th class="hidden">class Id</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Registration No.</th>
                                            <th>Name</th>
                                            <th>Class</th>
                                            <th>Subject Name</th>
                                            <th>Obtained Marks</th>
                                            <th>Total Marks</th>
                                            <th class="hidden">Subject Id</th>
                                            <th class="hidden">Student Id</th>
                                            <th class="hidden">class Id</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($results as $r) { ?>
                                        <tr>
                                            <td><?php echo $r["regNumber"]; ?></td>
                                            <td><?php echo $r["studentName"]; ?></td>
                                            <td><?php echo $r["classname"]; ?></td>
                                            <td><?php echo $r["subjectName"]; ?></td>
                                            <td><input id="marks" class="form-control" pattern="\d+" required
                                                    value="<?php echo $r["obtainedmarks"]; ?>" disabled></input></td>
                                            <td><?php echo $r["totalmarks"]; ?></td>
                                            <td class="hidden"><?php echo $r["subjectid"]; ?></td>
                                            <td class="hidden"><?php echo $r["studentid"]; ?></td>
                                            <td class="hidden"><?php echo $r["classid"]; ?></td>
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
        <script>
        function edit() {
            var save = document.getElementById('save');
            save.style.display = "";
            var save = document.getElementById('cancel');
            save.style.display = "";
            var edit = document.getElementById('edit');
            edit.style.display = "none";
            var inp = document.getElementsByTagName('input');
            for (var i = 0; i < inp.length; i++) {
                if (inp[i].id == "marks") {
                    inp[i].disabled = false;
                }
            }
        }

        function getIndex() {
            var selection = document.getElementById('selection');
            for (var i = 0; i < selection.length; i++) {
                if (selection[i].id == "<?php echo $current?>") {
                    return i;
                }
            }
            return 0;
        }

        function checkChanged(changed) {
            for (var i = 0; i < changed.length; i++) {
                if (isNaN(changed[i]['obtainedmarks'])) {
                    return true;
                }
                if (Number(changed[i]['obtainedmarks']) > Number(changed[i]['totalmarks'])) {
                    return true;
                }
            }
            return false;
        }
        $(document).ready(function() {
            var data = getData();
            var selection = document.getElementById('selection');
            selection.selectedIndex = getIndex();
            $("#selection").change(function() {
                if (selection[selection.selectedIndex].id == '-1') {
                    window.location = "<?php echo base_url(); ?>" + "results";
                } else {
                    window.location = "<?php echo base_url(); ?>" + "results/showResult/" + selection[
                        selection.selectedIndex].id;
                }
            })
            $("#cancel").click(function() {
                var save = document.getElementById('save');
                save.style.display = "none";
                var save = document.getElementById('cancel');
                save.style.display = "none";
                var edit = document.getElementById('edit');
                edit.style.display = "";
                var newData = getData();
                var changed = new Array();
                for (var i = 0; i < newData.length; i++) {
                    if (newData[i]['obtainedmarks'] !== data[i]['obtainedmarks']) {
                        var d = {
                            'studentid': data[i]['studentid'],
                            'subjectid': data[i]['subjectid'],
                            'obtainedmarks': data[i]['obtainedmarks'],
                        }
                        changed.push(d);
                    }
                }
                var table, tr, td;
                table = document.getElementById("dataTable");
                tr = table.getElementsByTagName("tr");
                var j = 0;
                for (i = 2;
                    (i < tr.length) && (j < changed.length); i++) {
                    td = tr[i].getElementsByTagName("td");
                    if (td[7].innerHTML == changed[j]['studentid'] && td[6].innerHTML == changed[j][
                            'subjectid'
                        ]) {
                        td[4].childNodes[0].value = changed[j]['obtainedmarks'];
                        j++;
                    }
                }
                disableinputs();
            })
            $("#save").click(function() {
                var newData = getData();
                var changed = new Array();
                for (var i = 0; i < newData.length; i++) {
                    if (newData[i]['obtainedmarks'] !== data[i]['obtainedmarks']) {
                        var d = {
                            'studentid': newData[i]['studentid'],
                            'subjectid': newData[i]['subjectid'],
                            'obtainedmarks': newData[i]['obtainedmarks'],
                            'totalmarks': newData[i]['totalmarks'],
                        }
                        changed.push(d);
                    }
                }
                if (checkChanged(changed)) {
                    window.alert("Invalid Input");
                } else {
                    data = newData;
                    var ajaxObj = {
                        type: 'POST',
                        datatype: 'json',
                        url: '<?php echo base_url(); ?>results/save',
                        data: {
                            newData: changed,
                        },
                        success: function() {
                            console.log("success");
                        },
                        error: function() {
                            console.log("Failed");
                        },
                    };
                    $.ajax(ajaxObj);
                    disableinputs();
                    var save = document.getElementById('save');
                    save.style.display = "none";
                    var edit = document.getElementById('edit');
                    edit.style.display = "";
                }
            })
        })

        function disableinputs() {
            var inp = document.getElementsByTagName('input');
            for (var i = 0; i < inp.length; i++) {
                if (inp[i].id == "marks") {
                    inp[i].disabled = true;
                }
            }
        }

        function getData() {
            var table, tr, td, i, txtValue;
            var d = new Array();
            table = document.getElementById("dataTable");
            tr = table.getElementsByTagName("tr");
            for (i = 2; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td");
                var row = new Array();
                row['studentid'] = td[7].innerHTML;
                row['subjectid'] = td[6].innerHTML;
                row['obtainedmarks'] = td[4].childNodes[0].value;
                row['totalmarks'] = td[5].innerHTML
                d.push(row);
            }
            return d;
        }
        </script>
</body>

</html>