<?php
// Include the header
include 'header.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styless.css" type="text/css" rel="stylesheet">
    <title>CIS Gym's - Registration Form</title>
</head>
<body>
    <div class="container">
        <h1>CIS Gym - Registration Form</h1>

        <form action="process_register.php" method="post">
            <table style="border: 0px;">
                <tr style="background: #cccccc;">
                    <td style="width: 150px; text-align: center;">Field</td>
                    <td style="width: 300px; text-align: center;">Information</td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type="text" name="firstname" size="30" maxlength="50" required /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type="text" name="lastname" size="30" maxlength="50" required /></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" size="30" maxlength="50" required /></td>
                </tr>
                <tr>
                    <td>Phone Number</td>
                    <td><input type="tel" name="phone" size="30" maxlength="15" required /></td>
                </tr>
                <tr>
                    <td>Preferred Membership Type</td>
                    <td>
                        <select name="membership" required>
                            <option value="">Select Membership</option>
                            <option value="monthly">Monthly</option>
                            <option value="quarterly">Quarterly</option>
                            <option value="yearly">Yearly</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Preferred Workout Time</td>
                    <td>
                        <select name="workouttime" required>
                            <option value="">Select Workout Time</option>
                            <option value="morning">Morning</option>
                            <option value="afternoon">Afternoon</option>
                            <option value="evening">Evening</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Location</td>
                    <td>
                        <select name="location" required>
                            <option value="">Select Location</option>
                            <option value="Springfield">BXR</option>
                            <option value="Shelbyville">Springs</option>
                            <option value="Capital City">Zenergy</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Billing Address</td>
                    <td><input type="text" name="address" size="50" maxlength="100" required /></td>
                </tr>    
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <input type="submit" value="Register" />
                    </td>
                </tr>
            </table>
        </form>
    </div>

<?php
// Include the footer
include 'footer.php';
?>
</body>
</html>
