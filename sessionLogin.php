<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form</title>
</head>
<body>
    <h1>Login From</h1>
    <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username"><br>
        <label for="Password"> Password :</label>
        <input type="Password" name="inputPassword" id="Password"><br>
            <label for="role">Role :</label>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="kasir">Kasir</option>
    </select>
        <button type="submit" name="btnLogin">Login</button>
    </form>

    <?php
    if(isset($_POST['btnLogin'])) {
        $username = $_POST['username'];
        $password = $_POST['inputPassword'];
        $role = $_POST['role'];
        // Simulate a login check
        if ($username==='tengku' && $password==='12345') {
            session_start();
            $_SESSION['isLogin'] = true;
            $_SESSION['name'] = $username;
            $_SESSION['role'] = $role;
            // Redirect to dashboard based on role
            header('Location: dashboard.php');
        } else {
            header('Location: sessionLogin.php');
        }
    }
    ?>
</body>
</html>