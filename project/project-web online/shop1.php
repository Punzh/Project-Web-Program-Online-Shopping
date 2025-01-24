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
        <a href="shop1.php">
            <img src="shop.jpg" alt="shop">
        </a>
    </div>

    <div class="product-container">
        <?php
        // Array of products (you can fetch this from a database)
        $products = [
            ["name" => "[🛒] เซย่าไก่ตัน 1 บาท", "image" => "1.gif", "price" => "฿1", "link" => "product1.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 5 บาท", "image" => "2.gif", "price" => "฿5", "link" => "product2.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 10 บาท", "image" => "3.gif", "price" => "฿10", "link" => "product3.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 49 บาท", "image" => "4.gif", "price" => "฿49", "link" => "product4.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 250 บาท", "image" => "5.gif", "price" => "฿250", "link" => "product5.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 179 บาท", "image" => "6.png", "price" => "฿179", "link" => "product6.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 300 บาท", "image" => "7.gif", "price" => "฿300", "link" => "product7.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 199 บาท", "image" => "8.png", "price" => "฿199", "link" => "product8.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 249 บาท", "image" => "9.png", "price" => "฿249", "link" => "product9.php"],
            ["name" => "[🛒] เซย่าไก่ตัน 399 บาท", "image" => "10.png", "price" => "฿399", "link" => "product10.php"],
            // Add more products as needed
        ];

        // Loop through products and generate product containers
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

    <!-- JavaScript function to handle ordering -->
    <script>
        function orderProduct(productLink) {
            // Redirect to the product page
            window.location.href = productLink;
        }
    </script>
</body>
</html>