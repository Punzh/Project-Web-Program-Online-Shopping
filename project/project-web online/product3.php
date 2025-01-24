<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product 1</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            border: 2px solid #ddd;
            border-radius: 10px;
            text-align: center;
            background-color: white; /* Set background color to white */
        }


        .product-image {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .quantity-input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
        }

        .order-button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .order-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>[🛒] เซย่าไก่ตัน 10 บาท</h2>
        <img class="product-image" src="3.gif" alt="Product 3">
        <p>Price: 10 บาท</p>
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" class="quantity-input" value="1" min="1">
        <p>Total Price: <span id="total-price">10</span> บาท</p>
        <button class="order-button">Order</button>
    </div>

    <script>
        const quantityInput = document.getElementById('quantity');
        const totalPriceSpan = document.getElementById('total-price');
        const orderButton = document.querySelector('.order-button');

        // Calculate and update total price based on quantity
        quantityInput.addEventListener('change', function() {
            const quantity = parseInt(quantityInput.value);
            const price = 10; // Assuming fixed price for the product

            const totalPrice = quantity * price;
            totalPriceSpan.textContent = totalPrice;
        });

        // Handle order button click
        orderButton.addEventListener('click', function() {
            const quantity = parseInt(quantityInput.value);
            const totalPrice = parseInt(totalPriceSpan.textContent);

            // Here you can implement order logic, e.g., adding to cart, processing payment, etc.
            // You can use AJAX or form submission to send order details to the server
            console.log(`Ordered ${quantity} items for ${totalPrice} บาท`);
        });
    </script>
</body>
</html>
