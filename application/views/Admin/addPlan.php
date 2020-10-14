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
    <div style="background-color: white;height: 2400px;" >
    <!-- Dashboard Nav Baar -->
    
                 <!-- Page Heading -->
                 <h1 class="h3 mb-4 text-gray-800 font container">New Plan</h1>
                    <div class="border-left-primary">
                        <div class="container">
                            <form method="POST" enctype="multipart/form-data"
                                action="<?php echo base_url() . 'plan/newPlan' ?>" class="needs-validation">
                                <div class="form-row" >

                                    <div class="form-group col-md-8">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="studentName">Plan Name</label>
                                                <input type="text" class="form-control" id="name"
                                                    placeholder="Name" name="name" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="studentName">Plan Price</label>
                                                <input type="text" class="form-control" id="planprice"
                                                    placeholder="Daily Profit" name="planprice" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="studentName">GH/S</label>
                                                <input type="number" class="form-control" id="ghs"
                                                    placeholder="GH/S" name="ghs" required>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="studentName">Daily Profit</label>
                                                <input type="text" class="form-control" id="dailyprofit"
                                                    placeholder="Daily Profit" name="dailyProfit" required>
                                            </div>
                                            
                                            
                                        </div>

                                    </div>

                                </div>

                                <button type="submit" class="btn btn-primary">Done</button>
                            </form>




                        </div>
                    </div>

            </div>
    </body>

    </html>