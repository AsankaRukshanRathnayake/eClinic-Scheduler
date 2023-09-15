<!DOCTYPE html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="sidenavbar">
            <?php include 'navbar.php'; ?>
        </div>

        <div class="main">
            <div class="topnavbar">
                Get an appointment for a new clinic?<br>
                Click below to contact a doctor via video call<br>
                <button onclick="redirect('videocall.php')">Video Call</button><br>
                &nbsp; &nbsp;or<br>
                Already have your personal doctors' recommedation? <br>Upload it here
                <form action="other/pending.php">
                    <input type="file" name="recommendation" accept="image/jpg, image/jpeg, image/png" required>
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