<?php
require 'includes.php';
$prices = $_POST['price'];
$names = $_POST['name'];

foreach ($names as $key => $name) {
    $record = new Record($name , $prices[$key]);
    
    $writer = new Writer($record , 'change');        
}

Writer::save();
header("location: index.php");