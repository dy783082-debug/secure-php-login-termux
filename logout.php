<?php
session_start();
session_destroy();
header("Location: login_final.php");
echo "Logged out";
?>
