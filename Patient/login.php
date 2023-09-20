<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body style="background-image: url('../images/background.jpg');">
        <div class="login">
            <form action="home.php" method="POST" class="">
                <h1>Login</h1>

                <label for="patientID">PatientID</label><br>
                <input type="text" name="patientID" placeholder="1234-5678-9123" required><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" placeholder="xxxxxxxx" required><br><br>

                <input type="submit" value="Submit" class="submit">
            </form>
        </div>
    </body>
</html>