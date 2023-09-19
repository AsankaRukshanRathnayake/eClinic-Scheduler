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
            <div class="video">
                <h2 style="color:red">video</h2>
            </div>
            
            <div class="videoactions">
                <form action="">
                    <textarea name="chat" id="chat" cols="50" rows="5" placeholder>Send a Message</textarea>
                    <input type="submit" name="send" value="Send">
                </form>
            <button onclick="redirect('other/pending.php')">End</button>
            </div>
        </div>
        <script src="../js/script.js"></script>
    </body>
</html>