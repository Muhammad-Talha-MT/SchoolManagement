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
    
    <h1 class="h3 mb-4 text-gray-800">Edit Plan</h1>
					<div class="border-left-primary">
						<div class="container">
							<form method="POST" enctype="multipart/form-data" action="<?php echo base_url() . 'plan/editPlan/' . $plan['id'] ?>" class="needs-validation">
								<div class="form-row">

									<div class="form-group col-md-8">
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="studentName">Plan Name</label>
												<input type="text" class="form-control" id="categoryName" placeholder="Name" name="name" value="<?php echo $plan['name']; ?>" required>
											</div>
											<div class="form-group col-md-6">
												<label for="studentName">Plan Price</label>
												<input type="text" class="form-control" id="categoryName" placeholder="Price" name="planprice" value="<?php echo $plan['plan_price']; ?>" required>
											</div>
											<div class="form-group col-md-6">
												<label for="fatherName">GHS</label>
												<input type='number' class="form-control" id="description" placeholder="0" name="ghs" value="<?php echo $plan['ghs']; ?>" required></input>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col-md-6">
												<label for="studentName">Daily Profit</label>
												<input type="text" class="form-control" id="metaTitle" placeholder="Daily Profit" name="dailyProfit" value="<?php echo $plan['daily_profit']; ?>" required>
											</div>
										</div>
									</div>

								</div>

								<button type="submit" class="btn btn-primary">Done</button>
							</form>




						</div>
					</div>      
            
    </body>

    </html>