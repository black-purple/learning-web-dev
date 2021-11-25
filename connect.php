<?php

    $con = new PDO("mysql:host=localhost,dbname=test","root","");
if (isset($_POST['submit-btn'])){
        $req = $con->prepare('insert into registration value (?,?,?,?,?)');
        $req->bindValue(1,$_POST['firstName']);
        $req->bindValue(2,$_POST['lastName']);
        $req->bindValue(3,$_POST['userName']);
        $req->bindValue(4,$_POST['email']);
        $req->bindValue(5,$_POST['password']);
        $req->execute();
    }
?>