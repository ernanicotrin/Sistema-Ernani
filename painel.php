<?php
include 'config.php';
if(!isset($_SESSION['user'])){ header('Location: index.php'); exit; }
echo '<h1>Painel - Sistema Ernani</h1>';
?>