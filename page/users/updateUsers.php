<?php 
    // make update php
    $userID = htmlspecialchars($_POST['userID']);
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $level = htmlspecialchars($_POST['level']);

    $sql = "UPDATE users SET name = '$name', email = '$email', level = '$level' WHERE users.userID = '$userID'";

    $mysqli->query($sql);

    if ($mysqli->affected_rows > 0) {
        echo "<script>alert('Data Berhasil Diubah');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    } else {
        echo "<script>alert('Data Gagal Diubah');</script>";
        echo "<script>document.location='index.php?page=users';</script>";
    }

?>