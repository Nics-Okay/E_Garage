<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/driver/driverJobs.css') }}">
</head>
<body>
<div class="main-container">
  <div class="navbar">
    <div class="left-corner">
      <img src="{{ asset('images/hamburger.png') }}">
      <img src="{{ asset('images/logopic.png') }}">
    </div>
    <div class="right-corner">
      <img src="{{ asset('images/notification.png') }}">
      <img src="{{ asset('images/profile.png') }}" alt="">
      <div class="namestyle" style="color: white">
        <span>
          <b>Name</b>
        </span><br>
        <span>Driver</span>
      </div>
    </div>
  </div>
  <div class="main-content">
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
        <img src="{{ asset('images/maps.jpg') }}">
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
    </div>
  </div>
</div>  
</body>
</html>