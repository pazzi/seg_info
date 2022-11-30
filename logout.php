<?php
error_reporting(0);
require 'config/config.php';

session_start();
session_destroy();
header ("Location:index.php");
?>
