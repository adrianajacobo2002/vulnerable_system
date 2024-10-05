<?php
function getAllBooks($pdo) {
    $query = "SELECT * FROM books";
    $stmt = $pdo->query($query);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>
