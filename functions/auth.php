<?php
function login($pdo, $username, $password) {
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $stmt = $pdo->query($query);
    $user = $stmt->fetch();

    return $user ? true : false;
}
?>
