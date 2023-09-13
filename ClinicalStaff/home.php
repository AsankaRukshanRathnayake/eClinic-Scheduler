<!DOCTYPE html>
    <head>
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/styles.css">
    </head>
    <body>
        <div class="sidenavbar">
            <?php include 'navbar.php'; ?>
        </div>

        <div class="main">
            <div class="topnavbar">
                <h1>Dental Clinic</h1>
                
                <form action="">
                    <input type="search" placeholder="search for a clinic">
                </form>
            </div>

            <table>
                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dr. Perera</td>
                    <td>23 Patients</td>
                    <td><button>Postpone</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>

                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dr. Perera</td>
                    <td>23 Patients</td>
                    <td><button>Postpone</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>

                <tr>
                    <td>01 Sep</td>
                    <td>9.00am</td>
                    <td>Dr. Perera</td>
                    <td>23 Patients</td>
                    <td><button>Postpone</button></td>
                    <td><button onclick="redirect('reschedule.php')">Reschedule</button></td>
                </tr>
            </table>
        </div>

        <script src="../js/script.js"></script>
    </body>
</html>