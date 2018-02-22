<?php
session_start();
session_destroy();
header('Location: drlogin.php');
?>