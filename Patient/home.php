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
                <p>Get an appointment for a new clinic?</p>
                <p>Click below to contact a doctor via video call</p>
                <button onclick="redirect('videocall.php')">Video Call</button>
            
                <p>or</p>
            
                <p>Already have your personal doctors' recommedation? <br>Upload it here</p>
                <form action="other/pending.php">
                    <input type="file" name="recommendation" accept="image/jpg, image/jpeg, image/png">
                    <input type="submit" name="upload" value="UPLOAD">
                </form>

                <form action="">
                    <input type="search" placeholder="search">
                </form>
            </div>

            <table>
                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dental Clinic</td>
                    <td><button>Cancel</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>

                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dental Clinic</td>
                    <td><button>Cancel</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>

                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dental Clinic</td>
                    <td><button>Cancel</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>
            </table>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>