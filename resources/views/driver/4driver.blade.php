<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
  
  .edit-profile {
    text-align: right;
    padding: 18px;
   
  }
  .edit-profile a{
    color: darkblue;
    text-decoration: none;
  }
  
  .profile-picture {
    padding: 30px;
    text-align: center;
    margin: 0 115px;
    
    border-radius: 1000px;
    background-color: lightgray;
  }
  
  .profile-picture img {
    height: 70px;
    overflow: hidden;
  }
  
  .profile-name {
    text-align: center;
    line-height: 10px;
  }
  
  .profile-name p{
    font-size: 18px;
  }
  
  .contact-num {
    font-weight: bold;
    padding-left: 30px;
    padding-top: 10px;
    padding-bottom: 50px;
    
  }
  
  .driver-docu {
    padding-left: 30px;
    font-weight: bold;
  }
  
  .driver-id {
    text-align: center;
    margin-top: 10px;
  }
  
  .licenseid {
    display: flex;
    justify-content: center;
    font-weight: bold;
    margin-bottom: 3px;
  }
  .licenseid p {
    padding: 0px 70px;
    margin-bottom: 0px;
  }
  
  .photoo {
     display: grid;
     grid-template-columns: 1fr 1fr;
     grid-gap: 8px;
     margin-top: 1px;
     margin: 0 10px;
  }
  .photoo div {
    background-color: lightgrey;
    border: 1px solid black;
    padding-bottom: 170px
  }
  
  .photoo img {
    height: 20px;
  }
    
  .logout {
    text-align: center;
    padding: 30px;
  }
  
  .logout button {
    padding: 12px 85px;
    background-color: #ED0000;
    color: white;
    border: none;
    font-weight: bold;
    font-size: 18px;
  }
  
</style>


</head>
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
   
   <div class="edit-profile">
     <a href="">Edit profile</a>
   </div>
  
   <div class="profile-picture">
     <img src="profile.png">
   </div>
   
     <div class="profile-name">
       <h1>Name</h1>
       <p>Driver</p>
     </div>
     
     <div class="contact-num">Contact Number:</div>
     
     <div class="driver-docu">Driver's Document:</div>
     <div class="driver-id">Upload license and one valid ID</div>
  
      <div class="licenseid">
        <p style="padding-left: 40px;">License</p>
        <p style="padding-right: 0">ID</p>
        
      </div>
      
      <div class="photoo">
         <div class="box1"></div>
         <div class="box2"></div>
       </div>
      
      <div class="logout">
         <button>Log Out</button>
      </div>
      
     
  
  
</body>
</html>
