<html>
    <head>
        <meta charset="UTF-8">
        <title>User Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="ge4style.css">
    </head>
    <body>
        <h3 class="center">Σύνδεση στο σύστημα ElderlySupport</h3>
        <form class="popup" action="loggingin.php" method="POST">
            Όνομα Χρήστη
            <input type="text" name="username" placeholder="" required/><br><br>
            Κωδικός
            <input type="password" name="password" placeholder="" required/><br><br>
            <input type="submit" value="Σύνδεση"/><br>
            <a href="">Ξέχασα τον κωδικό μου</a><br><br><br>
            <a href="http://axiotidis.com:8085/elderlysupport/newEntry.html" style="font-size: 20">Νέα εγγραφή</a>
        </form>
    </body>
</html>