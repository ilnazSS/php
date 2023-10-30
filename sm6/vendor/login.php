<?php
include("../connect/connect.php");
session_start();

$sql = 'SELECT COUNT(*) AS count FROM `users`
        WHERE `email` = ? AND `password` = ?';

$password = hash("sha256", $_POST['password']);
$statement = $connection->prepare($sql);
$statement->execute([$_POST['email'], $password]);
$result = $statement->fetch(PDO::FETCH_ASSOC)['count'];

if ((int) $result === 1) {
    $_SESSION['isLogged'] = true;
} else {
    $_SESSION['isLogged'] = false;
    $_SESSION['message'] = true;
}

header('Location: ../index.php');

?>