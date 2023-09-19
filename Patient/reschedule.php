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

            <div class="">
                <h3>Dental Clinic</h3>
                <div class="row">
                    <div class="date">01<br>Sep</div>
                    <div class="time">9.00am</div>
                    <div class="clinicname">Full</div>
                    <button class="button4" onclick="redirect('makeappointment.php')">Make Appointment</button>
                </div>

                <div class="row">
                    <div class="date">01<br>Sep</div>
                    <div class="time">9.00am</div>
                    <div class="clinicname">Full</div>
                    <button class="button4" onclick="redirect('makeappointment.php')">Make Appointment</button>
                </div>

                <div class="row">
                    <div class="date">01<br>Sep</div>
                    <div class="time">9.00am</div>
                    <div class="clinicname">Full</div>
                    <button class="button4" onclick="redirect('makeappointment.php')">Make Appointment</button>
                </div>

                <div class="row">
                    <div class="date">01<br>Sep</div>
                    <div class="time">9.00am</div>
                    <div class="clinicname">Full</div>
                    <button class="button4" onclick="redirect('makeappointment.php')">Make Appointment</button>
                </div>
            </div>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>