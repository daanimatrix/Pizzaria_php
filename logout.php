<?php 
require 'config.php';

$_SESSION['token'] = '';
header("Location: ".$base."/login.php");
exit;