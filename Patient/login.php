<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <form action="home.php" method="POST">
            <h1>Login</h1>

            <label for="patientID">PatientID</label>
            <input type="text" name="patientID" placeholder="1234-5678-9123" required>

            <label for="password">Password</label>
            <input type="password" name="password" placeholder="xxxxxxxx" required>

            <input type="submit" value="Submit">
        </form>
    </body>
</html>