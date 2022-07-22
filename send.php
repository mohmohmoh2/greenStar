<?php

$connect = mysqli_connect("localhost", "root", "", "php_mysql_crud");


if (isset($_POST["submit"])) {
    # code...
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["subject"];
    $address = $_POST["Message"];
    mail("info@green-star.tech", "Massage From Green Star Contact Us", $_POST["Message"], "From: $name", "From: $email");
    setcookie("name", "name", time() + 5, "/");
    return header("Location: index.php");
}

if(isset($_POST["nemail"])){
    $name = $_POST["nemail"];
    $query = "INSERT INTO `contact`(`name`) VALUES ('$name')";
    $result = mysqli_query($connect, $query);
    if($result){
        return header("Location: index.php");
    }

}

