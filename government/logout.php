<?php
session_start();
session_destroy();
header('location:gov.php');
?>