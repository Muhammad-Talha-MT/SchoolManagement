<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <style>
     .boldrs {
  font-family: "BT Mono bold" !important;
  font-size: 30px;
}
.font {
  font-family: "BT Mono bold" !important;
}
 </style>
</head>
<body >
    <div style="background-color: white;height: 100%;" class="container" >
    <!-- Dashboard Nav Baar -->
    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800 font">Plans</h1>
                    <div class="">
                        <a href="<?php echo base_url() . 'plan/add' ?>" class="btn btn-primary btn-icon-split">
                            <span class="text">Add Plans</span>
                        </a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Plan Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Plan Name</th>
                                            <th>Plan Price</th>
                                            <th>GHS</th>
                                            <th>DailyProfit</th>
                                            <th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Plan Name</th>
                                            <th>Plan Price</th>
                                            <th>GHS</th>
                                            <th>DailyProfit</th>
                                            
                                            <th>Edit</th>
											<th>Delete</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($plans as $p) { ?>
                                        <tr>
                                            <td><?php echo $p['name']; ?></td>
                                            <td><?php echo $p['plan_price']; ?></td>
                                            <td><?php echo $p['ghs']?>
                                            </td>
                                            <td><?php echo $p['daily_profit']?>
                                            </td>
                                            <td><a href="<?php echo base_url() . 'plan/goToEditPlan/' . $p['id'] ?>" class="btn btn-success btn-circle"><i class="fas fa-edit"></i></a></td>
												<td><a href="<?php echo base_url() . 'plan/deletePlan/' . $p['id'] ?>" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></a></td>
												
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
    </body>

    </html>