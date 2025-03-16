<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

 <style>
   
   body {
    color: darkblue;
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
    height: 18px;
  }
  .customer-driver {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 50px
  }
  
  .customer-driver a {
    text-decoration: none;
    font-weight: bold;
    
  }
  
  .customer-driver .drivers-infoo {
    border-bottom: 2px solid red;
    padding: 0px 25px;
  }
  .update-status {
    text-align: center;
    margin-top: 26px;
    font-weight: bold;
  }
  
  .status {
    text-align: center;
  }
  .status-button button {
   font-weight: bold;
   width: 320px;
   padding: 8px;
   margin: 3px;
 
  }
  
  .status .arrived.active {
    background-color: red;
  }
  
  .upload-photo {
    font-weight: bold;
    text-align: center;
    margin-top: 30px;
  }
 
  .before-towing {
    font-weight: bold;
    font-size: 14px;
    margin: 10px 0px 0px 45px;
    
  }
 
  .current-state {
    text-align: center ;  
    margin-top: 8px;
  }
  
  .input-image {
    background-color: lightgrey;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 1fr 1fr;
    margin: 18px;
  }
 
  .input-image div {
   border: 1px solid black;
   height: 50px;
   text-align: center;
   padding-top: 30px;
   color: #ACADBC;
  }
 
 .addnote {
   text-align: center;
   margin-right: 160px;
   margin-bottom: 5px;
 }
 
 .note-container {
  background-color: lightgray;
  padding: 30px;
  margin: 0px 30px;
 }
 
 .dropoff-towing {
    font-weight: bold;
    font-size: 14px;
    margin: 30px 0px 0px 35px;
 }
 
 .dropoff-state {
    text-align: center ;  
    margin-top: 8px;
 }
 
 .input-image2 {
     background-color: lightgrey;
     display: grid;
     grid-template-columns: 1fr 1fr;
     grid-template-rows: 1fr 1fr;
     margin: 18px;
 }
 
 .input-image2 div {
   border: 1px solid black;
   height: 50px;
   text-align: center;
   padding-top: 30px;
   color: #ACADBC;
 }
 
 .completion-button {
   text-align: center;
   padding: 30px 30px 30px 30px;
 }
 
 .completion-button button {
   padding: 9px 45px;
   font-weight: bold;
   font-size: 16px;
   background-color: #E80000;
   color: white;
   border: none;
   
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
       <p><a href="">Customer Info</a></p>
       <p class="drivers-infoo"><a href="">Driver's Update</a></p>
     </div>
     </div> 
     
     <div class="update-status">Update Status</div>
     
     <div class="status">
       <div class=status-button>
       <div><button style="margin-top: 20px">On the Way</button></div>
       <div><button style="background-color: red; color: white;">Arrived at Pickup</button></div>
       <div><button>Towing in Process</button></div>
       <div><button>Vehicle Dropped Off</button></div>
       <div><button>Completed</button></div>
       </div>
      </div>
     
      <div class="upload-photo">Upload Photo</div>
      
      <div class="before-towing">Before Towing</div>
      
      <div class="current-state">Upload photo of vehicle current state</div>
      
      <div class="input-image">
        <div class="box-1">+</div>
        <div class="box-2">+</div>
        <div class="box-3">+</div>
        <div class="box-4">+</div>
      </div>
      
      <div class="addnote">add note:</div>
      
      <div class="note-container">
        
      </div>
      
      <div class="dropoff-towing">At Drop-off</div>
      
      <div class="dropoff-state">Upload photo of vehicle at the drop-off location</div>
      
      <div class="input-image2">
        <div class="box-1">+</div>
        <div class="box-2">+</div>
        <div class="box-3">+</div>
        <div class="box-4">+</div>
      </div>
      
      <div class="addnote">add note:</div>
      
      <div class="note-container"></div>
      
      <div class="completion-button">
        <button>CONFIRM COMPLETION</button></div>
        
        
</body>

</html>
