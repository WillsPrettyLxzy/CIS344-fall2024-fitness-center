<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workouts</title>
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
        <h1>Welcome to Our Workouts 101 Page</h1>
        <p>You can find many workouts that you can add to your regiment!</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="curls.gif" alt="" />
            <img src="pushups.gif" alt=" " />
            <img src="pullups.gif" alt="" />
            <img src="deadlifts.gif" alt="" />
            <img src="situps.gif" alt="" />
            <img src="squats.gif" alt="" />
            <!-- More images can be added as needed -->
        </div>

        <h2>Best Standard Workouts!</h2>
        <ul>
            <li>Workout 1 - Bicep Curls: Most standarized bicep workout to grow those arms!</li>
            <li>Workout 2 - Pushups: Good workout for Core, upper body strength, and a dedicated chest workout!</li>
            <li>Workout 3 - Pullups: Another Great upper body exercise, with the benefit of growing your back!</li>
            <li>Workout 4 - Deadlifts: Has many lifting benefits! Using your full body (core), decent leg workout, and most of all back!</li>
            <li>Workout 5 - Situps: Dedicated Core Exercise! Need to grow those abs!</li>
            <li>Workout 6 - Squats: Cant forget legs! Massively benefit your leg growth doing squats!</li>
            <!-- More showings can be added -->
        </ul>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>