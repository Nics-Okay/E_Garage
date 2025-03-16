<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

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
    height: 14px;
  }
  
  .search-bar {
    width: 300px;
    height: 30px; 
    border: 1px solid black;
    border-radius: 20px;
    display: flex;
    align-items: center;
    padding: 0 10px;
    box-sizing: border-box;
    margin-left: 25px;
    background-color: lightgrey;
    margin-bottom: 40px;
  }

  .search-bar input[type="text"] {
    flex-grow: 1;
    border: none;
    outline: none;
    padding: 0 3px;
    font-size: 16px;
    background-color: lightgray;
  }

  .search-bar button {
    background: none;
    border: none;
    cursor: pointer;
    padding: 0;
  }

  .search-bar button img {
    width: 16px;
    height: 16px;
  }
  
  .completed-job {
    background-color: lightgray;
    height: 110px;
    border: 1px solid black;
    margin: 0px 30px 6px 30px;
  }
 
  .completed-job .details-text {
     display: flex;
     line-height: 6px;
     color: darkblue;
  
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
     
    <div class="search-bar">
  <input type="text">
  <button>
    <img src="searchicon.png" alt="Search">
  </button>
</div>
  
  <div class="completed-job">
                <div class="details-text">
                    <div style="padding-left: 30px;">
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="padding-left: 55px">
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
  
               <div class="completed-job">
                <div class="details-text">
                    <div style="padding-left: 30px;">
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="padding-left: 55px">
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
            
              <div class="completed-job">
                <div class="details-text">
                    <div style="padding-left: 30px;">
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="padding-left: 55px">
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
             
               <div class="completed-job">
                <div class="details-text">
                    <div style="padding-left: 30px;">
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="padding-left: 55px">
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
            
              <div class="completed-job">
                <div class="details-text">
                    <div style="padding-left: 30px;">
                        <p>Name:</p>
                        <p>Contact Number:</p>
                        <p>Pickup Location:</p>
                        <p>Dropoff Location:</p>
                    </div>
                    <div style="padding-left: 55px">
                        <p>Plate Number:</p>
                        <p>Car Model:</p>
                    </div>
                </div>
            </div>
            
             
            
</body>
</html>
