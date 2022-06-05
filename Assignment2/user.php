<?php

if (!session_start()) {
    http_response_code(500);
    echo "Internal Server Error";
    return;
}

if (!isset($_SESSION["name"]) || !isset($_SESSION["surname"]) || !isset($_SESSION["age"])) {
    http_response_code(401);
    echo "Unauthorized";
    return;
}


if (isset($_SESSION["name"]) && isset($_SESSION["surname"]) && isset($_SESSION["age"])) {
    echo "Your  {$_SESSION['name']} {$_SESSION['surname']} is. You are {$_SESSION['age']} y.o.";
}