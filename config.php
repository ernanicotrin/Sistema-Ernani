<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_NAME', 'ernani');
define('DB_USER', 'ernaniuser');
define('DB_PASS', 'ernani123');
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($conn->connect_error) { die('Erro: ' . $conn->connect_error); }
?>