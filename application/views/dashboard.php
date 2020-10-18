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
.gif
{
  height: 100px;
    width: 50px;
}
.bg {
  /* The image used */
  background-image: url("upload/bg2.jpg");
  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.imgdas
{
  height:350px;
  width:500px;
}
 </style>
 <script>

function getCoinValue()
{
  console.log("adbjabd");
  getapi('https://blockchain.info/ticker');
}
function show(data)
{
  document.getElementById("btcprice").innerHTML = data.USD.last;
}
async function getapi(url) { 
    const response = await fetch(url); 
    var data = await response.json();
    show(data); 
} 
 </script>
</head>
<body onload=" getCoinValue()" class="bg">
    <div >
    <!-- Dashboard Nav Baar -->
    <nav style="background-color: black !important;">
        <div class="nav-wrapper container" >
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">Dashboard</a>
            </li>
            <li><a >History</a>
            </li>
            <li><a href="<?php echo base_url()."dashboard/referral"?>">Referral</a>
            </li>
            <li><a >Withdraw</a>
            </li>
              <li><a class="btn red lighten-1">Log out</a></li>
            </ul>
        </div>
      </nav>
      <!-- Dashboard Nav Baar -->

  <div class="container white-text">
  <h4 style="opacity:0.5">Bimine Dashboard</h4>
  <br/>
<div class="row">
<div class="col s6 ">
<div class="card N/A transparent" >
  <div style="margin-left:20px" >
  <span class="card-title white-text">Available Balance</span>
  <p class="white-text"><?php echo $username?> </p>
  <span class="boldrs white-text"><?php echo $coins?></span><span class="blue-text boldrs"> BTC</span>
  <br/>
  </div>
</div> 
</div>
    <div class="col s3 ">
        <div class="card N/A transparent">
            <div style="margin-left:20px">
            <span class="card-title white-text ">BTC Price</span>
            <br/>
            <span id='btcprice' class="boldrs white-text">Loading..</span>
            <br/>
            <span  style="opacity:0.5;font-family: BT Mono bold !important; " class="white-text">BITSTAMP</span>

            </div>
        </div> 
      </div>
      <div class="col s3 ">
        <div class="card N/A transparent" >
            <div style="margin-left:20px">
            <span class="card-title white-text">Power GH/S</span>
            <br/>
            <span class="boldrs white-text"><?php echo $ghs ?></span>
            <br/>
            <span  style="opacity:0.5;font-family: BT Mono bold !important;" class="white-text">T.P GH/S</span>

            </div>
        </div> 
      </div>
      </div>
      <div class="row">
      <div class="col s6">
    <div class="card N/A transparent" >
      <div style="margin-left:20px" >
      <span class="card-title white-text">Current Plan</span>
      <p class="boldrs white-text"><?php echo $selected_plan['name']?></p>
      <p class="boldrs white-text"><?php echo $selected_plan['ghs']?> GH/S</p>
      <span class="boldrs white-text"><?php echo $selected_plan['daily_profit']?></span><span class="blue-text boldrs"> BTC</span>
      <br/>
      </div>
    </div>  
</div>
<div class="col s6">
<img src="<?php echo base_url()."/upload/1.png"?>" class="imgdas">
</div>
    </div>
      <div  class="N/A transparent">
        <h4 style="font-family: BT Mono bold " class="center-align white-text">Choose you plan</h4>
        <div class="row">
        <?php foreach ($plans as $p) { ?>
            <div class="col s4">
              <div class="card  black-text " style="border-style: solid;
              border-color: green;" >
              
                  <h1 class="boldrs card-title center-align  light-blue-text "><?php echo $p['name']; ?></h1>
                  <h4 class="center-align black-text "><?php echo $p['daily_profit']; ?>% Daily</h4>
                  <p class="cardbox container black-text">Mini Purchase
                  <span class="right black-text">500 GH/S</span></p>
                  <br/>
                  <p class="cardbox container black-text">Max Purchase
                  <span class="right black-text">4999 GH/S</span></p>
                  <br/>
                  <p class="cardbox container black-text">Mini Payout
                  <span class="right black-text">0.005BT</span></p>
                  <br/>
                  <p class="cardbox container black-text">Maintaiance fee
                  <span class="right black-text">included</span></p>
                  <br/>
                  <p class="cardbox container black-text">contract for
                  <span class="right black-text">12 month</span></p>
                  <br/>
                  <div class="card-action">
                  <form action="<?php echo base_url()."plan/selectPlan"?>" method="POST" enctype="multipart/form-data">
                  <input type="text" value="<?php echo $p["id"]?>" hidden name="planid" id="planid"/>
                  <input  type="submit" class="btn  red lighten-1 col s6" value="Invest Now" ></input>
                  <img src="<?php echo base_url()."/upload/Card.GIF"?>" class="gif ">
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