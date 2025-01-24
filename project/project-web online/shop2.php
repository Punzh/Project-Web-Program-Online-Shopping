<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop 1</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="recommend-item">
        <a href="shop2.php">
            <img src="shop2.gif" alt="shop">
        </a>
    </div>

    <div class="product-container">
        <?php
        // Array of products (you can fetch this from a database)
        $products = [
            ["name" => "[🛒] โคตรคุ้ม ผลเซย่าเหินเวหาถาวร", "image" => "11.gif", "price" => "฿1500", "link" => "product11.php"],
            ["name" => "[🛒] โคตรคุ้ม ผลเซย่าชีต้าถาวร", "image" => "12.gif", "price" => "฿800", "link" => "product12.php"],
            ["name" => "[🛒] โคตรคุ้ม ผลเซย่าก้านกล้วยถาวร", "image" => "13.gif", "price" => "฿1000", "link" => "product13.php"],
        ];
        
        foreach ($products as $product) {
            echo '<div class="product-item">';
            echo '<img src="' . $product["image"] . '" alt="' . $product["name"] . '">'; // Image
            echo '<div class="product-info">'; // Product info container
            echo '<p class="product-name">' . $product["name"] . '</p>'; // Product name
            echo '<p class="product-price">' . $product["price"] . '</p>'; // Product price
            echo '<button onclick="orderProduct(\'' . $product["link"] . '\')">สั่งซื้อ</button>'; // Order button
            echo '</div>'; // Close product info container
            echo '</div>'; // Close product-item div
        }
        ?>
    </div>

        <script>
        function orderProduct(productLink) {
            // Redirect to the product page
            window.location.href = productLink;
        }
    </script>
</body>
</html>