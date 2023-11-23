<?php
session_start();
include_once 'DataManager.php';

$dataManager = new DataManager();
$conn = $dataManager->connect();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['user_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_purchases'])) {
        $item_name = $_POST['item_name'];

        $query = "INSERT INTO purchases (user_id, item_name) VALUES (:user_id, :item_name)";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':item_name', $item_name);
        $stmt->execute();
    } elseif (isset($_POST['remove_from_purchases'])) {
        $item_name = $_POST['item_name'];

        $query = "DELETE FROM purchases WHERE user_id = :user_id AND item_name = :item_name";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':item_name', $item_name);
        $stmt->execute();
    }
}

$query = "SELECT * FROM purchases WHERE user_id = :user_id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':user_id', $user_id);
$stmt->execute();
$purchases = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Purchasec.css">
    <title>Товары</title>
</head>
<body>
<?php include 'header.php'; ?>
    <h1>Товары</h1>
    <form action="purchases.php" method="post">
        <label for="item_name">Наименование:</label>
        <input type="text" name="item_name" required>
        <input type="submit" name="add_to_purchases" value="Добавить в корзину">
    </form>

    <h2>Ваши товары:</h2>
    <ul>
        <?php foreach ($purchases as $purchase) : ?>
            <li><?php echo $purchase['item_name']; ?>
                <form action="purchases.php" method="post" style="display: inline;">
                    <input type="hidden" name="item_name" value="<?php echo $purchase['item_name']; ?>">
                    <input type="submit" name="remove_from_purchases" value="Убрать из корзины">
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php include 'footer.php'; ?> 
</body>
</html>
