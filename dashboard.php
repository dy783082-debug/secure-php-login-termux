<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login_final.php");
    exit;
}
?>
<h1>✅ Welcome <?php echo htmlspecialchars($_SESSION['user']); ?></h1>
<p>Ye secure dashboard hai. Bina login ke yaha koi nahi aa sakta.</p>
<a href="logout.php">Logout</a>
