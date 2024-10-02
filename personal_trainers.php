<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personal trainers</title>
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
        <h1>Welcome to Our Personal Trainers Page</h1>
        <p>You can find a trainer at any of the 3 locations below!</p>
        <p>Cant find a trainer? We'll send them to you! (by plane)</p>
        
        <div class="gallery">
            <!-- Add your images here -->
            <img src="thanos.jpg" alt="PT 1" />
            <img src="hulk.jpg" alt="PT 2" />
            <img src="zangief.gif" alt="PT 3" />
            <!-- More images can be added as needed -->
        </div>

        <h2>Current Roster</h2>
        <ul>
            <li>Personal Trainer 1 - Thanos: Has many lifting feats! Will get you as big as possible</li>
            <li>Personal Trainer 2 - Hulk: Will help you channel your anger into lifting heavy!</li>
            <li>Personal Trainer 3 - Zangief: Specializes in helping you train your Muscle Spirit!</li>
            <!-- More showings can be added -->
        </ul>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>