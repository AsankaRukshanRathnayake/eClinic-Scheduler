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
            <div class="video"></div>
            <button onclick="">End</button>

            <div class="videoactions">
                <div class="caller">
                    <p>
                        <span>Mr. T.U. Ranasingha</span><br>
                        <span>31 Years old</span><br>
                        <span>Male</span>
                    </p>
                </div>

                <div class="callerDetailsForm">
                    <form action="">
                        <table>
                            <td><textarea name="history" id="chat" cols="50" rows="5" placeholder>History</textarea></td>
                            <td>
                                <input type="text" name="probablediagnosis" placeholder="Probable Diagnosis"><br>
                                <select name="consultant" id="">
                                    <option value="">Consultant</option>
                                    <option value="Dermatologist">Dermatologist</option>
                                    <option value="Cardiologist">Cardiologist</option>
                                </select><br>
                                <select name="clinic" id="">
                                    <option value="">Clinic</option>
                                    <option value="Dermatology">Dermatology</option>
                                    <option value="Cardiology">Cardiologist</option>
                                </select>
                            </td>
                            <td>
                                <input type="date" name="" id=""><br>
                                <input type="time" value="09:00"><br>
                                Room No. 6<br>
                                <input type="submit" value="Schedule">
                            </td>
                            
                        </table>
                        
                    </form>
                </div>
            </div>
        </div>
        <script src="../js/script.js"></script>
    </body>
</html>