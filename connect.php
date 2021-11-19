<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

// connect to DB

    $con = new mysqli('localhost', 'root', '', 'test');
    if ($con->connect_error){
        die('Connection failed : '.$con->connect_error);
    } else {
        $stmt = $con->prepare("insert into registration(firstName, lastName, userName, email, password) values(?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $firstName, $lastName, $userName, $email, $password);
        $stmt->execute();
        echo "Registration success";
        $stmt->close();
        $con->close();
    }
?>