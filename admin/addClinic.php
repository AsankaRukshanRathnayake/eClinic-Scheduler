<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="sidenavbar">
            <?php include 'navbar.php'; ?>
        </div>

        <div class="main">
            <div class="topnavbar">
            </div>
            <form action="home.php" method="POST">
                <input type="hidden" name="clinicID">

                <label for="newvenue">New Clinic</label>
                <input type="text" name="newvenue"><br><br>

                <label for="newdate">Date</label>
                <input type="date" name="newdate"><br><br>

                <label for="newtime">Time</label>
                <input type="time" name="newtime" value="09:00"><br><br>

                <label for="newvenue">Venue</label>
                <input type="text" name="newvenue"><br><br>

                <label for="chiefdoctor">Doctor</label>
                <select name="chiefdoctor" id="">
                    <option value="Mr. Perera">Mr. Perera</option>
                    <option value="Mr. Gamage">Mr. Gamage</option>
                    <option value="Mr. Rahman">Mr. Rahman</option>
                </select><br><br>

                <input type="reset" value="reset">
                <button onclick="redirect('home.php')">Cancel</button>
                <input type="submit" name="submit" id="" value="Add">
            </form>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>