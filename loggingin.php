<?php

    $user = $_POST["username"];
    $pass = $_POST["password"];

    $conn = new mysqli("localhost", "root", "eap2019ge4", "eap2019ge4");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
        $sql = "SELECT username, pass FROM users WHERE username = '$user'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            header("location:http://axiotidis.com:8085/elderlysupport/select.html");
        } else {
            header("location:http://axiotidis.com:8085/elderlysupport/nonexists.html");
        }
    $conn->close();
?>