<?php

if (!isset($_POST["line"])) {
    http_response_code(400);
    echo "Error";
    return;
}

$line = $_POST["line"];

echo "Words: " . str_word_count($line) . "<br>Chars: " . strlen($line);