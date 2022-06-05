<?php
session_start();

if (isset($_POST["name"]) && isset($_POST["surname"]) && isset($_POST["age"])) {
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];

    header('Location: ./user.php');
}
else{
    echo "Error";
}