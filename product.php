<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleProduct.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Продукт</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="product-details">
        <?php
        if (isset($_GET['id'])) {
            $productId = $_GET['id'];
            $conn = new mysqli('localhost', 'root', 'root', 'web');

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "SELECT * FROM products WHERE id = $productId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                $productData = $result->fetch_assoc();

                echo '<img src="image/forTable/' . $productData["image_url"] . '" alt="' . $productData["product_name"] . '">';
                echo '<h3>' . $productData["product_name"] . '</h3>';
                echo '<p>' . $productData["description"] . '</p>';
                echo '<p>Цена: ' . $productData["price"] . 'р.</p>';

                echo '<p>Количество в наличии: ' . $productData["quantity_in_stock"] . '</p>';
            } else {
                echo "Продукт не найден";
            }

            $conn->close();
        } else {
            echo 'Идентификатор продукта не указан.';
        }
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
