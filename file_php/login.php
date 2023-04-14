<?php
session_start();
session_unset();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];
 
    if ($username == 'admin' && $password == 'admin123' && $role == 'admin') {
        $_SESSION['role'] = $role;
        header('Location: admin.php');
        exit; 
    } elseif ($username == 'staff' && $password == 'staff123' && $role == 'staff') {
        $_SESSION['role'] = $role;
        header('Location: staff.php');
        exit; 
    } elseif ($username == 'player' && $password == 'player123' && $role == 'player') {
        $_SESSION['role'] = $role;
        header('Location: player.php');
        exit; 
    } else {
        $error = 'Username, password, atau role salah. Silahkan coba lagi.';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="../file_css/login.css">
    </head>
    <body>
        <div class="login">
            <h1>LOGIN</h1>
            <form action="login.php" method="post" id="form-login"> <!-- Mengganti action menjadi "login.php" -->
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" placeholder="Username" required><br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
                <select name="role">
                    <option value="admin">Admin</option>
                    <option value="staff">Staff</option>
                    <option value="player">Player</option>
                </select>
                <br><br>
                <button type="submit" id="login">LOGIN</button> <br>
                <br>
                <?php if (isset($error)) { ?>
                    <p style="color: red;"><?php echo $error; ?></p>
                <?php } ?>
            </form>
        </div>
    </body>
</html>