<?php
$conn = new mysqli("localhost", "root", "", "product_db");
$result = $conn->query("SELECT * FROM cart");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .cart-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .cart-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 280px;
            transition: transform 0.3s ease;
        }

        .cart-card:hover {
            transform: translateY(-5px);
        }

        .cart-card h2 {
            margin: 0 0 10px;
            font-size: 20px;
            color: #222;
        }

        .price, .quantity {
            font-size: 16px;
            color: #555;
            margin: 5px 0;
        }

        .remove-btn {
            display: inline-block;
            margin-top: 12px;
            padding: 10px 16px;
            background-color: #e63946;
            color: #fff;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .remove-btn:hover {
            background-color: #c82333;
        }

        @media (max-width: 600px) {
            .cart-card {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<h1 style="background-color: #e63946;">Your Shopping Cart</h1>

<div class="cart-container">
    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="cart-card">
            <h2><?= htmlspecialchars($row['product_name']) ?></h2>
            <div class="price">Price: ₹<?= number_format($row['price'], 2) ?></div>
            <div class="quantity">Quantity: <?= $row['quantity'] ?></div>
            <a class="remove-btn" href="remove_cart.php?id=<?= $row['id'] ?>">Remove</a>
        </div>
    <?php endwhile; ?>
</div>

</body>
</html>
