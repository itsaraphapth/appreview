<?php
$info = array(
    'host' => '192.168.50.3',
    'user' => 'itsaraphap',
    'password' => 'Mc5s7140',
    'dbname' => 'inacprd'
);
$conn = mysqli_connect($info['host'], $info['user'], $info['password'], $info['dbname']) or die('Error connection database!');
mysqli_set_charset($conn, 'utf8');
?>