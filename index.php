<?php include_once("testfile.html");$dir = dirname(__FILE__);$all = scandir($dir);var_dump($all[3]);exit;?>