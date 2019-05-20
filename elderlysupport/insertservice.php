<?php
    $conn = new mysqli("localhost", "root", "eap2019ge4", "eap2019ge4");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO services (servicename, city, address, number, postcode, phone, typeOfService, available) VALUES 
    ('".$_POST["service"]."', '".$_POST["city"]."', '".$_POST["address"]."', '".$_POST["addressnumber"]."',
    '".$_POST["postcode"]."', '".$_POST["phonenumber"]."', '".$_POST["type"]."', '".$_POST["availiable"]."')";

    if ($conn->query($sql) === TRUE) {
        echo "Η εγγραφή ολοκληρώθηκε με επιτυχία";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    header("location:services.php");
?>