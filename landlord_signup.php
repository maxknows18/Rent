<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mulenga Homes</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: url('house.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .container {
            background: rgba(0, 0, 0, 0.8);
            padding: 20px;
            border-radius: 10px;
            max-width: 600px;
            margin: 50px auto;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 30px;
            padding: 10px 15px;
        }

        textarea.form-control {
            border-radius: 15px;
        }

        .btn {
            border-radius: 30px;
            padding: 10px 20px;
        }

        #map {
            border-radius: 10px;
        }

        .form-check-label {
            color: #ddd;
        }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&libraries=places"></script>
    <script>
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -1.286389, lng: 36.817223}, // Default to Nairobi
                zoom: 13
            });

            var marker = new google.maps.Marker({
                position: map.getCenter(),
                map: map,
                draggable: true
            });

            marker.addListener('dragend', function(event) {
                document.getElementById('property_location').value = event.latLng.lat() + ',' + event.latLng.lng();
            });
        }
    </script>
</head>
<body onload="initMap()">
    <div class="container">
        <h2 class="text-center">Landlord Signup</h2>
        <form action="process_landlord_signup.php" method="POST">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="num_properties">Number of Properties Owned/Managed:</label>
                <input type="number" id="num_properties" name="num_properties" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="property_location">Location of Properties (Use Map to Pin):</label>
                <input type="text" id="property_location" name="property_location" class="form-control" placeholder="Latitude, Longitude" required readonly>
                <div id="map" style="width: 100%; height: 300px; margin-top: 10px;"></div>
            </div>
            <div class="form-check">
                <input type="checkbox" id="terms" name="terms" class="form-check-input" required>
                <label for="terms" class="form-check-label">I agree to the Terms and Conditions of Use</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Sign Up</button>
        </form>
    </div>
</body>
</html>
