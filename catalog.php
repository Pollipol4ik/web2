<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleCatalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <title>Каталог товаров</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="product-cards">
        <?php
            define('DB_HOST', 'localhost');
            define('DB_USER', 'root');
            define('DB_PASSWORD', 'root');
            define('DB_NAME', 'web');

            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM products";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="product-card">';
                    if (isset($row["id"])) {
                        echo '<a href="product.php?id=' . $row["id"] . '">';
                        echo '<img src="image/forTable/' . $row["image_url"] . '" alt="' . $row["product_name"] . '">';
                        echo '</a>';
                    }
                    echo '<h3>' . $row["product_name"] . '</h3>';
                    echo '<p>Количество в наличии: ' . $row["quantity_in_stock"] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "0 результатов";
            }

            $conn->close();
        ?>
    </div>

    <?php include 'footer.php'; ?>
</body>
</html>
