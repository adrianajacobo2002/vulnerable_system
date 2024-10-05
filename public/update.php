<?php
include '../config/database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM books WHERE id = '$id'";
    $stmt = $pdo->query($query);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$book) {
        die("Libro no encontrado.");
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $id = $_POST['id'];

    $query = "UPDATE books SET title = '$title', author = '$author' WHERE id = '$id'";
    $pdo->exec($query);

    header("Location: welcome.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Libro</title>
    <link rel="stylesheet" href="../css/update.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>

<form method="POST">
<h2>Editar Libro</h2>
    <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
    <div class="form-group">
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="<?php echo $book['title']; ?>" required>
        
        <label for="author">Autor:</label>
        <input type="text" name="author" id="author" value="<?php echo $book['author']; ?>" required>
    </div>
    <button type="submit">Actualizar</button>
</form>
</body>
</html>
