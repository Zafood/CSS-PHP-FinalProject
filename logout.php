<?php
include './inc/header.php';
session_start();
session_unset();
session_destroy();
header('location:index.php');
include './inc/footer.php';
?>
