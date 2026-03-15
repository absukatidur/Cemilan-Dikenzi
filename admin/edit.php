<?php
session_start();
include "../config/database.php";

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
}

$id = $_GET['id'];

$data = mysqli_query($conn, "SELECT * FROM menu WHERE id=$id");
$menu = mysqli_fetch_assoc($data);

if (isset($_POST['save'])) {

    $nama = $_POST['nama'];
    $deskripsi = $_POST['deskripsi'];

    $gambar = $_FILES['gambar']['name'];
    $tmp = $_FILES['gambar']['tmp_name'];

    if ($gambar != "") {

        move_uploaded_file($tmp, "../images/menu/" . $gambar);

        mysqli_query($conn, "
UPDATE menu
SET
nama_menu='$nama',
deskripsi='$deskripsi',
gambar='$gambar'
WHERE id=$id
");

    } else {

        mysqli_query($conn, "
UPDATE menu
SET
nama_menu='$nama',
deskripsi='$deskripsi'
WHERE id=$id
");

    }

    header("Location: dashboard.php");

}
?>

<!DOCTYPE html>
<html>

<head>

    <title>Edit Menu</title>

    <link rel="stylesheet" href="../style.css">

</head>

<body>

    <div class="admin-page">

        <div class="edit-form">

            <h2>Edit Menu</h2>

            <form method="POST" enctype="multipart/form-data">

                <label>Nama Menu</label>

                <input type="text" name="nama" value="<?php echo $menu['nama_menu']; ?>" required>

                <label>Deskripsi</label>

                <textarea name="deskripsi" rows="4" required><?php echo $menu['deskripsi']; ?></textarea>

                <label>Gambar</label>

                <input type="file" name="gambar">

                <br><br>

                <img src="../images/menu/<?php echo $menu['gambar']; ?>" width="150">

                <br><br>

                <button name="save">Save</button>

            </form>

        </div>

    </div>

</body>

</html>