<?php
session_start();
error_reporting(E_ALL ^ E_WARNING);
error_reporting(E_ERROR | E_PARSE);


$data = $_GET['data'];

$ceklogin = "/login/i";

$deteklogin = preg_match($ceklogin, $data);
if ($deteklogin >= 1) {
    $data = "login";
    include('classes.php');
} else {
    include('database/classes.php');
}
$home = new access();
$home->set_link($data);

?>
