<?php
session_start();
$db = new SQLite3('test.db');
if (!isset($_SESSION['attempts'])) $_SESSION['attempts'] = 0;
if (!isset($_SESSION['lock_time'])) $_SESSION['lock_time'] = 0;

if (time() - $_SESSION['lock_time'] < 120 && $_SESSION['attempts'] >= 5) {
    die("⛔ Blocked 2 min. Wait.");
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $u = $_POST['username']; $p = $_POST['password'];
    $stmt = $db->prepare('SELECT password FROM users WHERE username=:u');
    $stmt->bindValue(':u', $u, SQLITE3_TEXT);
    $r = $stmt->execute()->fetchArray(SQLITE3_ASSOC);
    if ($r && password_verify($p, $r['password'])) {
        $_SESSION['attempts']=0;
        $_SESSION['user']=$u;
        session_regenerate_id(true);
        header("Location: dashboard.php");
        exit;
    } else {
        $_SESSION['attempts']++;
        if ($_SESSION['attempts'] >=5) $_SESSION['lock_time']=time();
        echo "❌ Wrong! ".$_SESSION['attempts']."/5";
    }
}
?>
<form method="POST">
<input name="username" placeholder="Username"><br><br>
<input name="password" type="password" placeholder="Password"><br><br>
<button>Login</button>
</form>
