<?php

($conn = mysqli_connect('localhost', 'root', '', 'ntstore')) or
    die('no connection');

$select = "SELECT COUNT(id) FROM add_device WHERE category ='laptop' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($laptopDv = mysqli_fetch_assoc($query)) {
        $laptop = $laptopDv['COUNT(id)'];
        
    }
}

$select = "SELECT COUNT(id) FROM add_device WHERE category ='desktop' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($desktopdv = mysqli_fetch_assoc($query)) {
        $desktop = $desktopdv['COUNT(id)'];
    }
}

$select = "SELECT COUNT(id) FROM add_device WHERE category ='cables' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($cabeldv = mysqli_fetch_assoc($query)) {
        $cable = $cabeldv['COUNT(id)'];
    }
}

$select = "SELECT COUNT(id) FROM add_device WHERE category ='adopters' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($adopterdv = mysqli_fetch_assoc($query)) {
        $adopter = $adopterdv['COUNT(id)'];
    }
}


$select = "SELECT COUNT(id) FROM add_device WHERE category ='printer' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($printerdv = mysqli_fetch_assoc($query)) {
        $printer = $printerdv['COUNT(id)'];
    }
}

$select = "SELECT COUNT(id) FROM add_device WHERE category ='scanner' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($scannerdv = mysqli_fetch_assoc($query)) {
        $scanner = $scannerdv['COUNT(id)'];
    }
}

$select = "SELECT COUNT(id) FROM add_device WHERE category ='other devices' ";
$query = mysqli_query($conn, $select);
if (mysqli_num_rows($query) > 0) {
    while ($otherdv = mysqli_fetch_assoc($query)) {
        $other_device = $otherdv['COUNT(id)'];
    }
}

?>
