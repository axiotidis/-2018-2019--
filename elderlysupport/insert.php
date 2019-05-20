<?php
    $conn = new mysqli("localhost", "root", "eap2019ge4", "eap2019ge4");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO users (fname, lname, tel, mobile, email, serv, username, pass) VALUES 
    ('".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["phonenumber"]."', '".$_POST["mobile"]."',
    '".$_POST["email"]."', '".$_POST["service"]."', '".$_POST["username"]."', '".$_POST["pass"]."')";

    if ($conn->query($sql) === TRUE) {
		echo '<script type="text/javascript">'; 
		echo 'alert("Η εγγραφή ολοκληρώθηκε με επιτυχία");'; 
		echo 'window.location.href = "http://axiotidis.com:8085/employ.php";';
		echo '</script>';
		
        #echo "Η εγγραφή ολοκληρώθηκε με επιτυχία";
    } else {
		echo '<script type="text/javascript">'; 
		echo 'alert("Error: " . $sql . "<br>" . $conn->error)'; 
		echo 'window.location.href = "http://axiotidis.com:8085/elderlysupport/newEntry.html";';
		echo '</script>';
				
        #echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();

    #header("location:http://axiotidis.com:8085/employ.php");
?>