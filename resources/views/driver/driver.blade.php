<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="{{ asset('css/driver/driverHome.css') }}">
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
      <div class="container-service">
        <div class="details">
          <div>
            <strong>Name:</strong>
          </div>
          <div>
            <strong>Contact Number:</strong>
          </div>
          <div>
            <strong>Plate Number:</strong>
          </div>
          <div>
            <strong>Car Model:</strong>
          </div>
          <div>
            <strong>Pickup Location:</strong>
          </div>
          <div>
            <strong></strong>
          </div>
          <div>
            <strong>Dropoff Location:</strong>
          </div>
          <a href="#"> View More</a>
        </div>
      </div>

      <div class="ongoing-container">
        <h3>Ongoing Service</h3>
        <div class="details-name">
          <div>
            <strong>Name:</strong>
          </div>
          <div>
            <strong>Contact Number:</strong>
          </div>
          <div>
            <strong>Plate Number:</strong>
          </div>
          <div>
            <strong>Car Model:</strong>
          </div>
          <div>
            <strong>Pickup Location:</strong>
          </div>
          <div>
            <strong></strong>
          </div>
          <div>
            <strong>Dropoff Location:</strong>
          </div>
        </div>
        
        <div class="image-service">
          <img src="{{ asset('images/maps.jpg') }}">
          <div class="viewmore-button">
            <button>View More</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>