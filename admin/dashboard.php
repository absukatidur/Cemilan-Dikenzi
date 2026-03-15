<?php
session_start();
include "../config/database.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Dashboard Admin</title>

    <link rel="stylesheet" href="../style.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

</head>

<body>

    <div class="admin-page">

        <div class="admin-card">

            <h2>Dashboard Admin</h2>

            <?php
            $data = mysqli_query($conn, "SELECT * FROM menu");

            while ($menu = mysqli_fetch_assoc($data)) {
                ?>

                <div class="menu-item">

                    <span><?php echo $menu['nama_menu']; ?></span>

                    <div class="admin-actions">

                        <a class="btn-edit" href="edit.php?id=<?php echo $menu['id']; ?>">
                            Edit
                        </a>

                    </div>

                </div>

            <?php } ?>

            <a href="logout.php" class="btn-logout">
                Logout
            </a>

        </div>

    </div>

</body>

</html>