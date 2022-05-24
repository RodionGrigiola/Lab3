<?php

$myRegEx = "/(\d)+/";
$stringToChange = "a1b2c3";
echo preg_replace_callback($myRegEx, fn($matches) => intval($matches[0]) ** 2, $stringToChange);