<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
<head>
 <!-- Compiled and minified CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
 <style>
 img{
    width: 600px;
    height: 400px;
    position: relative;
    animation: mymove 5s infinite;
  }
  .img1{
    width: 600px;
    height: 300px;
    position: relative;
    animation: mymove 5s infinite;
  }
  .cardbox {
  box-sizing: border-box;
  display: block;
  margin-block-start: 1em;
  margin-block-end: 1em;
  margin-inline-start: 0px;
  margin-inline-end: 0px;
}
.boldtext {
  font-family: "BT Mono bold" !important;
  font-size: 50px;

}
.boldtextfont  {
  font-family: "BT Mono bold" !important;
  font-size: 100px;
}
.boldrs {
  font-family: "BT Mono bold" !important;
  font-size: 30px;
}
.icon {
  width: 56px;
  height: 56px;
  border-radius: 7px;
  background: #04c9b7;
  text-align: center;
  margin-left: 24px;
}
.icons {
  width: 56px;
  height: 56px;
  border-radius: 7px;
  background: #04c9b7;
  text-align: center;
  margin-left: 50px;
}
  
  @keyframes mymove {
    0% {left: 0px;top:0px}
    50% {left: 0px;top:60px;}
    100% {left: 0px;top:0px}
  }
 </style>
</head>
<body>
  <div style="background-color: #1F2641;height: 2400px;" >
  <!-- NavBar Start-->
    <nav style="background-color: #1f2641 !important;">
        <div class="nav-wrapper container" >
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo base_url()."/login"?>"class="btn  red lighten-1">Login</a></li>
            <li><a href="<?php echo base_url()."/SignUp"?>"class="btn  red lighten-1">SignUp</a></li>
          </ul>
        </div>
      </nav>
      <!-- NavBar End-->

    <br></br>
    <br></br>

    
    <div class="row container">
    <div class="col s6">
      <div >
        <div class="card-content white-text">
          <h1 style="font-family: BT Mono bold">Start BitCoin Mining Now </h1>
        </div>
        
        <h4 class="white-text" style="font-family: BT Mono bold;font-size: 40px;">
        200 GH/s Startup Bonus
        </h4>
        <div class="white-text">
        Make profit along with the biggest mining company that is engaged in the industrial bitcoin mining through the modified ASIC-devices!
        </div>
        <br></br>
        <div>
        <button class="btn-large red lighten-1 col s5">Get 200 GH/S Bonus </button>
        </div>
        </div>
        
      
  </div>
  <div class="col s6">
          <img src="<?php echo base_url()."/upload/Image.png"?>" >
        </div>
        </div>
        <br/>
        <div class="center-align">
          <h4 class="white-text boldtext">
            Mining Start Immediately after payment
          </h4>
        </div>
        <div class="row">
    <div class="col s3">
      <div class="card blue-grey" style="background-color: #1f2641 !important;" >
          <h1 class="boldtextfont card-title center-align  light-blue-text ">Starter</h1>
          <h1 class="center-align white-text ">1% Daily</h1>
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
          <button class="btn  red lighten-1">Invest Now</button>
        </div>
        </div>
        </div>
        <div class="col s3">
      <div class="card blue-grey " style="background-color: #1f2641 !important;">
          <h1 class="boldtextfont card-title center-align  light-blue-text ">Business</h1>
          <h1 class="center-align white-text ">1.4% Daily</h1>
          <p class="cardbox container white-text">Mini Purchase
          <span class="right white-text">5000 GH/S</span></p>
          <p class="cardbox container white-text">Max Purchase
          <span class="right white-text">24999 GH/S</span></p>
          <p class="cardbox container white-text">Mini Payout
          <span class="right white-text">0.00005BTC GH/S</span></p>
          <p class="cardbox container white-text">Maintaiance fee
          <span class="right white-text">included</span></p>
          <p class="cardbox container white-text">contract for
          <span class="right white-text">12 month</span></p>
          
          <div class="card-action">
          <button class="btn  red lighten-1">Invest Now</button>
        </div>
        </div>
    </div>
    <div class="col s3">
      <div class="card blue-grey "style="background-color: #1f2641 !important;">
          <h1 class=" card-title center-align light-blue-text " style="font-family: BT Mono bold !important;
          font-size: 30px;">Premium</h1>
          <h1 class="center-align white-text ">1.6% Daily</h1>
          <p class="container white-text">Mini Purchase
          <span class="right white-text">24999 GH/S</span></p>
          <p class="cardbox container white-text">Max Purchase
          <span class="right white-text">249999 GH/S</span></p>
          <p class="cardbox container white-text">Mini Payout
          <span class="right white-text">0.00005BTCGH/S</span></p>
          <p class="cardbox container white-text">Maintaiance fee
          <span class="right white-text">included</span></p>
          <p class="cardbox container white-text">contract for
          <span class="right white-text">12 month</span></p>
          
          <div class="card-action">
          <button class="btn  red lighten-1">Invest Now</button>
        </div>
        </div>
    </div>
    <div class="col s3">
      <div class="card blue-grey "style="background-color: #1f2641 !important;">
          <h1 class="boldtextfont card-title center-align  light-blue-text ">Gold</h1>
          <h1 class="center-align white-text ">3% Daily</h1>
          <p class="cardbox container white-text">Mini Purchase
          <span class="right white-text">249999 GH/S</span></p>
          <p class="cardbox container white-text">Max Purchase
          <span class="right white-text">5000000 GH/S</span></p>
          <p class="cardbox container white-text">Mini Payout
          <span class="right white-text">0.00005BTC GH/S</span></p>
          <p class="cardbox container white-text">Maintaiance fee
          <span class="right white-text">included</span></p>
          <p class="cardbox container white-text">contract for
          <span class="right white-text">12 month</span></p>
          
          <div class="card-action">
          <button class="btn  red lighten-1">Invest Now</button>
        </div>
        </div>
    </div>
  </div>
  <br/>
  <br/>
  <div class="row container">
    <div class="col s6">
        <div class="card-content white-text">
          <span class="card-title "style="font-family: BT Mono bold !important;
          font-size: 30px;">ABOUT BUGAMINING</span>
          <p style="font-family: BT Mono bold !important;
          font-size: 20px;opacity: 0.5;">The story of Buga Mining started at the end of 2019. Our founders got to know each other by using the same platform for buying and selling Bitcoins. They were fascinated by the technology and wanted to build their own farm, only to realize all their friends wanted to participate as well.
            They came up with the idea of mining as a service and built the first mining farm in Eastern Europe. Since our founding, we have grown tremendously and a lot has happened, but one thing remains constant: We are all strong believers in the future of digital currencies and we love being part of this growing community.</p>
      </div>
    </div>
    <div class="col s6">
      <img src="<?php echo base_url()."/upload/1.png"?>" >
    </div>
  </div>
  <br/>
  <br/>
  <h2 class="center-align white-text" style="font-family: BT Mono bold !important;">Referral commissions from 5% up to 20%</h2>
  <br/>
  <div class="row container">
    <div class="col s6">
        <div class="card-content white-text">
          <li class="card-title "style="font-family: BT Mono bold !important;
          font-size: 25px;">5% FIRST LEVEL(1-30 referrals)</li>
          <br/>
          <br/>
          <li class="card-title "style="font-family: BT Mono bold !important;
          font-size: 25px;">8% SECOND LEVEL(30-45 referrals)</span>
          <br/>
          <br/>
          <li class="card-title "style="font-family: BT Mono bold !important;
          font-size: 25px;">10% THIRD LEVEL(45-60 referrals)</li>
          <br/>
          <br/>
          <li class="card-title "style="font-family: BT Mono bold !important;
          font-size: 25px;">15% FOURTH LEVEL(60-80 referrals)</li>
          <br/>
          <br/>
          <li class="card-title "style="font-family: BT Mono bold !important;
          font-size: 20px;">20% REPRESENTATIVE PARTNERSHIP</li>
      </div>
    </div>
    <div class="col s6">
      <img class="img1"src="<?php echo base_url()."/upload/2.png"?>" />
    </div>
  </div>
</div>


</body>
</html>