<?php

$connect = $GLOBALS["PDO"] = new PDO ("mysql:host=127.0.0.1:3306;dbname=notebook", "root");

if(!$connect){
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
}