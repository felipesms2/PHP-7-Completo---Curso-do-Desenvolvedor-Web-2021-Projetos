<?php

session_start();
//session_destroy();
$HTTP_REFERER = $_SERVER['HTTP_REFERER'];
header("location: $HTTP_REFERER");
