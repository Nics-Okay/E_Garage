<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

 <style>
   
   body {
    display: grid;
    justify-content: center;
    align-items: center;
    margin: 0;
    padding: 0;
    box-sizing : border-box;
    color: darkblue;
  }
  .navbar {
    background-color: darkblue;
    height: 40px;
    display: flex;
    
  }
  
  .navbar .left-corner {
    width: 170px;
    display: flex;
    justify-content: left;
   
  }
  
  .left-corner img {
    height: 15px;
    margin-top: 9px;
    margin-left: 17px;
  }
  
  .left-corner .logopic {
    height: 28px;
    margin-top: 5px;
    margin-left: 19px;
    
  }
  
  .right-corner {
    width: 190px;
    display: flex;
    justify-content: right;
    align-items: center;
    text-align: center;
    font-size: 14px;
    gap: 17px
  }
  
  .right-corner span {
   margin-right: 20px;
 }
  
  .right-corner img{
    height: 19px;
    display: flex ;
    justify-content: center;
    align-items: center;
  }

  
  .header-icon img{
    height: 20px;
    margin: 8px;
  }
   
  .back-button {
    background-color: transparent;
    border: none;
    font-size: 17px;
    padding: 10px 0;
    display: flex;
    align-items: center;
    margin-left: 0;
    margin-top: 10px;
    gap: 10px
  }
   
  .back-button img {
    height: 18px;
  }
  .customer-driver {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 40px
  }
  
  .customer-driver a {
    text-decoration: none;
    font-weight: bold;
    
  }
  
  .customer-driver .customer-infoo {
    border-bottom: 2px solid red;
    padding: 0px 25px;
  }
  
  .completed-job-list {
    height: 85px;
  }
 
  .completed-job-list .details-text-list {
     display: flex;
     justify-content: center;
     line-height: 5px;
     gap: 50px
  }
  
  .image-car {
    text-align: center;
  }
  
  .image-car img {
    height: 115px;
    width: 280px;
    margin-top: 25px;
  }
  .informationn {
    margin-left: 40px;
    line-height: 30px;
  }
  
  .reason {
    text-align: center;
    margin: 10px 70px;
    border-bottom: 3px solid red;
    font-weight:bold;
 
  }
  .dropdown {
    display: flex;
    justify-content: left;
    align-items: center;
    margin: 0px 40px;
    background: lightgrey;
    font-weight:bold;
    font-size: 14px;
    padding-left: 10px;
    height: 28px;
  }
  .description {
    text-align: center;
    font-size: 11px;
    color: grey;
    margin: 5px;
  }
  .description-container {
    background-color: lightgray;
    text-align: center;
    margin: 0 40px;
    height: 50px;
  }
  
  .whentow {
    font-weight: bold;
    margin-top: 19px;
    text-align: center;
  }
  
  .check-box {
    display: flex;
    align-items: center;
    margin-left: 60px;
    margin-top: 5px;
    font-size: 14px;
    gap: 10px
  }
  
  .guhit {
    border: 1px solid red;
    margin: 10px 35px 0px;
  }
  
  .list {
    display: flex;
    justify-content: space-between;
  }
  
  .list li {
    line-height: 25px;
  }
  
  .list .pricee {
    margin-right: 40px;
    line-height: 7px;
  }
  
  .guhit2 {
    border-top: 4px solid darkblue;
    margin: 0px 30px 0px 150px;
    text-align: right;
    padding: 10px 20px;
    font-size: 22px;
    font-weight: bold;
  }
 </style>

<body>
  
  <div class="navbar">
    <div class="left-corner">
     <img src="hamburger.png">
     <img class="logopic" src="logopic.png">
    </div>
    <div class=right-corner>
      <img src="notification.png">
      <img src="profile.png" alt="">
      <div class="namestyle" style="color: white"><span><b>Name</b></span><br><span>Driver</span></div>
    </div>
   </div>
   
   <button class="back-button"><a href=""></a><img src="lessthan-button.png" alt="">Back</button>
    
   <div>
     <div class="customer-driver">
       <p class="customer-infoo"><a href="">Customer Info</a></p>
       <p><a href="">Driver's Update</a></p>
     </div>
     </div> 
   
   <div class="completed-job-list">
                <div class="details-text-list">
                    <div style="margin-left: 30px;">
                        <p>Name:</p>
                        <p>Plate Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="margin-right: 18px;">
                        <p>Contact Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
            
            <div class="image-car">
              <img src="red.car.jpg" alt="">
            </div>
            
            <div class="informationn">
              <div>Location:</div>
              <div>Distance:</div>
              <div>Estimated Time:</div>
            </div>
               
              <div class="reason">Reason For Towing</div>
              
              <div class="dropdown">chosen reason from dropdown</div>
              
              <div class="description">Description of your reason for towing</div>
              
              <div class="description-container"></div>
             
              <div class="whentow">When do you want to tow</div>
              
              <div class="check-box"><input type="checkbox">
              chosen from the three</div>
              
              <div class=guhit></div>
              
              <div class="list">
                <ul>
                  <li>Base fare (per kilometer)</li> 
                   <li>Distance</li>
                   <li>Service charge / tax</li>
                </ul>
                <div class="pricee">
                  <p style="margin-top: 20px;
                  margin-right: 27px;">Price</p>
                  <p>Price</p>
                  <p>Price</p>
                </div>
              </div>
              
              <div class="guhit2"> Php 0.00</div>
</body>
</html>
