<?php
// Logout script: ends the session and redirects to login page
session_start();
session_unset();
session_destroy();
header('Location: login.php');
exit;
?>