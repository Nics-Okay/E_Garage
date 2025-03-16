<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
  <style>
  body {
    display: grid;
    justify-content: center;
    align-items: center;
    margin: 0;
    padding: 0;
    box-sizing : border-box;
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
  
  .container-ongoing {
    margin: 12px;
    height: 350px;
    background-color: #e0e0e0;
  }
  .container-ongoing h4 {
    padding-top: 8px;
    border-bottom: 1px solid black;
    text-align: center;
    margin: 0px 40px;
    padding-bottom: 5px;
  }
    
  .current-job-details {
    line-height: 25px;
    margin-top: 10px;
    margin-left: 20px;
    
  } 
 
  .imagelang {
    display: flex;
    justify-content: center;
  }
  .imagelang img {
    height: 120px;
    margin-top: 20px;
  }
  
  .imagelang-button {
    display: flex;
    justify-content: flex-end;
    
  }
  
 .imagelang-button button{
   font-size: 14px;
   padding: 7px 40px;
   margin-right: 8px;
   background: #FB0000;
   color: white;
   font-weight: bold;
   border: none;
   
 }
  .job-list-container {
    background-color: #e0e0e0;
    margin-top: 20px;
    height: 340px;
  }

  .completed-job {
            height: 85px;
            border: 2px solid black;
            margin: 17px;
            padding: 12px;
            line-height: 6px;
       
  }
 
  .completed-job .details-text {
            display: flex;
            justify-content: center;
            gap: 40px
        }
 
  
  </style>
  
  
  
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
  
  <div class="container-ongoing">
    <div class="current-job">
    <h4>Current Job</h4>
    </div>
    <div class="current-job-details">
      <div>Name:</div>
      <div>Contact Number:</div>
      <div>Plate Number:</div>
      <div>Car Model:</div>
      <div>Pickup Location:</div>
      <div>Dropoff Location:</div>
    </div>
    
    <div class="imagelang">
      <img src="logopic.png">
    </div>
    <div style="margin-top: 6px;"class="imagelang-button">
      <button>View More</button>
    </div>
    
    <div class="job-list-container">
      <h4>Complete Job List</h4>

    <div class="completed-job">
                <div class="details-text">
                    <div>
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div>
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
        <div class="completed-job">
                <div class="details-text">
                    <div>
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div>
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
    <div class="imagelang-button">
      <button>View More</button>
    </div>
  </div>
  
</body>
</html>
