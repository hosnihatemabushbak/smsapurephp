<?php
include 'class.php';

$class = new SmsaClient;

$number_smsa = $_GET['id'];
$get_pdf = $class->PrintSmsa($number_smsa);

$param = $get_pdf['value'];
header('Location:'. $param);