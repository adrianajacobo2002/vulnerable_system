<?php
include '../config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];

    $query = "INSERT INTO books (title, author) VALUES ('$title', '$author')";
    $pdo->exec($query);

    header("Location: welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Libro</title>
    <link rel="stylesheet" href="../css/create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <form method="POST">
    <h2>Agregar Libro</h2>
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" required>
        
        <label for="author">Autor:</label>
        <input type="text" name="author" id="author" required>
    </div>
    <button type="submit">Agregar</button>
    </form>
</body>
</html>
