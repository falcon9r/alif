<?php

require_once 'includes.php';

$name = $_POST['name'];
$price = $_POST['price'];

$record = new Record($name , $price);

new Writer($record , "append");

header("location: index.php");