<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styless.css"> <!-- Optional: link to your stylesheet -->
    <style>
        /* Add custom CSS for the gallery */
        .gallery img {
            width: 200px; /* Set your desired width */
            height: 300px; /* Set your desired height */
            object-fit: cover; /* Ensures the images maintain aspect ratio */
            margin: 10px; /* Optional: Add some margin between images */
        }
        .container {
            text-align: center; /* Optional: Center the content */
        }
        .gallery {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Gym Locations Page</h1>
        <p>You can find us at the 3 locations below!</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="bxr.jpg" alt="gym 1" />
            <img src="zenergy.jpg" alt="gym 2" />
            <img src="banff.jpg" alt="gym 3" />
            <!-- More images can be added as needed -->
        </div>

        <h2>Current Gym Locations</h2>
        <ul>
            <li>Location 1 - (BXR) 24 Paddington St, London W1U 5QY, United Kingdom</li>
            <li>Location 2 - (Zenergy) 245 Raven Rd, Ketchum, ID 83340, Idaho</li>
            <li>Location 3 - (Fairmont Baff Springs) 405 Spray Ave, Banff, AB T1L 1J4, Canada</li>
            <!-- More showings can be added -->
        </ul>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>