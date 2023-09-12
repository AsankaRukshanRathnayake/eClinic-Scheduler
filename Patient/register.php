<?php
    $patientID = $mobileNo = $email = $username = $password =$confirmpassword = $newMobile = '';

    $step = 1;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $step = isset($_POST['step']) ? intval($_POST['step']) : 1;

        if ($step == 1) {
            $patientID = $_POST['patientID'];
            $mobileNo = $_POST['mobile'];
            $step = 2;
        } elseif ($step == 2) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmpassword = $_POST['confirmpassword'];

            if ($password==$confirmpassword)
                $step = 3; 
            else{
                $username = $password = $confirmpassword = '';
                $step = 2;
            }
                
        } elseif ($step == 3) {
            $newMobile = $_POST['newMobile'];
            $email = $_POST['email'];

        // todo : enter data into database

        header('Location:../index.php');

        //todo : success message
        echo "<h2>Registration Successful!</h2>";
        echo "<p>Thank you, $patientID, for registering.</p>";

        //$patientID = $mobileNo = $email = $username = $password = $newMobile = '';
    }
}
?>

<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
        <title>User Registration</title>
    </head>

    <body>
        <?php if ($step == 1): ?>
            <form method="POST" class="patientform">
                <h1>Step 1</h1>
                <input type="hidden" name="step" value="1">
                
                <label for="patientID">Patient ID:</label><br>
                <input type="text" id="patientID" name="patientID" value="<?php echo $patientID; ?>" placeholder="1234-5678-9123" required><br><br>

                <label for="mobile">Mobile Number:</label><br>
                <input type="text" id="mobile" name="mobile" value="<?php echo $mobileNo; ?>" placeholder="Enter the mobile number you are registered with to the hospital" required><br><br>

                <button type="submit">Next</button>
            </form>
    
        <?php elseif ($step == 2): ?>  
            <form method="POST"  class="patientform">
                <h1>Step 2</h1>

                <input type="hidden" name="step" value="2">
            
                <label for="username">Username:</label><br>
                <input type="text" id="username" name="username" value="<?php echo $username; ?>" required><br><br>

                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" value="<?php echo $password; ?>" required><br><br>

                <label for="confirmpassword">Confirm Password:</label><br>
                <input type="confirmpassword" id="confirmpassword" name="confirmpassword" value="<?php echo $confirmpassword; ?>" required><br><br>

                <button type="submit">Next</button>
            </form>
    
        <?php elseif ($step == 3): ?>    
            <form method="POST" class="patientform">
                <h1>Step 3<br>Add New Mobile / <br>Add Email</h1>
                <input type="hidden" name="step" value="3">
            
                <label for="newMobile">New Mobile Number:</label><br>
                <input type="text" id="newMobile" name="newMobile" value="<?php echo $mobileNo; ?>" placeholder="If you want to use a new mobile number, Enter it here"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>"><br><br>

                <button type="submit">Complete Registration</button>
            </form>
        <?php endif; ?>
    </body>
</html>