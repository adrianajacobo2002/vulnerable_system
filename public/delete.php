<?php
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM books WHERE id = '$id'";
    $pdo->exec($query);

    header("Location: welcome.php");
    exit();
}
?>
