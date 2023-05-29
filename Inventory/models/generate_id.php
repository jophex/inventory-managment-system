<?php
include '../models/security.php';

$device_id = bin2hex(random_bytes('6'));
$request_id =  bin2hex(random_bytes('6'));
$admin_id = bin2hex(random_bytes('6'));
$cus_id = bin2hex(random_bytes('6'));

?>