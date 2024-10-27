<?php
  require_once("file_exceptions.php");

  // create short variable names
  $firstname = htmlspecialchars($_POST['firstname']);                                           
  $lastname = htmlspecialchars($_POST['lastname']);                                             
  $email = htmlspecialchars($_POST['email']);                                                 
  $phone = htmlspecialchars($_POST['phone']);                                                  
  $membership = htmlspecialchars($_POST['membership']);                                         
  $workouttime = htmlspecialchars($_POST['workouttime']);                                        
  $location = htmlspecialchars($_POST['location']);  // new location field                                 
  $address = preg_replace('/\t|\R/', ' ', $_POST['address']);                                   
  $document_root = $_SERVER['DOCUMENT_ROOT'];                                   
  $date = date('H:i, jS F Y'); 

?>
<!DOCTYPE html>
<html>
  <head>
    <title>CIS Gym - Registration Confirmation</title>
    <style>
        .success-message {
            text-align: center;
            font-size: 24px;
            color: green;
            margin-top: 20px;
        }
        .gif-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
  </head>
  <body>
    <h1 style="text-align: center;">CIS Gym</h1>
    <h2 style="text-align: center;">Registration Confirmation</h2>
    
    <?php
      // Process the registration details
      echo "<div class='success-message'><p>Congratulations, you have successfully registered!</p></div>";

      // Display success gif
      echo "<div class='gif-container'><img src='success.gif' alt='Success GIF' width='300' /></div>";  // Make sure to have the gif available

      // Display registration details
      echo "<p style='text-align: center;'>Here are your registration details:</p>";
      echo "<p style='text-align: center;'>Name: " . $firstname . " " . $lastname . "<br />";
      echo "Email: " . $email . "<br />";
      echo "Phone: " . $phone . "<br />";
      echo "Membership Type: " . $membership . "<br />";
      echo "Preferred Workout Time: " . $workouttime . "<br />";
      echo "Location: " . $location . "<br />";
      echo "Address: " . htmlspecialchars($address) . "</p>";

      // Save registration data to a file
      $outputstring = $date . "\t" . $firstname . " " . $lastname . "\t" . $email . "\t"
                      . $phone . "\t" . $membership . "\t" . $workouttime . "\t" 
                      . $location . "\t"  // Add location to file
                      . $address . "\n";

      // Try to write the registration data to a file
      try {
        if (!($fp = @fopen("$document_root/../registrations/registrations.txt", 'ab'))) {
            throw new fileOpenException();
        }
      
        if (!flock($fp, LOCK_EX)) {
           throw new fileLockException();
        }
      
        if (!fwrite($fp, $outputstring, strlen($outputstring))) {
           throw new fileWriteException();
        }

        flock($fp, LOCK_UN);
        fclose($fp);
        echo "<p style='text-align: center;'>Your registration has been saved successfully.</p>";
      }
      catch (fileOpenException $foe) {
         echo "<p style='color: red; text-align: center;'><strong>Registration file could not be opened.<br/>
               Please contact our webmaster for help.</strong></p>";
      }
      catch (Exception $e) {
         echo "<p style='color: red; text-align: center;'><strong>Your registration could not be processed at this time.<br/>
               Please try again later.</strong></p>";
      }
    ?>
  </body>
</html>
