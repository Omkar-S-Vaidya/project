<?php
session_start();

unset($_SESSION['from']);


header("Location: booking.php");
die;
?>