<?php
session_start();

if (isset($_POST['login'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == "admin" && $pass == "admin123") {

        $_SESSION['admin'] = true;

        header("Location: dashboard.php");

    } else {

        $error = "Username atau password salah";

    }

}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Admin Login</title>

    <link rel="stylesheet" href="../style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

    <div class="admin-page">

        <div class="admin-card">

            <h2>Admin Login</h2>

            <form method="POST">

                <input type="text" name="username" placeholder="Username" required>

                <input type="password" name="password" placeholder="Password" required>

                <button name="login">Login</button>

            </form>

            <?php if (isset($error)) { ?>

                <p style="color:red;margin-top:10px;">
                    <?php echo $error; ?>
                </p>

            <?php } ?>

        </div>

    </div>

</body>

</html>