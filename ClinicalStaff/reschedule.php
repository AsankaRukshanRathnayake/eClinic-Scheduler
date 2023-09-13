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
                <h3>Old Schedule</h3>
                <table>
                    <tr>
                        <td>Date</td>
                        <td>01 Sep, 2023</td>
                    </tr>
                    <tr>
                        <td>Time</td>
                        <td>09.00am</td>
                    </tr>
                    <tr>
                        <td>Room No</td>
                        <td>56</td>
                    </tr>
                    <tr>
                        <td>Chief Doctor</td>
                        <td>Mr. Gamage</td>
                    </tr>
                    <tr>
                        <td>Maximum available appointments</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>No of Shceduled patients</td>
                        <td>23</td>
                    </tr>

                </table>
            </div>
            <form action="home.php" method="POST">
                <input type="hidden" name="clinicID">

                <label for="newdate">New Date</label>
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
                <input type="submit" name="submit" id="" value="Reschedule">
            </form>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>