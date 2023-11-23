<?php
session_start();
include_once 'DataManager.php';

$dataManager = new DataManager();
$conn = $dataManager->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $entered_username = $_POST['username'];
    $entered_password = $_POST['password'];
    $user_id = $dataManager->getUserIDFromDatabase($entered_username, $entered_password);

    if ($user_id !== null) {
        $_SESSION['user_id'] = $user_id;
        header('Location: purchases.php');
        exit();
    } else {
        echo 'Неверные логин или пароль';
    }
}
?>
