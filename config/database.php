<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "cemilan_dikenzi"
);

if (!$conn) {
    die("Database gagal konek");
}
?>