<?php 
if (!isset($_SESSION['id']))
{
  redirect(base_url().'login');
}
?>
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
 </style>
 <script>
function getCoinValue(){
  console.log("adbjabd");
  getapi('https://blockchain.info/ticker');
}
function show(data){
  document.getElementById("btcprice").innerHTML = data.USD.15m; 
}
async function getapi(url) { 
    const response = await fetch(url); 
    var data = await response.json();
    show(data); 
} 


 </script>
</head>
<body onload="getCoinValue()" >
    <div style="background-color: #414143;height: 2400px;" >
    <!-- Dashboard Nav Baar -->
    <nav style="background-color: black !important;">
        <div class="nav-wrapper container" >
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Dashboard</a>
            </li>
            <li><a >History</a>
            </li>
            <li><a >Referral</a>
            </li>
            <li><a >Withdraw</a>
            </li>
              <li><a class="btn red lighten-1">Log out</a></li>
            </ul>
        </div>
        
      </nav>
      <!-- Dashboard Nav Baar -->

      <div class="container white-text">
        <h5>Bimine Dashboard</h5>
<div class="row">
<div class="col s6 ">
<div class="card" style="background-color: black !important;">
  <div style="margin-left:20px" >
  <span class="card-title">Available Balance</span>
  <p >Key which you give for Login </p>
  <span class="boldrs">0.0000000978</span><span class="blue-text boldrs"> BTC</span>
  <br/>
  </div>
</div> 
</div>
<div class="col s6 ">
    <div class="card" style="background-color: black !important;">
      <div style="margin-left:20px" >
      <span class="card-title">Available Balance</span>
      <p >Key which you give for Login </p>
      <span class="boldrs">0.0000000978</span><span class="blue-text boldrs"> BTC</span>
      <br/>
      </div>
    </div> 
    </div>
</div>
<div class="row">
    <div class="col s3 ">
        <div class="card" style="background-color: black !important;">
            <div style="margin-left:20px">
            <span class="card-title ">BTC Price</span>
            <br/>
            <span id='btcprice' class="boldrs">Loading..</span>
            <br/>
            <span  style="opacity:0.5;font-family: BT Mono bold !important;">BITSTAMP</span>

            </div>
        </div> 
      </div>
      <div class="col s3 ">
        <div class="card" style="background-color: black!important;">
            <div style="margin-left:20px">
            <span class="card-title ">Power GH/S</span>
            <br/>
            <span class="boldrs">35</span>
            <br/>
            <span  style="opacity:0.5;font-family: BT Mono bold !important;">T.P GH/S</span>

            </div>
        </div> 
      </div>
      </div>
      <div  style="background-color: black !important;">
        <h4 style="font-family: BT Mono bold " class="center-align">Choose you plan</h4>
        <div class="row">
        <?php foreach ($plans as $p) { ?>
            <div class="col s4">
              <div class="card blue-grey" style="background-color: black !important;border-style: solid;
              border-color: green;" >
                  <h1 class="boldtextfont card-title center-align  light-blue-text "><?php echo $p['name']; ?></h1>
                  <h1 class="center-align white-text "><?php echo $p['daily_profit']; ?>% Daily</h1>
                  <p class="cardbox container white-text">Mini Purchase
                  <span class="right white-text">500 GH/S</span></p>
                  <p class="cardbox container white-text">Max Purchase
                  <span class="right white-text">4999 GH/S</span></p>
                  <p class="cardbox container white-text">Mini Payout
                  <span class="right white-text">0.00005BTC GH/S</span></p>
                  <p class="cardbox container white-text">Maintaiance fee
                  <span class="right white-text">included</span></p>
                  <p class="cardbox container white-text">contract for
                  <span class="right white-text">12 month</span></p>
                  
                  <div class="card-action">
                  <form action="<?php echo base_url()."plan/selectPlan"?>" method="POST" enctype="multipart/form-data">
                  <input type="text" value="<?php echo $p["id"]?>" hidden name="planid" id="planid"/>
                  <input  type="submit" class="btn  red lighten-1" value="Invest Now" ></input>
                  </form>
                </div>
                </div>
                </div>
                <?php } ?>
                
            
            </div>
            </div>
            </div>
    </body>

    </html>